@extends('layouts.main')
@section('title', 'منتجاتنا')
@section('content')

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="public/assets/images/bg/bg14.jpg">
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

    <!-- Section: Course Details -->
    <section>
      <div class="container mt-30 mb-30 pt-40 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="{{asset('public/assets/images/course/course-details.jpg')}}" alt="">
              <h3 class="line-bottom text-theme-color-red text-uppercase mt-30 mb-20"><span class="text-theme-color-blue">Course</span> Details</h3>
              
              <blockquote class="drop-caps text-colored mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam.</blockquote>
              <p class="drop-caps text-colored mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
            
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">            
              <div class="widget">
                <h4 class="widget-title text-theme-color-blue line-bottom">Search box</h4>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title text-theme-color-blue line-bottom">Latest News</h4>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/blog/ln1.jpg" alt="" class="img-circle"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-15 mb-5"><a href="#">Sustainable Construction</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/blog/ln2.jpg" alt="" class="img-circle"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-15 mb-5"><a href="#">Sustainable Construction</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/blog/ln3.jpg" alt="" class="img-circle"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-15 mb-5"><a href="#">Sustainable Construction</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title text-theme-color-blue line-bottom">Tags</h4>
                <div class="tags">
                  <a href="#">travel</a>
                  <a href="#">blog</a>
                  <a href="#">lifestyle</a>
                  <a href="#">feature</a>
                  <a href="#">mountain</a>
                  <a href="#">design</a>
                  <a href="#">restaurant</a>
                  <a href="#">journey</a>
                  <a href="#">classic</a>
                  <a href="#">sunset</a>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title text-theme-color-blue line-bottom">Quick Contact</h4>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="http://html.kodesolution.live/j/childhaven/v2.0/demo/includes/quickcontact.php" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                <script type="text/javascript">
                  $("#quick_contact_form_sidebar").validate({
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
        </div>
      </div>
    </section>
  </div>
@endsection