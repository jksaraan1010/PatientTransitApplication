<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert(
            [
            'nameOfSection' => 'Health Awareness',
            'surveyNumber'=> '1',
            'marks'=>'1',
            'numOfQuestions'=>'4',
        ]);
        DB::table('sections')->insert(
            [
                'nameOfSection' => 'Self-Care',
                'surveyNumber'=> '1',
                'marks'=>'1',
                'numOfQuestions'=>'4',
        ]);
        DB::table('sections')->insert(
            [
                'nameOfSection' => 'Communication',
                'surveyNumber'=> '1',
                'marks'=>'1',
                'numOfQuestions'=>'4',
            ]);
    }
}
