<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('users');
            $table->string('score_positive');
            $table->string('ml_score_positive');
            $table->string('dsa_score_positive');
            $table->string('java_score_positive');

            $table->string('score_negative');
            $table->string('ml_score_negative');
            $table->string('dsa_score_negative');
            $table->string('java_score_negative');
            $table->string('recommended_course')->nullable();
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
        Schema::dropIfExists('scores_models');
    }
}
