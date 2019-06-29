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
                <img src="{{asset('public/assets/images/about/1.jpg')}}" alt="img1" class="img-fullwidth">
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-details">
                <h2 class="text-theme-color-sky font-36 mt-0"> Welcome to Childhaven Kindergarten &amp; School</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, odioserunt provident maiores consectetur adipisicing elit. Aliquam odio dese runtesseu provident maiores libero porro dolorem est. Velit necessitatibus fugiat error incidunt excepturi doloribus officia aspernatur quod libero  Velit necessitatibus fugiat error incidunt excepturi doloribus officia</p>
                <div class="singnature mt-20">
                  <img src="{{asset('public/assets/images/signature.png')}}" alt="img1">
                </div>
                <a href="#" class="btn btn-flat btn-colored btn-theme-color-blue mt-15 mr-15">Read More</a><a href="#" class="btn btn-flat btn-colored btn-theme-color-yellow mt-15">Get a Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider cloud-img parallax layer-overlay overlay-gradient" data-bg-img="public/assets/images/bg/bg10.jpg" data-parallax-ratio="0.7">
			<div class="container pt-90 pb-150">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="864" class="animate-number text-theme-color-yellow font-Chewy font-42 font-weight-300 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Qualified Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-study mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="486" class="animate-number text-theme-color-blue font-Chewy font-42 font-weight-300 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Successful Kids</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1468" class="animate-number text-theme-color-green font-Chewy font-42 font-weight-300 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Parents</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-medal mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="32" class="animate-number text-theme-color-sky font-Chewy font-42 font-weight-300 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Award Won</h5>
            </div>
          </div>
        </div>
      </div>
		</section>
    <!-- Section: Our Stuff -->
    <section class="layer-overlay overlay-white-7" data-bg-img="images/bg/bg5.jpg')}}">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0"><span class="text-theme-color-sky">Meet</span> Our <span class="text-theme-color-red">Stuff</span></h2>
              <div class="title-flaticon">
                <i class="pe-7s-study"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{asset('public/assets/images/team/1.jpg')}}">
              </div>
              <div class="bg-white p-20 pt-10 pb-10">
                <h5 class="name mb-5"><a href="#">Alex Smith -</a><span class="occupation font-12 font-weight-400 text-theme-color-blue letter-space-1"> 2 class/day</span></h5>
                <h3 class="title mt-0">Art Teacher</h3>
              </div>
              <div class="bg-white border-top-dashed pl-20 pt-10 pb-5">
              <ul class="styled-icons icon-theme-color-blue icon-sm icon-dark icon-circled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{asset('public/assets/images/team/2.jpg')}}">
              </div>
              <div class="bg-white p-20 pt-10 pb-10">
                <h5 class="name mb-5"><a href="#">Alex Smith -</a><span class="occupation font-12 font-weight-400 text-theme-color-sky letter-space-1"> 1 class/day</span></h5>
                <h3 class="title mt-0">Game Teacher</h3>
              </div>
              <div class="bg-white border-top-dashed pl-20 pt-10 pb-5">
              <ul class="styled-icons icon-theme-color-sky icon-sm icon-dark icon-circled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{asset('public/assets/images/team/3.jpg')}}">
              </div>
              <div class="bg-white p-20 pt-10 pb-10">
                <h5 class="name mb-5"><a href="#">Alex Smith -</a><span class="occupation font-12 font-weight-400 text-theme-color-green letter-space-1"> 4 class/day</span></h5>
                <h3 class="title mt-0">Class Teacher</h3>
              </div>
              <div class="bg-white border-top-dashed pl-20 pt-10 pb-5">
              <ul class="styled-icons icon-theme-color-green icon-sm icon-dark icon-circled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{asset('public/assets/images/team/4.jpg')}}">
              </div>
              <div class="bg-white p-20 pt-10 pb-10">
                <h5 class="name mb-5"><a href="#">Alex Smith -</a><span class="occupation font-12 font-weight-400 text-theme-color-orange letter-space-1"> 3 class/day</span></h5>
                <h3 class="title mt-0">Subject Teacher</h3>
              </div>
              <div class="bg-white border-top-dashed pl-20 pt-10 pb-5">
              <ul class="styled-icons icon-theme-color-orange icon-sm icon-dark icon-circled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
@endsection