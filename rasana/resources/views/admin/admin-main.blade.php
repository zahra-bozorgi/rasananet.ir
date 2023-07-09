<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <link rel="shortcut icon" href="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38.png') }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>پنل مدیریت رسانا-@yield('title')</title>

    <link rel="stylesheet" href="{{ URL('assets/cloud/vendor/fontawesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL('assets/cloud/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('assets/cloud/css/rtl.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ URL('assets/cloud/css/style.css') }}" type="text/css">



</head>
<body class="theme-indigo rtl">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38 (1).png') }}" width="120" height="60"></div>
    </div>
</div>

<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="#" class="menu_toggle menu-button" id="open-button"><i class="fa fa-align-right"></i></a>
        <a href="index.html" class="navbar-brand"> <img src="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38 (1).png') }}" width="120" height="40"  ></a>
        <div id="navbar_main">
            <ul class="navbar-nav ml-auto hidden-xs">
                <li class="nav-item page-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">

                            <a href="index.html"><i class="fa fa-home"></i></a>
                        </li>

                        <li class="breadcrumb-item active">داشبورد</li>


                        <li class="breadcrumb-item active">
                            @yield('breadcrumb_item_active')
                        </li>



                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-xl py-0">
                        <div class="py-3 px-3">
                            <h5 class="heading h6 mb-0">اطلاعیه ها <span class="badge badge-pill badge-primary text-uppercase float-left">3</span></h5>
                        </div>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading"><small>10:05 PM</small>میلاد بی نیاز</div>
                                    <p class="text-sm">کاربران عزیز سال نو شما مبارک</p>
                                </div>
                            </a>

                        </div>
                        <div class="py-3 text-center">
                            <a href="javascript:void(0);" class="link link-sm link--style-3">مشاهده همه اطلاعیه ها</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <h6 class="dropdown-header">منو کاربر</h6>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>پروفایل من</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-left badge badge-success">$50K</span><i class="fa fa-briefcase text-primary"></i>موجودی من</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-left badge badge-warning">4</span><i class="fa fa-envelope text-primary"></i>صندوق ورودی</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>تنظیمات</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-sign-out text-primary"></i>خروج</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main_content admin" id="main-content">

    <div class="left_sidebar" id="left_sidebar">
        <button class="close-button" id="close-button">X</button>
        <nav class="sidebar">
            <div class="user-info">
                <div class="image"><a href="javascript:void(0);"><img src="{{ URL('assets/cloud/images/sm/avatar6.jpg') }}" alt="User"></a></div>
                <div class="detail mt-3">
                    <h5 class="mb-0">علی نیازی</h5>
                    <small>مدیر</small>
                </div>

            </div>
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="{{  route('admin-home') }}"><i class="fa fa-home"></i><span>داشبورد</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow" aria-expanded="false" ><i class="fa fa-user-o"></i><span> مدیریت کاربران </span></a>
                    <ul aria-expanded="false" class="collapse" style="height: 0px;">
                        <li><a href="{{  route('user-management') }}">کاربران</a></li>
                        <li><a href="{{  route('managers') }}">مدیران کل و کارمندان</a></li>

                    </ul>
                </li>


                <li><a href="{{  route('tickets-table-admin') }}"><i class="fa fa-ticket"></i><span> تیکت ها</span></a></li>
                <li><a href="{{  route('common_questions_admin') }}"><i class="fa fa-tasks"></i><span>سوالات متداول</span></a></li>
                <li><a href="{{  route('financial-management') }}"><i class="fa fa-briefcase "></i><span> مدیریت مالی</span></a></li>
                <li><a href="{{  route('entry_exit_logs') }}"><i class="fa fa-tasks"></i><span>لاگ های ورود و خروج کاربران </span></a></li>
                <li><a href="{{  route('package-management') }}"><i class="fa fa-tasks"></i><span>مدیریت پکیج ها </span></a></li>
                <li><a href="{{  route('settings') }}"><i class="fa fa-cog"></i><span> تنظیمات سایت</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i><span>خروج</span></a></li>


            </ul>
        </nav>
    </div>


    @yield('content')
</div>




<script src="{{ URL('assets/cloud/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ URL('assets/cloud/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ URL('assets/cloud/bundles/c3.bundle.js') }}"></script>
<script src="{{ URL('assets/cloud/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->

<script src="{{ URL('assets/cloud/js/theme.js') }}"></script>
<script src="{{ URL('assets/cloud/js/pages/index.js') }}"></script>



<script src="{{ URL('assets/cloud/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ URL('assets/cloud/js/pages/tables/jquery.dataTables.min.js') }}"></script>

<script>
    (function($) {

        var openBtn = $("#open-button"),
            colseBtn = $("#close-button"),
            menu = $(".left_sidebar"),
            page1 = $(".page");

        openBtn.on("click", function() {
            menu.addClass("active");
            page1.css("position", "fixed");
        });

        colseBtn.on("click", function() {
            menu.removeClass("active");
            page1.css("position", "relative");
        });

    })(jQuery);
</script>
</body>
</html>













