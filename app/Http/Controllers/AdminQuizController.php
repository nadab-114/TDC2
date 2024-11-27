<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class AdminQuizController extends Controller
{

    public function show($id)
{
    $quiz = Quiz::with('questions')->findOrFail($id);
    return view('admin.showquiz');
}
    public function quizindex()
    {
        $quizzes = Quiz::all();
        
        return view('admin.quiz', compact('quizzes'));
    }

    public function createquiz()
    {
        return view('admin.createquiz');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'topic' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Quiz::create($request->all());

        return redirect()->route('admin.quiz')->with('success', 'Quiz created successfully!');
    }

    public function showQuestions(Quiz $quizzes)
{
    // Retrieve all questions for this quiz
    $questions = $quizzes->questions;  // Assuming Quizzes has a 'questions' relationship defined

    // Pass the quiz and its questions to the view
    return view('admin.showquestions', compact('quizzes', 'questions'));
}

    public function edit(Quiz $quizzes)
    {
        return view('admin.editquiz', compact('quizzes'));
    }

    public function update(Request $request, Quiz $quizzes)
    {
        $request->validate([
            'title' => 'required',
            'topic' => 'required',
        ]);

        $quizzes->update($request->all());

        return redirect()->route('admin.quiz')->with('success', 'Quiz updated successfully!');
    }

    public function destroy(Quiz $quizzes)
    {
        $quizzes->delete();

        return redirect()->route('admin.quiz')->with('success', 'Quiz deleted successfully!');
    }
}
    