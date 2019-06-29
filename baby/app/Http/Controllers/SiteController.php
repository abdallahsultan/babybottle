<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Categories;
use App\Products;
use App\About;
use App\Statistics;
use App\Settings;
use App\Contact;

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
public function send_mail(Request $request)
{
    $contact =new Contact();
    $contact->email= $request->email;
    $contact->message= $request->message;
    $contact->save();
    try{

        $to      = Settings::where('key','ايميل استقبال الرسائل')->first()->value();
        $subject = 'رساله من موقع بامبيني';
        $message = $request->message;
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = 'From: Bambini <'.$request->email.'>';
        mail($to, $subject, $message, implode("\r\n", $headers));
        
    }
    catch(\Exception $e)
    {
        return back()->with('error','error');
    }
    return back()->with('add','success');
}
}
