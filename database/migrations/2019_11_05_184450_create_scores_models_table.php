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
            $table->integer('score_positive');
            $table->integer('ml_score_positive');
            $table->integer('dsa_score_positive');
            $table->integer('java_score_positive');

            $table->integer('score_negative');
            $table->integer('ml_score_negative');
            $table->integer('dsa_score_negative');
            $table->integer('java_score_negative');
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
