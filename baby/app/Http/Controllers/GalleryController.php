<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        $title ='اضافه صوره';
        return view('admin.gallery.add',compact('title'));
    }
    public function save(Request $request)
    {
        $gallery =new Gallery();
        if($request->hasFile('file'))
            $gallery->image   = request()->file('file')->store('gallery');
        $gallery->save();
        return back()->with('add','success');

    }
  
   
    public function view()
    {
        $rows = gallery::all();
        $title = "مشاهده الصور";
        return view('admin.gallery.view',compact('rows','title'));
    }
    public function delete(Request $request ,$id)
    {
        Gallery::findOrFail($id)->delete();
        return redirect(route('gallery.view'));

    }
}
