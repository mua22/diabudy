<?php

namespace App\Http\Controllers\Dashboard;

use App\Diary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diabudy.diary.index');
    }

    public function data()
    {
        //dd('data');
        $user = Auth::user();

        $entries = $user->diary()->orderBy('created_at','DESC')->paginate(10);
        //return $entries;
        return view('diabudy.diary.entries',compact('entries'));
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
        $entry = new Diary();
        $entry->entry = $request->entry;
        $user = Auth::user();
        $user->diary()->save($entry);
        return view('diabudy.diary._entry',compact('entry'));
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
        $entry = Diary::find($id);
        $entry->entry = $request->entry;

        $entry->save();
        return $entry;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Diary::destroy($id);
    }
}
