<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = ['title', 'topic', 'description'];

    // Define the relationship with the Question model
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

}
