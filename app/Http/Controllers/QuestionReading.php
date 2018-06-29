<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;

class QuestionReading extends Controller
{
    //

    protected function viewAnswer($id)
    {
        $questions = Question::find($id);
        $answer = Answer::where('question_id', $questions->id)->cursor();
        return view('diabudy.questionsForum.questionwithanswers', compact('questions', 'answer'));
    }

}
