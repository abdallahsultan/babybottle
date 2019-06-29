<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>System</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
       
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('public/admin/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('public/admin/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('public/admin/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('public/admin/layouts/layout/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/layouts/layout/css/themes/darkblue-rtl.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('public/admin/layouts/layout/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/admin/select2/css/select2-bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/admin/select2/css/select2.min.css')}}">

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
     <link href="{{asset('public/admin/global/plugins/bootstrap-toastr/toastr-rtl.min.css')}}" rel="stylesheet" >
          <style>
            label{
                font-size:16px;
                
            }
            
        </style>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
          <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="{{ url('/admin') }}">
                            <img src="{{ asset('storage/app/'.App\Settings::where('key','اللوجو')->first()->value )}}" style="width: 200px; height:47px" alt="logo" class="logo-default"> </a>
                        <div class="menu-toggler sidebar-toggler" style="padding: 5px;margin: 30px 0 0;height: 8px;text-align: center;">
                            <span></span>
                        </div>
                    </div>
                 
                    
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                    
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                         
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                          
                            <!-- END QUICK SIDEBAR TOGGLER -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            تسجيل الخروج
                         </a>
 
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                  
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 61px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="nav-item ">
                                <a href="{{ route('categories.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">الفئات</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('products.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">المنتجات</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('gallery.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">البوم صور</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('sliders.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">البانر</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('about.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">من نحن</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('contact.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">رسائل الموقع</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('stuff.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title"> طاقم العمل</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('statistics.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">احصائيات</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a href="{{ route('statistics.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">المستخدمين</span>
                                    <span class="selected"></span>
                                </a>
                            </li> --}}
                            <li class="nav-item ">
                                <a href="{{ route('settings.view')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">الاعدادات العامه</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                          
                           
                           
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                   
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{{url('/')}}">الرئيسيه</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>@if(isset($title)) {{$title}} @endif</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class='row' style="margin-top:10px;">
                        
                            @yield('content')
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
            
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
           
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        
 
     
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('public/admin/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('public/admin/global/plugins/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      
        <script src="{{asset('public/admin/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('public/admin/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('public/admin/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('public/admin/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/pages/scripts/ui-toastr.min.js')}}" type="text/javascript"></script>
      <script type="text/javascript" src="{{asset('public/admin/select2/js/select2.full.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('public/admin/select2/js/select2.min.js')}}"></script>
      @yield('js')
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            });
              @if (session('add')==='success')
                         toastr.success('تم اضافه البيانات بنجاح', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif
             @if (session('add')==='fail')
                         toastr.error('حدث هناك خطا برجاء المحاوله لاحقا', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif
             @if (session('delete')==='success')
                         toastr.success('تم الحذف بنجاح', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif
             @if (session('delete')==='fail')
                         toastr.error('حدث هناك خطا برجاء المحاوله لاحقا', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif
              @if (session('edit')==='success')
                         toastr.success('تم التعديل بنجاح', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif
             @if (session('edit')==='fail')
                         toastr.error('حدث هناك خطا برجاء المحاوله لاحقا', 'اشعارات النظام', toastr.options = {
                          "closeButton": true,
                          "debug": true,
                          "positionClass": "toast-top-right",
                          "showDuration": "1000",
                          "hideDuration": "1000",
                          "timeOut": "5000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        });
            @endif

        </script>
    </body>

</html>