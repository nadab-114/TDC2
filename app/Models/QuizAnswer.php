<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuizAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_attempt_id', 'question_id', 'selected_option', 'is_correct'];

    // Define the relationship with the QuizAttempt model
    public function quizAttempt()
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    // Define the relationship with the Question model
    public function question()
{
    return $this->belongsTo(Question::class);
}


    // Define the relationship with the Answer model
    public function answer()
    {
        return $this->belongsTo(QuizAnswer::class);
    }

    
}
