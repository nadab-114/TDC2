<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'quiz_id', 'score', 'status'];

    // Define the relationship with the UserAnswer model
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
{
    return $this->hasMany(QuizAnswer::class,);
}

}