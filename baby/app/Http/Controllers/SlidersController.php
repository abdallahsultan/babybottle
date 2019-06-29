<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SlidersController extends Controller
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
        if(Slider::count()>0)
        {
            $slider =Slider::first();
        }
        else
        {
            $slider = new Slider();
        }
        $slider->text1 =$request->text1;
        $slider->text2 =$request->text2;
        $slider->text3 =$request->text3;
        if($request->hasFile('image'))
          $slider->image   = request()->file('image')->store('slider');
        if($request->hasFile('gif'))
          $slider->gif   = request()->file('gif')->store('slider');
        $slider->save();
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
        $title ='البانر';
        $row =Slider::first();
        return view('admin.sliders.view',compact('row','title'));
    }
    public function delete(Requst $request ,$id)
    {

    }
}
