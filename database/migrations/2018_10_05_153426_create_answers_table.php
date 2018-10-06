<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer ('userId');
            $table->date ('dateTaken');
            $table->integer('questionId');
            $table->integer ('score');
            $table->boolean('userAnswer');

        $table->foreign('userId')
            ->references('id')
            ->on($tableNames['users'])
            ->onDelete('cascade');
        $table->foreign('questionId')
            ->references('id')
            ->on($tableNames['questions'])
            ->onDelete('cascade');

        $table->primary(['id']);

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
        Schema::dropIfExists('answers');
    }
}
