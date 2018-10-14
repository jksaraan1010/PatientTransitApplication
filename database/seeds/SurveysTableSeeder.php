<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            'nameOfSurvey' => 'Heart Disease Patient Transition Tracker',
            
        ]);
    }
}
