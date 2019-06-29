<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistics;
use Illuminate\Support\Facades\Input;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        
    }
    public function save(Request $request)
    {
        Statistics::truncate();
        foreach($request->values as $key=>$value)
        {
            $statistic = new Statistics();
            $statistic->key = $request->keys[$key];
            $statistic->value= $value;
            $statistic->save();
        }
        return back()->with('add','success');
    }
    public function edit($id)
    {

    }
    public function update(Request $request,$id)
    {

    }
    public function view()
    {
        $title ='الاحصائيات';
        $rows =Statistics::all();
        return view('admin.statistics.view',compact('rows','title'));
    }
    public function delete(Requst $request ,$id)
    {

    }
}
