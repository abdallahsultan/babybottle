<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Categories;
use App\Products;
use App\About;
use App\Statistics;

class SiteController extends Controller
{
    public function index(){
      $slider=Slider::first();
      $about=About::first();
      $products=Products::take(6)->get();
      $statistics=Statistics::all();
      $categories=Categories::where('state',0)->get();
      
      $view_data = array('statistics'=>$statistics,'slider' =>$slider,'about' =>$about, 'categories' =>$categories,'products' =>$products,);
        return view('site.index',$view_data);
    }

   public function about(){
    $statistics=Statistics::all();
    $about=About::first();
    $view_data = array('statistics'=>$statistics,'about' =>$about,);
       return view('site.about',$view_data);
   }

   public function products(){
       $categories=Categories::where('state',0)->get();
       $products=Products::all();

    $view_data = array('categories' =>$categories,'products' =>$products, );
    return view('site.products',$view_data);
}
public function singleproduct($id){
    $product=Products::where('id',$id)->first();
    $product->count++;
    $product->save();

 $view_data = array('product' =>$product,);
    return view('site.singleproduct',$view_data);
}
   
   public function gallery(){
    return view('site.gallery');
}
}
