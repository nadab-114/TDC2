<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text')->nullable(); // Optional text-based question
            $table->string('question_image')->nullable(); // Path to an optional image for the question
            $table->string('option_a')->nullable(); // Option A (can be text or image path)
            $table->string('option_a_image')->nullable(); // Image for Option A (if applicable)
            $table->string('option_b')->nullable(); // Option B
            $table->string('option_b_image')->nullable(); // Image for Option B
            $table->string('option_c')->nullable(); // Option C
            $table->string('option_c_image')->nullable(); // Image for Option C
            $table->string('option_d')->nullable(); // Option D
            $table->string('option_d_image')->nullable(); // Image for Option D
            $table->string('correct_option'); // Stores the correct option (e.g., 'option_a', 'option_b')
            $table->unsignedBigInteger('quiz_id'); // Foreign key linking to quizzes table
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->timestamps(); // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}


