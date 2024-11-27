<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class AdminQuestionController extends Controller
{
    // Display the form for creating a new question in a quiz
    public function create(Quiz $quizzes)
    {
        if (!$quizzes) {
            return redirect()->route('admin.quiz')->with('error', 'Quiz not found');
        }
    {        
        return view('admin.createquestion', compact('quizzes'));
    }

    }

    // Handle storing a new question
    public function store(Request $request, Quiz $quizzes)
    {
        // Validate the input
        $validated = $request->validate([
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_option' => 'required|in:option_a,option_b,option_c,option_d',
        ]);

        // Create the question and associate it with the quiz
        $quizzes->questions()->create($validated);

        // Redirect back to the quiz or question list
        return redirect()->route('admin.quiz')->with('success', 'Question created successfully!');
    }

    public function showQuestions(Quiz $quizzes)
{
    // Retrieve all questions for this quiz
    $questions = $quizzes->questions;  // Assuming Quizzes has a 'questions' relationship defined

    // Pass the quiz and its questions to the view
    return view('admin.showquestions', compact('quizzes', 'questions'));
}


public function edit(Quiz $quizzes, Question $questions)
{
    return view('admin.questionsedit', compact('quizzes','questions'));
}

// Update method to save the edited question
public function update(Request $request, Quiz $quizzes, Question $questions)
{
    $validatedData = $request->validate([
        'question_text' => 'required|string|max:255',
        'option_a' => 'required|string|max:255',
        'option_b' => 'required|string|max:255',
        'option_c' => 'required|string|max:255',
        'option_d' => 'required|string|max:255',
        'correct_option' => 'required|in:option_a,option_b,option_c,option_d',
    ]);

    $questions->update($validatedData);

    return redirect()->route('admin.showquestions', $quizzes->id)
        ->with('success', 'Question updated successfully.');
}

// Destroy method to delete a question
public function destroy(Question $question)
{
    $quizId = $question->quiz_id;
    $question->delete();

    return redirect()->route('admin.showquestions', $quizId)->with('success', 'Question deleted successfully!');
}

}