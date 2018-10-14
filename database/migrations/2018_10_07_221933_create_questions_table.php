<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->integer('sectionId') ;
            $table->integer('surveyNumber')->unsigned();
            $table->foreign('surveyNumber')->references('id')->on('surveys')->onDelete('cascade');
            $table->string('nameOfDisease');
            $table->boolean('correctAnswer');
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
        Schema::dropIfExists('questions');
    }
}
