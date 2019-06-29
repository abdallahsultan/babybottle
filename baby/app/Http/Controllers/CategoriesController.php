<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        $title ='اضافه فئه';
        return view('admin.categories.add',compact('title'));
    }
    public function save(Request $request)
    {
        $category =new Categories();
        $category->name =$request->name;
        if($request->hasFile('file'))
            $category->image   = request()->file('file')->store('categories');
        $category->save();
        return back()->with('add','success');

    }
    public function edit($id)
    {
        $row = Categories::findOrFail($id);
        return view('admin.categories.edit',compact('row'));
    }
    public function update(Request $request,$id)
    {
        $category = Categories::findOrFail($id);
        $category->name =$request->name;
        if($request->hasFile('file'))
            $category->image   = request()->file('file')->store('categories');
        $category->save();
        return back()->with('add','success');
    }
    public function view()
    {
        $rows = Categories::where('state',0)->get();
        $title = "مشاهده الفئات";
        return view('admin.categories.view',compact('rows','title'));
    }
    public function delete(Request $request ,$id)
    {
        $category=Categories::findOrFail($id);
        $category->state =1;
        $category->save();
        return redirect(route('categories.view'));

    }
}
