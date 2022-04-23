<?php

namespace App\Http\Controllers;
use App\Models\Survey;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //

    public function index() {
        return view('survey');
    }
    public  function savesurvey() {
        

        $survey = new Survey();

        $survey->sex = request('sex');
        $survey->name = request('name');
        $survey->job = request('job');
        $survey->questionone = request('questionone');
        $survey->questiontwo = request('questiontwo');
        $survey->questionthree = request ('questionthree');
        $survey->questionfour = request('questionfour');
        $survey->questionfive = request('questionfive');
        $survey->questionsix = request('questionsix');

        

        //save in db the new survey
        $survey->save();

        return redirect('/home');



    }

    public function viewsurvey() {
        $surveys = Survey::all();
       
        return view('/viewsurveys')->with ('surveys', $surveys);
    }

}
