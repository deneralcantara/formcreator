<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_question_answers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('form_question_id');
            $table->text('answer');

            $table->foreign('form_question_id')->references('id')->on('form_questions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_question_answers');
    }
}
