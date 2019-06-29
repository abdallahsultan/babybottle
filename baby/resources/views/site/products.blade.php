@extends('layouts.main')
@section('title', 'منتجاتنا')
@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="public/assets/images/bg/bg9.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">منتجاتنا </h2>
              <ol class="breadcrumb text-right mt-10 white">
                <li><a href="{{route('/')}}">الرئيسية</a></li>
               
                <li class="active">منتجاتنا</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <!-- Section: Our Courses -->
    <section class="layer-overlay overlay-white-7" data-bg-img="public/assets/images/bg/bg5.jpg">
    
      <div class="container pt-70 pb-30">

        <div class="section-content">
        <div class="row">
       <ul id="myTab2" class="nav nav-pills boot-tabs">
           @php $count=1; @endphp
           @foreach($categories as $category)
  <li @if($count==1)class="active"@endif><a style="    border: 2px solid;" class="hvr-float-shadow"  href="#cat{{$category->id}}" data-toggle="tab">{{$category->name}}</a></li>
  @php $count++; @endphp

     @endforeach
 
</ul>
<div id="myTabContent2" class="tab-content">
@php $count=1; @endphp
           @foreach($categories as $category)

  <div class="tab-pane fade in @if($count==1) active @endif" id="cat{{$category->id}}">
  <div class="row">
    
      @foreach($category->products as $product)
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="course-details-box bg-silver-light border-1px clearfix mb-30">
                <div class="col-md-5 col-lg-5 p-0">
                  <div class="thumb">

                    <a href="{{route('singleproduct',$product->id)}}"><img style="height: 205px;" class="img-fullwidth" alt="" src="{{asset('storage/app/'.$product->image)}}"></a>

                   

                  </div>
                </div>
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details clearfix p-20 pt-15">
                    <h4 class="price-tag">EGP {{$product->price}}</h4>
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="{{route('singleproduct',$product->id)}}">{{$product->name}}</a></h3>
                    <h5 class="text-gray-darkgray font-weight-300 mt-5"><span class="text-theme-color-sky font-weight-600 mr-5">{{$product->category->name}}</span></h5>
                    <p class="font-14 text-black-333 pt-0">{{$product->description}}</p>
                    <div class="course-details-bottom mt-15">
                      <ul class="list-inline">
                      <li>النوع<span>{{$product->type}}</span></li>
											 <li>الحجم<span>{{$product->size}}</span></li>
                       <!-- <li>Age<span>5y - 6y</span></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
  </div>
  @php $count++; @endphp

@endforeach
  </div>
 
</div>
           
       </div>
       
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
   

    <!-- Section: Our Stuff -->
    
  </div>
  <!-- end main-content -->
@endsection