<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <link rel="shortcut icon" href="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38.png') }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>پنل کاربری رسانا-@yield('title')</title>


    <link rel="stylesheet" href="{{ URL('assets/cloud/vendor/fontawesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL('assets/cloud/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('assets/cloud/css/rtl.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ URL('assets/cloud/css/style.css') }}" type="text/css">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>






</head>
<body class="theme-indigo rtl">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ URL('assets/cloud/images/photo_2023-04-24-20.42.38 (1).png') }}" width="120" height="60" alt="ArrOw"></div>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="demo">
    <div class="offcanvas-header justify-content-around">

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas">

            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="25" fill="#fff"><path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/></svg>

        </button>
        <h3 class="offcanvas-title">سامانه رسانا</h3>
    </div>
    <div class="offcanvas-body">
        <ul>
            <li>
                <a href="{{  route('edit_profile') }}">ویرایش پروفایل</a>
            </li>

        </ul>

    </div>
</div>

<div class="left_sidebar panel-sidebar"  >
    <nav class="sidebar">
        <div class="brand">
            <div class="image">
                <a href="index.html" class="navbar-brand" >
                    <img src="{{ URL('assets/cloud/images/Untitled-1.png') }}" class="img-fluid">
                </a>
            </div>

        </div>
        <ul id="main-menu" class="metismenu panel_metismenu m-0">
            <li class="active"><a href="{{  route('user-home') }}"><i class="fa fa-home"></i><div>داشبورد</div></a></li>
            <li><a href="javascript:void(0)" class="has-arrow" data-bs-toggle="offcanvas" data-bs-target="#demo"><i class="fa fa-user-o"></i><div>پروفایل </div></a></li>


            <li><a href="{{  route('tickets_table') }}"><i class="fa fa-ticket"></i><div> تیکت ها</div></a></li>

            <li><a href="{{  route('notifications-panel') }}"><i class="fa fa-bell"></i><div>اطلاعیه ها</div></a></li>
            <li><a href="{{  route('common_questions') }}"><i class="fa fa-question-circle"></i><div>سوالات متداول</div></a></li>
            <li><a href="{{  route('transactions') }}"><i class="fa fa-exchange"></i><div>تراکنش ها</div></a></li>
            <li><a href="{{  route('view_token') }}"><i class="fa fa-key"></i><div>توکن</div></a></li>
            <li><a href="{{  route('wallet') }}"><i class="fa fa-money"></i><div>کیف پول</div></a></li>
            <li><a href="#"><i class="fa fa-sign-out"></i><div>خروج</div></a></li>
        </ul>
    </nav>
</div>


<div class="main_content panel_main_content" id="main-content">

    <nav class="navbar custom-navbar panel_custom_navbar navbar-expand-lg py-2">
        <div class="container-fluid px-0">

            <div id="navbar_main" class="panel_navbar_main" >
                <a href="#" class="menu_toggle " id="panel_toggle" ><i class="fa fa-align-right"></i></a>
{{--                <a href="#" class="menu_toggle " ><i class="fa fa-close"></i></a>--}}
                <div class="panel_navbar_nav_wrapper">
                    <ul class="navbar-nav panel_navbar_nav" >

                        <li class="nav-item ">
                            <a class="nav-link nav-link-icon" href="javascript:void(0);" ><i class="fa fa-user "></i><span class="nav-user-name">شعبان</span> عزیز خوش آمدید</a>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-item ">
                            <a class="nav-link nav-link-icon" href="javascript:void(0);" ><span class="float-left badge badge-warning">$50K</span><i class="fa fa-briefcase "></i>موجودی من</a>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-item ">
                            <a class="nav-link nav-link-icon" href="javascript:void(0);" ><span class="float-left badge badge-warning">4</span><i class="fa fa-bell"></i>صندوق ورودی</a>
                        </li>
                        <li class="nav-divider"></li>


                    </ul>
                </div>


            </div>
        </div>
    </nav>



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
    $("#panel_toggle").click(function () {

        $(".panel_navbar_nav_wrapper").slideToggle("slow");

    });
</script>
</body>
</html>
