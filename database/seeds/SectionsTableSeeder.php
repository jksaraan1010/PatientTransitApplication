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
        \App\answers::insert([
            'nameOfSection'=> 'Health Awareness',
            'nameOfSection'=> 'Self-Care',
            'nameOfSection'=> 'Communication',
        ]);
    }
}
