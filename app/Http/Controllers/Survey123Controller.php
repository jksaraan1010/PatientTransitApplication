<?php

namespace App\Http\Controllers;
use App\questions;
use App\answers;
use App\sections;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Survey123Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $existingAnswers = answers::orderBy('id','DESC')->get();
        $surveryNumber = 1;
        $sectionId = 1;
        $noOfQuestions = 4;
        if(!empty($existingAnswers))
        {
           $questionId = $existingAnswers->first()->questionId;
        //    $questionId = $latest->questionId;
           $sectionId = questions::find($questionId)->sectionId + 1;
           $sectionRecord = sections::find($sectionId);
           $surveyId = $sectionRecord->testNumber;
           $noOfQuestions = $sectionRecord->noOfQuestions;
        }
        $questionsForSurvey = questions::where('sectionId', $sectionId)->paginate($noOfQuestions);
        return view('Survey123.index')->with('questionsForSurvey', $questionsForSurvey);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Survey123.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = "insert into `answers`  ( userId, dateTaken,userAnswer, questionId ) values(" ;
        $sectionId = $request->input('sectionId');
        $sectionRecord = sections::where('id',$sectionId)->first();
        $questionsInSection = questions::where('sectionId',$sectionId)->paginate($sectionRecord->noOfQuestions);
        $surveyNumber = $questionsInSection->first()->testNumber;
        $questionId = 1;
        $userAnswer = 0;
        $dateTaken = "2018/10/06";
        $userId = 0;
        foreach($questionsInSection as $question){
            $questionId = $question->id;
            $userAnswer = $request->input('userAnswerForQuestion'.$questionId);

            $query .= $userId . ",'" .$dateTaken . "'," . $userAnswer. "," . $questionId. "),(";
        }
        $query = rtrim($query,",(");
        $query .= ";";
        DB::insert($query);
        return view('Survey123.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
