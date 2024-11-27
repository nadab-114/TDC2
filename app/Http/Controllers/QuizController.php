<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuizAttempt;
use App\Models\QuizAnswer;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class QuizController extends Controller
{
    // Display all quizzes
    public function index()
    {
        $quizzes = Quiz::paginate(10);
        return view('quizzes.index', compact('quizzes'));
    }

    // Display questions for a specific quiz
    public function show(Quiz $quizzes)
    {
        $questions = $quizzes->questions()->paginate(10);
        return view('quizzes.show', compact('quizzes', 'questions'));
    }


     // Handle quiz submission
    public function submit(Request $request, Quiz $quizzes, QuizAttempt $quiz_attempts)
    {
        

        // Get the current user's ID
        $userId = Auth::id();

        $validated = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|string|in:option_a,option_b,option_c,option_d',
        ]);


        $quiz_attempts = QuizAttempt::create([
            'user_id' => $userId,
            'quiz_id' => $quizzes->id,
            'status' => 'completed',
            'score' => 0, // Placeholder, calculate score after grading
        ]);

        $correctAnswersCount = 0;

        $answersToInsert = [];

        // Save the answers
        // Loop through the submitted answers and save them
        foreach ($validated['answers'] as $question_Id => $selectedOption) {
            $question = Question::find($question_Id);
            $isCorrect = $selectedOption === $question->correct_option;

            // $existingAnswer = QuizAnswer::where('quiz_attempt_id', $quiz_attempts->id)
            // ->where('question_id', $question_Id)
            // ->first();

            // if (!$existingAnswer) {
            //     $isCorrect = $selectedOption === $question->correct_option;
            
            // Save answer
            $answersToInsert[] = [
                'quiz_attempt_id' => $quiz_attempts->id,
                'question_id' => $question_Id,
                'selected_option' => $selectedOption,
                'is_correct' => $isCorrect ? 1 : 0,
                'created_at' => now(),
                'updated_at' => now(),
            ];

        }

         // Insert all the answers in batch (only if there are answers to insert)
        if (!empty($answersToInsert)) {
        QuizAnswer::insert($answersToInsert);
        }

        $correctAnswersCount = QuizAnswer::where('quiz_attempt_id', $quiz_attempts->id)
        ->where('is_correct', 1)
        ->count();

        // Update the score in the quiz attempt
        $quiz_attempts->update(['score' => $correctAnswersCount]);
        

        // Redirect to results or another page
        return redirect()->route('quizzes.results', [
            'quizzes' => $quizzes->id,
            'attempt' => $quiz_attempts->id,
        ]);

        
        }

    

    // Show results for a specific quiz attempt
    public function result(Quiz $quizzes, QuizAttempt $attempt)
{
    $answers = QuizAnswer::where('quiz_attempt_id', $attempt->id)
        ->with('question') // Load related question data
        ->get();

    if ($answers->isEmpty()) {
        return view('quizzes.results', compact('quizzes', 'attempt'))->with('message', 'No answers recorded for this attempt.');
    }

    logger("Retrieved Answers: " . json_encode($answers->toArray()));
    return view('quizzes.results', compact('quizzes', 'attempt', 'answers'));
}

    
}

