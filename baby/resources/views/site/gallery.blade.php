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
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/1.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade red"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/1.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/5.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade orange"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/5.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/2.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/2.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/3.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade blue"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/3.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/4.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade yellow"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/4.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/5.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade orange"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/5.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/assets/images/gallery/1.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade red"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/assets/images/gallery/1.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
