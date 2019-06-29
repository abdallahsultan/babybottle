@extends('layouts.main')
@section('title', 'منتجاتنا')
@section('content')

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="{{asset('public/assets/images/bg/bg13.jpg')}}">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">{{$product->name}} </h2>
              <ol class="breadcrumb text-right mt-10 white">
                <li><a href="{{route('/')}}">الرئيسية</a></li>
               
                <li class="active">{{$product->name}}</li>
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
              <img  style="width: 100%; height: 500px;" src="{{asset('storage/app/'.$product->image)}}" alt="">
              <h3 class="line-bottom text-theme-color-red text-uppercase mt-30 mb-20"><span class="text-theme-color-blue">{{$product->name}}</span></h3>
              <p>{{$product->description}}</p>
              <blockquote >
              <li>الحجم : {{$product->size}}</li>
              <li>النوع : {{$product->type}}</li>
              </blockquote>
            
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">            
              <!-- <div class="widget">
              
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
              </div> -->
              <div class="widget">
              @php $products_count=App\Products::orderby('count','desc')->take(3)->get(); @endphp
			
                <h4 class="widget-title text-theme-color-blue line-bottom">الاكثر مشاهدة</h4>
                <div class="latest-posts">
                @foreach($products_count as $product)
                  <article class="post media-post clearfix pb-0 mb-10">
                  <a href="{{route('singleproduct',$product->id)}}" class="post-thumb"><img alt="" style="height: 100px;" src="{{asset('storage/app/'.$product->image)}}"></a>
                    <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="{{route('singleproduct',$product->id)}}">{{$product->name}}</a></h5>
                      @php $description=substr($product->description,0,70); @endphp 
									<p class="post-date mb-0 font-12">{{$description}}</p>
                    </div>
                  </article>
                  @endforeach
                </div>
              </div>
              
              <div class="widget">
          
                <h4 class="widget-title text-theme-color-blue line-bottom">تواصل معنا</h4>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="{{route('send_mail_to')}}" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required=""  placeholder="ادخل الآيميل ">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="ادخل الرسالة" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="انتظر قليلا...">ارسال</button>
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