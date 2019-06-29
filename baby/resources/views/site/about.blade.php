@extends('layouts.main')
@section('title', 'نبذه عنا')
@section('content')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="public/assets/images/bg/inner-header.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">نبذه عنا </h2>
              <ol class="breadcrumb text-right mt-10 white">
                <li><a href="{{route('/')}}">الرئيسية</a></li>
               
                <li class="active">نبذه عنا</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <div class="about-thumb">
                <img src="{{asset('storage/app/'.$about->image)}}" class="wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-offset="10"  alt="img1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-details">
                <h2 class="text-theme-color-sky font-36 mt-0"> {{$about->title}}</h2>
                <p>{{$about->description}}</p>
                <div class="singnature mt-20">
                  <img src="{{asset('storage/app/'.$about->signature)}}" alt="img1">
                </div>

			</div>
            </div>
          </div>
        </div>
      </div>
	</section>

    <section class="divider cloud-img parallax layer-overlay overlay-gradient" data-bg-img="public/assets/images/bg/bg10.jpg" data-parallax-ratio="0.7">
			<div class="container pt-90 pb-150">
        <div class="row">
          @foreach($statistics as $statistic)
		  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="{{$statistic->icon}} mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="{{$statistic->value}}" class="animate-number text-theme-color-yellow font-Chewy font-42 font-weight-300 mt-0 mb-0">0</h2>
              <h3 class="text-white text-uppercase font-weight-600">{{$statistic->key}}</h3>
            </div>
          </div>
		  @endforeach
       
        </div>
      </div>
		</section>
    <!-- Section: Our Stuff -->
    <section class="layer-overlay overlay-white-7" data-bg-img="images/bg/bg5.jpg')}}">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0"><span class="text-theme-color-sky">طاقم</span>  <span class="text-theme-color-red">العمل</span></h2>
            
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
          @foreach (App\Stuff::all() as $item)
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="image-box-thum">
                <img height="300px" class="img-fullwidth" alt="" src="{{asset('storage/app/'.$item->image)}}">
              </div>
              <div class="bg-white p-20 pt-10 pb-10">
                <h5 class="name mb-5"><a href="#">{{$item->name}}</a></h5>
              <h3 class="title mt-0" style="color:black !important">{{$item->job}}</h3>
              </div>
            </div>
          @endforeach
         
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
@endsection