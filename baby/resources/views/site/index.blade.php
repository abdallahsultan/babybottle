@extends('layouts.main')
@section('content')
    
	
	<!-- Start main-content -->
	<div class="main-content">

		<!-- Section: home -->
		<section id="home" class="divider layer-overlay overlay-gradient-light parallax cloud-img" data-bg-img="{{ asset('public/assets/images/bg/bg14.jpg')}}">
			<div class="display-table">
				<div class="display-table-cell">
					<div class="container pt-100 pb-100">
						<div class="row">
							<div class="col-md-6">
								<div class="pt-60 pb-60">
									<h3 class="font-24 mb-0">Best Kids Kider Garten</h3>
									<h1 class="text-theme-color-blue font-Chewy text-uppercase letter-space mt-10">Welcome <span class="text-theme-color-orange">to Our</span> <span class="text-theme-color-lemon">baby</span> <span class="text-theme-color-sky">bottle</span></h1>
									<h4 class="font-weight-400 mt-0">Every day we bring hope to millions of children in the world's <br>hardest places as a sign of God's unconditional love.</h4>
									<a class="btn btn-colored btn-theme-color-sky btn-flat smooth-scroll-to-target mt-20" href="#donate-now">View Details</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="about-thumb">
								<img src="{{ asset('public/assets/images/about/3.gif')}}" width="70%" alt="">
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section About -->
		<section>
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-md-3">
							<div class="sm-height-auto">
								<div class="text-center pt-30 pb-sm-30">
									<div class="icon-box text-center">
										<a class="icon bg-theme-color-orange icon-circled icon-xl mb-10" href="#"> <i class="fa fa-music text-white"></i> </a>
										<h4 class="text-theme-color-orange text-uppercase">Music Class</h4>
										<p>Eleifend lobortis bibendum volutpat est senectus duiscon vallisaug uees hendrerit senectus duisuk</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="sm-height-auto">
								<div class="text-center pt-30 pb-sm-30">
									<div class="icon-box text-center">
										<a class="icon bg-theme-color-sky icon-circled icon-xl mb-10" href="#"> <i class="fa fa-paint-brush text-white"></i> </a>
										<h4 class="text-theme-color-sky text-uppercase">Drawing Class</h4>
										<p>Eleifend lobortis bibendum volutpat est senectus duiscon vallisaug uees hendrerit senectus duisuk</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="sm-height-auto">
								<div class="text-center pt-30 pb-sm-30">
									<div class="icon-box text-center">
										<a class="icon bg-theme-color-lemon icon-circled icon-xl mb-10" href="#"> <i class="fa fa-child text-white"></i> </a>
										<h4 class="text-theme-color-lemon text-uppercase">Yoga Class</h4>
										<p>Eleifend lobortis bibendum volutpat est senectus duiscon vallisaug uees hendrerit senectus duisuk</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="sm-height-auto">
								<div class="text-center pt-30 pb-sm-30">
									<div class="icon-box text-center">
										<a class="icon bg-theme-color-blue icon-circled icon-xl mb-10" href="#"> <i class="fa fa-futbol-o text-white"></i> </a>
										<h4 class="text-theme-color-blue text-uppercase">Sports Class</h4>
										<p>Eleifend lobortis bibendum volutpat est senectus duiscon vallisaug uees hendrerit senectus duisuk</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Our Features -->
		<section class="divider layer-overlay overlay-white-7" data-bg-img="{{ asset('public/assets/images/bg/bg10.jpg')}}">
			<div class="container pb-70">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Features</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-red border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-study text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Qualified Teachers</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-green border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-notebook text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Regular Classes</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-orange border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-home text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Sufficient Classrooms</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-lemon border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-light text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Creative Ideas</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-blue border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-car text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Bus Services</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="icon-box left bg-theme-color-sky border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="pe-7s-cup text-white font-42"></i></a>
								<div class="media-body">
									<h4 class="media-heading heading text-white mb-10">Sports Facilities</h4>
									<p class="text-white">Lorem ipsum dolor sit ametcons ect adipisicing elium consecte sit ullam perspiciatis, deserunt.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Our Gallery -->
		<section>
			<div class="container pb-70">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Gallery</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row mb-30">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="gallery-block">
								<div class="gallery-thumb">
									<img alt="project" src="{{ asset('public/assets/images/gallery/1.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade red"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/1.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="gallery-block">
								<div class="gallery-thumb">
									<img alt="project" src="{{ asset('public/assets/images/gallery/5.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade orange"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/5.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
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
									<img alt="project" src="{{ asset('public/assets/images/gallery/2.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade green"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/2.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>            
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="gallery-block">
								<div class="gallery-thumb">
									<img alt="project" src="{{ asset('public/assets/images/gallery/3.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade blue"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/3.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>            
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="gallery-block">
								<div class="gallery-thumb">
									<img alt="project" src="{{ asset('public/assets/images/gallery/4.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade yellow"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/4.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
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
									<img alt="project" src="{{ asset('public/assets/images/gallery/5.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade orange"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/5.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="gallery-block">
								<div class="gallery-thumb">
									<img alt="project" src="{{ asset('public/assets/images/gallery/1.jpg')}}" class="img-fullwidth">
								</div>
								<div class="overlay-shade red"></div>
								<div class="icons-holder">
									<div class="icons-holder-inner">
										<div class="gallery-icon">
											<a href="images/gallery/1.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Our Stuff -->
		<section class="layer-overlay overlay-white-9" data-bg-img="{{ asset('public/assets/images/bg/bg4.jpg')}}">
			<div class="container">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase line-bottom-center mt-0"><span class="text-theme-color-sky">Meet</span> Our <span class="text-theme-color-red">Stuff</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
							<div class="image-box-thum">
								<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/team/1.jpg')}}">
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
								<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/team/2.jpg')}}">
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
								<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/team/3.jpg')}}">
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
								<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/team/4.jpg')}}">
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

		<!-- Section: Parents Say -->
		<section class="divider parallax layer-overlay overlay-white-9" data-bg-img="{{ asset('public/assets/images/bg/bg6.jpg')}}">
			<div class="container pt-60 pb-60">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase text-theme-color-blue line-bottom-center mt-0">What Parent's <span class="text-theme-color-red">Say</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel-2col testimonial style2 dots-white" data-dots="false">
							<div class="item">
								<div class="testimonial-wrapper">                  
									<div class="content bg-theme-color-orange p-30 pb-40">
										<p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
										<i class="fa fa-quote-right mt-10 text-white"></i>
										<h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
										<h6 class="title text-white mt-0 mb-15">Designer</h6>
										<div class="thumb mt-20"><img class="img-circle" alt="" src="{{ asset('public/assets/images/testimonials/3.jpg')}}"></div>
									</div>                  
								</div>
							</div>
							<div class="item">
								<div class="testimonial-wrapper">                  
									<div class="content bg-theme-color-green p-30 pb-40">
										<p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
										<i class="fa fa-quote-right mt-10 text-white"></i>
										<h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
										<h6 class="title text-white mt-0 mb-15">Designer</h6>
										<div class="thumb mt-20"><img class="img-circle" alt="" src="{{ asset('public/assets/images/testimonials/3.jpg')}}"></div>
									</div>                  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Our Courses -->
		<section class="divider layer-overlay overlay-white-7" data-bg-img="{{ asset('public/assets/images/bg/bg5.jpg')}}">
			<div class="container pb-70">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Classes</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="course-details-box bg-silver-light border-1px clearfix mb-30">
								<div class="col-md-5 col-lg-5 p-0">
									<div class="thumb">
										<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/course/1.jpg')}}">
									</div>
								</div>
								<div class="col-md-7 col-lg-7 p-0">
									<div class="course-details clearfix p-20 pt-15">
										<h4 class="price-tag">$52</h4>
										<h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="#">Course One</a></h3>
										<h5 class="text-gray-darkgray font-weight-300 mt-5"><span class="text-theme-color-sky font-weight-600 mr-5">Class Time :</span> 9.00am - 9.45pm</h5>
										<p class="font-14 text-black-333 pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias unde odio architecto minus explicabo!</p>
										<div class="course-details-bottom mt-15">
											<ul class="list-inline">
											 <li>Capacity<span>20 kids</span></li>
											 <li>Duration<span>45 min</span></li>
											 <li>Age<span>5y - 6y</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="course-details-box bg-silver-light border-1px clearfix mb-30">
								<div class="col-md-5 col-lg-5 p-0">
									<div class="thumb">
										<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/course/2.jpg')}}">
									</div>
								</div>
								<div class="col-md-7 col-lg-7 p-0">
									<div class="course-details clearfix p-20 pt-15">
										<h4 class="price-tag">$52</h4>
										<h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="#">Course One</a></h3>
										<h5 class="text-gray-darkgray font-weight-300 mt-5"><span class="text-theme-color-sky font-weight-600 mr-5">Class Time :</span> 9.00am - 9.45pm</h5>
										<p class="font-14 text-black-333 pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias unde odio architecto minus explicabo!</p>
										<div class="course-details-bottom mt-15">
											<ul class="list-inline">
											 <li>Capacity<span>20 kids</span></li>
											 <li>Duration<span>45 min</span></li>
											 <li>Age<span>5y - 6y</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="course-details-box bg-silver-light border-1px clearfix mb-30">
								<div class="col-md-5 col-lg-5 p-0">
									<div class="thumb">
										<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/course/3.jpg')}}">
									</div>
								</div>
								<div class="col-md-7 col-lg-7 p-0">
									<div class="course-details clearfix p-20 pt-15">
										<h4 class="price-tag">$52</h4>
										<h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="#">Course One</a></h3>
										<h5 class="text-gray-darkgray font-weight-300 mt-5"><span class="text-theme-color-sky font-weight-600 mr-5">Class Time :</span> 9.00am - 9.45pm</h5>
										<p class="font-14 text-black-333 pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias unde odio architecto minus explicabo!</p>
										<div class="course-details-bottom mt-15">
											<ul class="list-inline">
											 <li>Capacity<span>20 kids</span></li>
											 <li>Duration<span>45 min</span></li>
											 <li>Age<span>5y - 6y</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="course-details-box bg-silver-light border-1px clearfix mb-30">
								<div class="col-md-5 col-lg-5 p-0">
									<div class="thumb">
										<img class="img-fullwidth" alt="" src="{{ asset('public/assets/images/course/4.jpg')}}">
									</div>
								</div>
								<div class="col-md-7 col-lg-7 p-0">
									<div class="course-details clearfix p-20 pt-15">
										<h4 class="price-tag">$52</h4>
										<h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="#">Course One</a></h3>
										<h5 class="text-gray-darkgray font-weight-300 mt-5"><span class="text-theme-color-sky font-weight-600 mr-5">Class Time :</span> 9.00am - 9.45pm</h5>
										<p class="font-14 text-black-333 pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias unde odio architecto minus explicabo!</p>
										<div class="course-details-bottom mt-15">
											<ul class="list-inline">
											 <li>Capacity<span>20 kids</span></li>
											 <li>Duration<span>45 min</span></li>
											 <li>Age<span>5y - 6y</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Divider: Funfact -->
		<section class="divider cloud-img parallax layer-overlay overlay-gradient" data-bg-img="{{ asset('public/assets/images/bg/bg6.jpg')}}" data-parallax-ratio="0.7">
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

		<!-- Section: blog -->
		<section id="blog">
			<div class="container">
				<div class="section-title text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Blog</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<article class="post clearfix bg-silver-light mb-sm-30">
								<div class="entry-header">
									<div class="post-thumb thumb"> 
										<img src="{{ asset('public/assets/images/blog/1.jpg')}}" alt="" class="img-responsive img-fullwidth">
									</div>
								</div>
								<div class="entry-content p-20">
									<h4 class="entry-title text-white text-uppercase"><a class="font-weight-600" href="blog-single-left-sidebar.html">Lorem ipsum dolor is emmita</a></h4>
									<div class="entry-meta">
										<ul class="list-inline font-12 mb-10">
											<li><i class="fa fa-user text-theme-color-sky mr-5"></i>By: Author | </li>
											<li><i class="fa fa-calendar text-theme-color-sky mr-5"></i> June 26, 2016 | </li>
											<li><i class="fa fa-comment-o text-theme-color-sky mr-5"></i>45 </li>
										</ul>
									</div>
									<p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis</p>
									<a class="btn btn-theme-color-sky btn-sm mt-10" href="blog-single-left-sidebar.html"> View Details</a>
								</div>
							</article>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<article class="post clearfix bg-silver-light mb-sm-30">
								<div class="entry-header">
									<div class="post-thumb thumb"> 
										<img src="{{ asset('public/assets/images/blog/2.jpg')}}" alt="" class="img-responsive img-fullwidth">
									</div>
								</div>
								<div class="entry-content p-20">
									<h4 class="entry-title text-white text-uppercase"><a class="font-weight-600" href="blog-single-left-sidebar.html">Lorem ipsum dolor is emmita</a></h4>
									<div class="entry-meta">
										<ul class="list-inline font-12 mb-10">
											<li><i class="fa fa-user text-theme-color-sky mr-5"></i>By: Author | </li>
											<li><i class="fa fa-calendar text-theme-color-sky mr-5"></i> June 26, 2016 | </li>
											<li><i class="fa fa-comment-o text-theme-color-sky mr-5"></i>45 </li>
										</ul>
									</div>
									<p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis</p>
									<a class="btn btn-theme-color-sky btn-sm mt-10" href="blog-single-left-sidebar.html"> View Details</a>
								</div>
							</article>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<article class="post clearfix bg-silver-light mb-sm-30">
								<div class="entry-header">
									<div class="post-thumb thumb"> 
										<img src="{{ asset('public/assets/images/blog/3.jpg')}}" alt="" class="img-responsive img-fullwidth">
									</div>
								</div>
								<div class="entry-content p-20">
									<h4 class="entry-title text-white text-uppercase"><a class="font-weight-600" href="blog-single-left-sidebar.html">Lorem ipsum dolor is emmita</a></h4>
									<div class="entry-meta">
										<ul class="list-inline font-12 mb-10">
											<li><i class="fa fa-user text-theme-color-sky mr-5"></i>By: Author | </li>
											<li><i class="fa fa-calendar text-theme-color-sky mr-5"></i> June 26, 2016 | </li>
											<li><i class="fa fa-comment-o text-theme-color-sky mr-5"></i>45 </li>
										</ul>
									</div>
									<p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis</p>
									<a class="btn btn-theme-color-sky btn-sm mt-10" href="blog-single-left-sidebar.html"> View Details</a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- end main-content -->
	
	
@endsection