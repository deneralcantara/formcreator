<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditFormQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_question_answers', function (Blueprint $table) {
            $table->string('lat');
            $table->string('long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_question_answers', function (Blueprint $table) {
            $table->dropColumn('lat');
            $table->dropColumn('long');
        });
    }
}
