<?php

namespace App\Http\Controllers;
use App\Vote;
use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $answer = new Answer();
        $answer->answer = $request->answer;
        $answer->question_id = $request->question_id;
        $answer->answered_by = $request->answered_by;
        $answer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $answer = Answer::find($id);
        $answer->answer = $request->answer;
        $answer->question_id = $request->question_id;
        $answer->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer()::destroy($id);
    }

    public function voting($id,$votes){
//        dd($id);

        $answer = Answer::find($id);
        if ($answer){
            $vote =new  Vote();
            $vote->userId = $answer->answered_by;
            $vote->answerId = $answer->id;
            if(!Vote::where('answerId',$answer->id)->where('userId',$answer->answered_by)->exists())
            {
                $totalVotes = Vote::where('answerId',$answer->id);
                if(!isset($totalVotes->totalVotes)){
                    $vote->totalVotes = $votes;
                }
                else
                     $vote->totalVotes = $totalVotes->totalVotes.$votes;
                 $vote->save();
             }
        }
        return redirect()->back();
    }

}
