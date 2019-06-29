<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;

class StuffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $title ='طاقم العمل';
        return view('admin.stuff.add',compact('title'));
    }
    public function save(Request $request)
    {
        $stuff =new Stuff();
        $stuff->name =$request->name;
        $stuff->job =$request->job;
        if($request->hasFile('image'))
            $stuff->image   = request()->file('image')->store('stuff');
        $stuff->save();
        return back()->with('add','success');
    }
    public function edit($id)
    {
       $row =Stuff::findorfail($id);
       $title ='طاقم العمل';
       return view('admin.stuff.edit',compact('title','row'));
    }
    public function update(Request $request,$id)
    {
        $stuff =Stuff::find($id);
        $stuff->name =$request->name;
        $stuff->job =$request->job;
        if($request->hasFile('image'))
            $stuff->image   = request()->file('image')->store('stuff');
        $stuff->save();
        return back()->with('add','success');
    }
    public function view()
    {
        $rows =Stuff::all();
        $title = 'طاقم العمل';
        return view('admin.stuff.view',compact('rows','title'));

    }
    public function delete($id)
    {
        Stuff::findorfail($id)->delete();
        return redirect(route('stuff.view'));
    }
}
