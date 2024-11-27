<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class QuestionsSeeder extends Seeder
{
    public function run()
    {
        $question = Question::create(['question_text' => 'What is the maximum speed in a school zone?']);
        $question->answers()->createMany([
            ['answer_text' => '20 km/h', 'is_correct' => true],
            ['answer_text' => '30 km/h', 'is_correct' => false],
            ['answer_text' => '40 km/h', 'is_correct' => false],
        ]);

        $question = Question::create(['question_text' => 'What does a red light indicate?']);
        $question->answers()->createMany([
            ['answer_text' => 'Stop', 'is_correct' => true],
            ['answer_text' => 'Go', 'is_correct' => false],
            ['answer_text' => 'Slow Down', 'is_correct' => false],
        ]);
    }
}