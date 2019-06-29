<!DOCTYPE html>
<html dir="rtl" lang="en">

<!-- Mirrored from html.kodesolution.live/j/childhaven/v2.0/demo/index-rtl-mp-layout3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 14:32:34 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="ChildHaven - Kids School & Kinder Garten HTML5 Template" />
<meta name="keywords" content="kindergarten,children,kidsschool,child,school,baby,childschool" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Bambini - @yield('title')</title>


<!-- Favicon and Touch Icons -->
@php $icon=App\Settings::where('key','اللوجو')->first(); @endphp
<link href="{{ asset('storage/app/'.$icon->value) }}" rel="shortcut icon" type="image/png">
<link href="{{ asset('public/assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ asset('public/assets/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('public/assets/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('public/assets/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/assets/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('public/assets/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('public/assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('public/assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('public/assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | RTL Layout -->
<link href="{{ asset('public/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/assets/css/style-main-rtl.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/assets/css/style-main-rtl-extra.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('public/assets/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('public/assets/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('public/assets/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('public/assets/css/colors/theme-skin-colorset.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('public/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('public/assets/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('public/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>
<body class="rtl">
<div id="wrapper" class="clearfix">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<img class="floating" width="10%" src="{{ asset('public/assets/images/preloaders/13.gif') }}" alt="">
			<h5 style="color:black;" class="line-height-50 font-18 ml-15">تحميل ....</h5>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">تخطى</div>
	</div>

	<!-- Header -->
	<header id="header" class="header">
		<div class="header-top border-bottom sm-text-center p-0 bg-theme-color-blue">
			<div class="container pt-5 pb-5">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<div class="widget no-border m-0">
							<ul class="list-inline xs-text-center m-0">
								<li class="m-0 pl-10 pr-10"> 
								@php $phone1=App\Settings::where('key','رقم الموبايل 1')->first(); @endphp
									<a href="#" class="text-white"><i class="fa fa-phone"></i> {{$phone1->value}}</a>
								</li>
								<li class="m-0 pl-10 pr-10"> 
								@php $mail=App\Settings::where('key','الايميل')->first(); @endphp
									<a href="#" class="text-white"><i class="fa fa-envelope-o mr-5"></i> {{$mail->value}}</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-right sm-text-center">
						<div class="widget no-border m-0">
				
						<ul class="styled-icons icon-gray icon-circled icon-theme-color-sky">
						@php $facebook=App\Settings::where('key','فيسبوك')->first(); @endphp
						@php $twitter=App\Settings::where('key','تويتر')->first(); @endphp
						@php $instgram=App\Settings::where('key','انستجرام')->first(); @endphp
							<li><a href="{{$facebook->value}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$twitter->value}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$instgram->value}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="header-nav-wrapper navbar-scrolltofixed bg-white">
				<div class="container">
					<nav id="menuzord-right" class="menuzord default">
						<a class="menuzord-brand pull-left flip xs-pull-center mt-20 pt-5 mt-sm-10 pt-sm-0" href="{{route('/')}}">
						@php $logo=App\Settings::where('key','اللوجو')->first(); @endphp
							<img src="{{ asset('storage/app/'.$logo->value) }}" alt="">
						</a>
						<ul class="menuzord-menu">
			  <li class="active"><a class="hvr-bounce-in"  href="{{route('/')}}">الرئيسية</a></li>
			                <li><a class="hvr-bounce-in" href="{{route('products')}}">منتجاتنا </a></li>
							
							<li><a class="hvr-bounce-in" href="{{route('gallery')}}">ألبوم صور </a></li>
							<li><a class="hvr-bounce-in" href="{{route('about')}}">نبذه عنا  </a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </header>
    @yield('content')
    <!-- Footer -->
	<footer id="footer" class="footer dot-style-down" data-bg-img="{{ asset('public/assets/images/footer-bg.png')}}" data-bg-color="#262E3B">
		<div class="container pt-70 pb-40">
			<div class="row border-bottom-black">
				<div class="col-sm-6 col-md-3">
				@php $logo=App\Settings::where('key','اللوجو')->first(); @endphp
				@php $about=App\About::first(); @endphp
					<div class="widget dark"> <img alt="" src="{{ asset('storage/app/'.$logo->value) }}">
					@php $about_desc=substr($about->description,0,100); @endphp 
						<p class="font-13 mt-20 mb-10">{{$about_desc}} <a class="text-theme-color-red" href="{{route('about')}}">اقراء المذيد</a> </p>
						
					</div>
				</div>
				@php $products_count=App\Products::orderby('count','desc')->take(3)->get(); @endphp
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">الاكثر مشاهدة</h5>
						<div class="latest-posts">
						@foreach($products_count as $product)
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="{{route('singleproduct',$product->id)}}" class="post-thumb"><img alt="" style="height: 50px;" src="{{asset('storage/app/'.$product->image)}}"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="{{route('singleproduct',$product->id)}}">{{$product->name}}</a></h5>
									@php $description=substr($product->description,0,70); @endphp 
									<p class="post-date mb-0 font-12">{{$description}}</p>
								</div>
							</article>
							@endforeach
							
						</div>
					</div>
				</div>
				<!-- <div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">ألبوم صور </h5>
						<div id="flickr-feed" class="clearfix">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
							</script>
						</div>
					</div>
				</div> -->
				<div class="col-md-3">
          <div class="widget dark">
		  <h5 class="widget-title line-bottom">تابعنا من خلال:</h5>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix">
			@php $facebook=App\Settings::where('key','فيسبوك')->first(); @endphp
						@php $twitter=App\Settings::where('key','تويتر')->first(); @endphp
						@php $instgram=App\Settings::where('key','انستجرام')->first(); @endphp
							<li><a href="{{$facebook->value}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$twitter->value}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$instgram->value}}"><i class="fa fa-instagram"></i></a></li>
            </ul>
			<h5 class="widget-title line-bottom">تواصل </h5>
			<ul class="list-inline mt-5">
						@php $number1=App\Settings::where('key','رقم الموبايل 1')->first(); @endphp
						@php $mail=App\Settings::where('key','الايميل')->first(); @endphp
						@php $website=App\Settings::where('key','لينك الموقع')->first(); @endphp
						
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="tel:{{$number1->value}}">{{$number1->value}}</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-red mr-5"></i> <a class="text-gray" href="mailto:{{$mail->value}}">{{$mail->value}}</a> </li><br>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-red mr-5"></i> <a class="text-gray" href="{{$website->value}}">{{$website->value}}</a> </li>
						</ul>
          </div>
        </div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">تواصل معنا</h5>
						<form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="{{route('send_mail_to')}}" method="post">
							<div class="form-group">
								<input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="ادخل الآيميل ">
							</div>
							<div class="form-group">
								<textarea id="form_message" name="form_message" class="form-control" required="" placeholder="ادخل الرسالة" rows="3"></textarea>
							</div>
							<div class="form-group">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
								<button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="انتظر قليلا...">ارسال </button>
							</div>
						</form>

						<!-- Quick Contact Form Validation-->
						<script type="text/javascript">
							$("#footer_quick_contact_form").validate({
								submitHandler: function(form) {
									var form_btn = $(form).find('button[type="submit"]');
									var form_result_div = '#form-result';
									$(form_result_div).remove();
									form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
									var form_btn_old_msg = form_btn.html();
									form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
									$(form).ajaxSubmit({
										dataType:  'json',
										success: function(data) {
											if( data.status == 'true' ) {
												$(form).find('.form-control').val('');
											}
											form_btn.prop('disabled', false).html(form_btn_old_msg);
											$(form_result_div).html(data.message).fadeIn('slow');
											setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
										}
									});
								}
							});
						</script>
					</div>
				</div>
			</div>
			<!-- <div class="row mt-10">
				<div class="col-md-3">
					<div class="widget dark">
						<h5 class="widget-title mb-10">اتصل بنا الآن</h5>
						<div class="text-gray">
						@php $number1=App\Settings::where('key','رقم الموبايل 1')->first(); @endphp
						@php $number2=App\Settings::where('key','رقم الموبايل 2')->first(); @endphp
							الموبيل 1: {{$number1->value}} <br>
							الموبيل 2: {{$number2->value}}
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget dark">
						<h5 class="widget-title mb-10">تواصل معنا :</h5>
						<ul class="styled-icons icon-sm icon-bordered icon-circled clearfix">
						@php $facebook=App\Settings::where('key','فيسبوك')->first(); @endphp
						@php $twitter=App\Settings::where('key','تويتر')->first(); @endphp
						@php $instgram=App\Settings::where('key','انستجرام')->first(); @endphp
							<li><a href="{{$facebook->value}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$twitter->value}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$instgram->value}}"><i class="fa fa-instagram"></i></a></li>
							
						</ul>
					</div>
				</div>
				
			</div> -->
		</div>
		
	</footer>
	<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('public/assets/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems ! 
			 The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>

<!-- Mirrored from html.kodesolution.live/j/childhaven/v2.0/demo/index-rtl-mp-layout3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 14:37:07 GMT -->
</html>