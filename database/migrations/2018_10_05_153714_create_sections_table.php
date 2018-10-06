<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('nameOfSection');
            $table -> integer('surveyNumber');
            $table -> integer('marks');
            $table -> integer('numberOfQuestions');
            $table->timestamps();

        $table->foreign('surveyNumber')
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
        Schema::dropIfExists('sections');
    }
}
