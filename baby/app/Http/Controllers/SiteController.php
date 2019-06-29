<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Categories;
use App\Products;
use App\About;

class SiteController extends Controller
{
    public function index(){
      $slider=Slider::first();
      $about=About::first();
      $categories=Categories::where('state',0)->get();
      $view_data = array('slider' =>$slider,'about' =>$about, 'categories' =>$categories,);
        return view('site.index',$view_data);
    }

   public function about(){
       return view('site.about');
   }

   public function products(){
       $categories=Categories::where('state',0)->get();
       $products=Products::all();

    $view_data = array('categories' =>$categories,'products' =>$products, );
    return view('site.products',$view_data);
}
public function singleproduct($id){
    $product=Products::where('id',$id)->first();

 $view_data = array('product' =>$product,);
    return view('site.singleproduct',$view_data);
}
   
   public function gallery(){
    return view('site.gallery');
}
}
