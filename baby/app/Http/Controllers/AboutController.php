<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutCOntroller extends Controller
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
        if(About::count()>0)
        {
            $about =About::first();
        }
        else
        {
            $about = new About();
        }
        $about->title =$request->title;
        $about->description =$request->description;
       
        if($request->hasFile('image'))
          $about->image   = request()->file('image')->store('about');
        if($request->hasFile('signature'))
          $about->signature   = request()->file('signature')->store('about');
        $about->save();
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
        $title ='نبذه عنا';
        $row =About::first();
        return view('admin.about.view',compact('row','title'));
    }
    public function delete(Request $request ,$id)
    {
      

    }
}
