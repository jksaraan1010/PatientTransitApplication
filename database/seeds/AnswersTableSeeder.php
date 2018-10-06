<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\answers::insert([
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',
            'correctAnswer'=> '1',


        ]);


    }
}
