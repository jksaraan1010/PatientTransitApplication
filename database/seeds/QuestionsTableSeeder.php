<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
            
            ['question'=> 'I know what medications I am taking and why I am taking them', 
            'sectionId'=>'1',
            'surveyNumber'=> '1',
            'nameOfDisease'=>'heart',
             'correctAnswer'=>'1',
        ]);
        DB::table('questions')->insert(
            [
            'question'=> 'I know my complete medical history', 
            'sectionId'=>'1',
            'surveyNumber'=> '1', 
            'nameOfDisease'=>'heart',
            'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know what to do if I feel sick', 
            'sectionId'=>'1', 
            'surveyNumber'=> '1',
            'nameOfDisease'=>'heart',
            'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know what type of insurance I have and how to apply for it', 
            'sectionId'=>'1', 
            'surveyNumber'=> '1',
            'nameOfDisease'=>'heart',
            'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I am able to take care of myself', 
            'sectionId'=>'2',
            'surveyNumber'=> '1',
             'nameOfDisease'=>'heart',
             'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I can take my medications by myself without reminders or help',
             'sectionId'=>'2',
              'surveyNumber'=> '1',
              'nameOfDisease'=>'heart',
              'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know how to get my medications filled',
             'sectionId'=>'2',
             'surveyNumber'=> '1',
              'nameOfDisease'=>'heart',
              'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know how to get transportation to my doctors appointments', 
            'sectionId'=>'2', 
            'surveyNumber'=> '1',
            'nameOfDisease'=>'heart',
            'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know how to contact the doctors office if i feel ill', 
            'sectionId'=>'3',
            'surveyNumber'=> '1',
             'nameOfDisease'=>'heart',
             'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I know how to make appointments with my doctor',
             'sectionId'=>'3',
              'surveyNumber'=> '1',
              'nameOfDisease'=>'heart',
              'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I can speak to doctor by myself without help from family or friends',
             'sectionId'=>'3',
             'surveyNumber'=> '1', 
             'nameOfDisease'=>'heart',
             'correctAnswer'=>'1',
            ]);
            DB::table('questions')->insert(
                [
            'question'=> 'I feel comfortable transitioning from my current doctor to an adult doctor', 
            'sectionId'=>'3',
            'surveyNumber'=> '1',
             'nameOfDisease'=>'heart',
             'correctAnswer'=>'1',
            ]);
        

            
    }
}
