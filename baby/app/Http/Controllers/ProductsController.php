<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        $title ='اضافه منتج';
        $categories = Categories::where('state',0)->get();
        return view('admin.products.add',compact('title','categories'));
    }
    public function save(Request $request)
    {
        $product =new Products();
        $product->name =$request->name;
        $product->category_id =$request->category_id;
        $product->video =$request->video;
        $product->size =$request->size;
        $product->price =$request->price;
        $product->type =$request->type;
        $product->description =$request->description;
        if($request->hasFile('file'))
            $product->image   = request()->file('file')->store('products');
        $product->save();
        return back()->with('add','success');

    }
    public function edit($id)
    {
       $categories = Categories::where('state',0)->get();
       $row = Products::findOrFail($id);
        return view('admin.products.edit',compact('row','categories'));
    }
    public function update(Request $request,$id)
    {
        $product =Products::findOrFail($id);
        $product->name =$request->name;
        $product->category_id =$request->category_id;
        $product->video =$request->video;
        $product->type =$request->type;
        $product->size =$request->size;
        $product->price =$request->price;
        $product->description =$request->description;
        if($request->hasFile('file'))
            $product->image   = request()->file('file')->store('products');
        $product->save();
        return back()->with('add','success');
    }
    public function view()
    {
        $rows = Products::all();
        $title = "مشاهده المنتجات";
        return view('admin.products.view',compact('rows','title'));
    }
    public function delete(Request $request ,$id)
    {
        Products::findorfail($id)->delete();
        return redirect(route('products.view'));

    }
}
