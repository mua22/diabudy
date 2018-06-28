<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Support\Facades\Request;

class QuestionReading extends Controller
{
    //

    protected function viewAnswer($id)
    {

        $questions = Question::find($id);

        return view('diabudy.questionsForum.questionwithanswers', compact('questions'));
    }

    protected function addAnswer(Request $request)
    {
        $ans = new Answer();
        $ans->answer = $request->answer;
        $ans->question_id = $request->question_id;
        $ans->answered_by = $request->answered_by;
        $ans->save();
        viewAnswer($request->question_id);
    }
}
