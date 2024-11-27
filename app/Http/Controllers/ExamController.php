<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function create()
    {
        $questions = Question::inRandomOrder()->take(20)->get();
        $exam = Exam::create([
            'user_id' => Auth::id(),
            'total_questions' => $questions->count(),
        ]);

        $exam->questions()->attach($questions);

        return view('exams.take', compact('exam'));
    }

    public function store(Request $request, Exam $exam)
    {
        $score = 0;

        foreach ($request->answers as $questionId => $selectedOption) {
            $question = $exam->questions->find($questionId);
            $correctOption = $question->correct_option;

            $exam->questions()->updateExistingPivot($questionId, [
                'selected_option' => $selectedOption,
            ]);

            if ($selectedOption === $correctOption) {
                $score++;
            }
        }

        $exam->update([
            'score' => $score,
            'completed_at' => now(),
        ]);

        return redirect()->route('exams.result', $exam->id);
    }

    public function result(Exam $exam)
    {
        return view('exams.result', compact('exam'));
    }


}
