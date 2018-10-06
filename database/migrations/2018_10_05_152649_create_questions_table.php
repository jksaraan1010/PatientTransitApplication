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
            $table->integer('sectionId');
            $table->integer('testNumber');
            $table->string('nameOfDisease');
            $table->boolean('correctAnswer');

            $table->timestamps();

            $table->foreign('sectionId')
                ->references('id')
                ->on($tableNames['sections'])
                ->onDelete('cascade');
            $table->foreign('testNumber')
                ->references('id')
                ->on($tableNames['surveys'])
                ->onDelete('cascade');

            $table->primary(['id']);
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
