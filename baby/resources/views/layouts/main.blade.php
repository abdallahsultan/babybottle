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
<link href="{{ asset('public/assets/images/favicon.png') }}" rel="shortcut icon" type="image/png">
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
			<h5 class="line-height-50 font-18 ml-15">Loading...</h5>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
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
									<a href="#" class="text-white"><i class="fa fa-phone"></i> 00-123-456</a>
								</li>
								<li class="m-0 pl-10 pr-10"> 
									<a href="#" class="text-white"><i class="fa fa-envelope-o mr-5"></i> contact@yourdomain.com</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-right sm-text-center">
						<div class="widget no-border m-0">
							<p class="mb-0 text-white">Donation Hotline :<a class="text-white font-weight-600" href="tel:"> +011-223-3445</a></p>
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
							<img src="{{ asset('public/assets/images/logo.jpg') }}" alt="">
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
					<div class="widget dark"> <img alt="" src="{{ asset('public/assets/images/logo.jpg')}}">
						<p class="font-13 mt-20 mb-10">Childhaven is a non profit charity and crowdfunding template with web elements which helps you to build your own charity or any non profit templatesite <a class="text-theme-color-red" href="#">read more</a> </p>
						<ul class="list-inline mt-5">
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-red mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-red mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Latest News</h5>
						<div class="latest-posts">
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Photos from Flickr</h5>
						<div id="flickr-feed" class="clearfix">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
							</script>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Quick Contact</h5>
						<form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="http://html.kodesolution.live/j/childhaven/v2.0/demo/includes/quickcontact.php" method="post">
							<div class="form-group">
								<input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
							</div>
							<div class="form-group">
								<textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
							</div>
							<div class="form-group">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
								<button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
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
			<div class="row mt-10">
				<div class="col-md-3">
					<div class="widget dark">
						<h5 class="widget-title mb-10">Call Us Now</h5>
						<div class="text-gray">
							+61 3 1234 5678 <br>
							+12 3 1234 5678
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget dark">
						<h5 class="widget-title mb-10">Connect With Us</h5>
						<ul class="styled-icons icon-sm icon-bordered icon-circled clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="widget dark">
						<h5 class="widget-title mb-10">Subscribe Us</h5>
						<!-- Mailchimp Subscription Form Starts Here -->
						<form id="mailchimp-subscription-form" class="newsletter-form">
							<div class="input-group">
								<input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
								<span class="input-group-btn">
									<button data-height="45px" class="btn btn-colored btn-theme-color-red btn-xs m-0 font-14" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<!-- Mailchimp Subscription Form Validation-->
						<script type="text/javascript">
							$('#mailchimp-subscription-form').ajaxChimp({
									callback: mailChimpCallBack,
									url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
							});

							function mailChimpCallBack(resp) {
									// Hide any previous response text
									var $mailchimpform = $('#mailchimp-subscription-form'),
											$response = '';
									$mailchimpform.children(".alert").remove();
									console.log(resp);
									if (resp.result === 'success') {
											$response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									} else if (resp.result === 'error') {
											$response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									}
									$mailchimpform.prepend($response);
							}
						</script>
						<!-- Mailchimp Subscription Form Ends Here -->
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom" data-bg-color="#242730">
			<div class="container pt-15 pb-10">
				<div class="row">
					<div class="col-md-6">
						<p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
					</div>
					<div class="col-md-6 text-right">
						<div class="widget no-border m-0">
							<ul class="list-inline sm-text-center mt-5 font-12">
								<li>
									<a href="#">FAQ</a>
								</li>
								<li>|</li>
								<li>
									<a href="#">Help Desk</a>
								</li>
								<li>|</li>
								<li>
									<a href="#">Support</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
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