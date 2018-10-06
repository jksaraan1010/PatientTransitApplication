<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

  $this->call(QuestionsTableSeeder::class);
  $this->call(AnswersTableSeeder::class);
  $this->call(SectionsTableSeeder::class);


  Eloquent::reguard();
    }
}
