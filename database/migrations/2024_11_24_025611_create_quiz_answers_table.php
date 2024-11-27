<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_attempt_id')->constrained()->onDelete('cascade'); // Foreign key for the quiz attempt
            $table->unsignedBigInteger('question_id')->constrained()->onDelete('cascade'); // Foreign key for the question being answered
            $table->string('selected_option')->nullable()->default(''); // The option selected by the user (e.g., 'option_a')
            $table->boolean('is_correct')->default(false); // Whether the answer is correct
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('quiz_attempt_id')->references('id')->on('quiz_attempts')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('quiz_answers');
    }
}