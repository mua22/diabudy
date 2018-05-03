<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\StoreSugarLevelRequest;
use App\Reading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $categories = $user->categories()->orderBy('record_time','desc');
        return view('diabudy.logbook.index',compact('categories'));
    }

    public function getIndexData()
    {
        $user = Auth::user();
        $readings = $user->readings()->paginate(10);

        return view('diabudy.logbook._index_rows',compact('readings'));
    }

    public function storeSugarLevel(StoreSugarLevelRequest $request)
    {
        $reading = new Reading();
        $reading->create($request->except(['_token']));

        return redirect(route('logbook.index'));
    }
    public function addSugar(Request $request)
    {
        $user = Auth::user();
        $categories = $user->categories;

        return view('diabudy.logbook.create',compact('categories'));
    }

    public function editSugar($id)
    {
        $user = Auth::user();
        $categories = $user->categories;
        $reading = Reading::find($id);
        return view('diabudy.logbook.edit',compact('reading','categories'));
    }
    public function updateSugar($id,Request $request)
    {
        $reading = Reading::find($id);
        $reading->fill($request->except(['_token']));
        $reading->save();
        return redirect(route('logbook.index'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = $user->categories;

        return view('diabudy.logbook.create',compact('categories'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reading = Reading::find($id);
        $reading->delete();
        return "Readeing Deleted";

    }

    public function getDataForCharts()
    {
        $user = Auth::user();
        $readings = $user->charts()->paginate(10);
        $labels = array();
        $dataset1 = array();
        $dataset2 = array();
        $dataset3 = array();
        $dataset1['label'] = 'min';
        $dataset2['label'] = 'avg';
        $dataset3['label'] = 'max';

        $dataset1['data'] = array();
        $dataset2['data'] = array();
        $dataset3['data'] = array();

        $dataset1['backgroundColor'] = array();
        $dataset2['backgroundColor'] = array();
        $dataset3['backgroundColor'] = array();

        $dataset1['borderColor'] = array();
        $dataset2['borderColor'] = array();
        $dataset3['borderColor'] = array();
        $dataset1['borderWidth'] = 1;
        $dataset2['borderWidth'] = 1;
        $dataset3['borderWidth'] = 1;


        foreach ($readings as $reading){
            array_push($labels,$reading['date']);
            array_push($dataset1['data'],$reading['min']);
            array_push($dataset2['data'],$reading['average']);
            array_push($dataset3['data'],$reading['max']);

            array_push($dataset1['backgroundColor'],"rgba(3, 169, 244, 0.7)");
            array_push($dataset3['backgroundColor'],"rgba(244, 67, 54, 0.7)");
            array_push($dataset2['backgroundColor'],"rgba(255, 152, 0, 0.7)");

            array_push($dataset1['borderColor'],"rgba(255,99,132,1)");
            array_push($dataset2['borderColor'],"rgba(255,99,132,1)");
            array_push($dataset3['borderColor'],"rgba(255,99,132,1)");
        }
        $datasets = array($dataset1,$dataset2,$dataset3);
        //dd(compact('readings','labels','datasets'));
        return response()->json(compact('readings','labels','datasets'));
        //return response()->json(compact('datasets'));
    }
    public function charts()
    {
        return view('diabudy.logbook.charts');
    }
}
