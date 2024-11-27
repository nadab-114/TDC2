<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_option',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function answers()
{
    return $this->hasMany(QuizAnswer::class);
}

public function exams()
{
    return $this->belongsToMany(Exam::class);
}
    
public function getOptionText($selectedOption)
{
    $options = [
        'option_a' => $this->option_a,
        'option_b' => $this->option_b,
        'option_c' => $this->option_c,
        'option_d' => $this->option_d,
    ];

    return $options[$selectedOption] ?? 'Unknown Option';
}

}
