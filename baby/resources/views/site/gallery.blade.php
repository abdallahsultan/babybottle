@extends('layouts.main')
@section('title', 'ألبوم صور')
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
              <h2 class="text-theme-color-yellow font-36">ألبوم صور </h2>
              <ol class="breadcrumb text-right mt-10 white">
                <li><a href="#">الرئيسية</a></li>
               
                <li class="active">ألبوم صور</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Our Gallery -->
    <section>
      <div class="container pt-70 pb-70">
        <div class="section-content">
          
          <div class="row mb-30">
          @foreach (App\Gallery::orderBy('id','desc')->get() as $key=> $item)
          <div style="margin-bottom:20px" class="col-xs-12 col-sm-4 @if($key%5 == 0) col-md-8  @else col-md-4 @endif">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img @if ($key%5 !=0 )
                  class="wow rubberBand" data-wow-duration="1.5s" data-wow-offset="10"
                  @endif alt="project" height="300px" src="{{asset('storage/app/'.$item->image)}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('storage/app/'.$item->image)}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
           
        </div>
      </div>
    </section>
  </div>
@endsection
