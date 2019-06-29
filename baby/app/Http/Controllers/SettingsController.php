<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
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
        foreach($request->values as $key=>$value)
        {
            $settings = Settings::where('key',$request->keys[$key])->first();
            $settings->value= $value;
            $settings->save();
        }
        if($request->hasFile('file'))
        $settings =Settings::where('key','اللوجو')->first();
        $settings->value   = request()->file('file')->store('settings');
        $settings->save();
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
        $title ='الاعدادات';
        $rows =Settings::all();
        return view('admin.settings.view',compact('rows','title'));
    }
    public function delete(Requst $request ,$id)
    {

    }
}
