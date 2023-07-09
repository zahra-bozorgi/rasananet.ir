@extends('admin.admin-main')
@section('title', 'پروفایل')
<!-- PersianDateTimePicker -->
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css"/>
<script src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مشاهده پروفایل</a>

        </nav>
        <div class="container-fluid">
            <div class="row clearfix">


                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs nav-tabs-new" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                       role="tab" aria-controls="overview"
                                       aria-selected="true">بررسی اجمالی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                                       aria-controls="settings"
                                       aria-selected="false">تنظیمات</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                             aria-labelledby="overview-tab">
                            <div class="card profile-header align-item-center">
                                <div class="body text-center d-flex">
                                    <div class="profile-image"><img src="{{ URL('assets/cloud/images/sm/avatar6.jpg') }}"
                                                                    class="rounded-circle" alt=""></div>
                                    <div class="pr-3 pt-3">
                                        <h4 class="mt-2">علی نیازی</h4>
                                        <span>گیلان</span>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="header">
                                    <h2>اطلاعات</h2>

                                </div>
                                <div class="body">
                                    <small class="text-muted">آدرس: </small>
                                    <p>گیلان-رشت</p>

                                    <hr>
                                    <small class="text-muted">آدرس ایمیل: </small>
                                    <p>michael@gmail.com</p>
                                    <hr>
                                    <small class="text-muted">شماره موبایل: </small>
                                    <p>09117567132</p>
                                    <hr>
                                    <small class="text-muted">تاریخ تولد: </small>
                                    <p class="m-b-0">1 اردیبهشت، 1370</p>
                                    <hr>
                                    <small class="text-muted">شبکه های اجتماعی </small>
                                    <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                                    <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                                    <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                                    <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="card">
                                <div class="body">
                                    <h6>اطلاعات اولیه</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام خانوادگی">
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="male" type="radio" checked>
                                                        <span><i></i>مرد</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="female" type="radio">
                                                        <span><i></i>زن</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="date form-control" data-jdp placeholder="لطفا یک تاریخ وارد نمایید" />


                                            </div>
                                            <div class="form-group" style="direction: ltr">
                                                <input type="text" class="form-control" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="آدرس 1">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="آدرس 2">
                                            </div>
                                            <div class="form-group selectpicker-wrapper">
                                                <select class="selectpicker" title="استان" data-live-search="true" data-live-search-placeholder="جستجو ..." >
                                                    <option>گیلان</option>
                                                    <option>تهران</option>
                                                    <option>قزوین</option>
                                                    <option>کرج</option>
                                                    <option>همدان</option>
                                                    <option>زنجان</option>
                                                </select>
                                            </div>
                                            <div class="form-group selectpicker-wrapper">
                                                <select class="selectpicker" title="شهر" data-live-search="true" data-live-search-placeholder="جستجو ..." >
                                                    <option>رشت</option>
                                                    <option>لاهیجان</option>
                                                    <option>شفت</option>
                                                    <option>رودسر</option>
                                                    <option>لنگرود</option>
                                                    <option>آستانه اشرفیه</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">به روز رسانی</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">لغو</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>اطلاعات حساب</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="alizeethomas" disabled
                                                       placeholder="نام کاربری">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control"
                                                       value="alizee.info@yourdomain.com" placeholder="ایمیل">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="شماره موبایل">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>تغییر رمز عبور</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="رمز عبور فعلی">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="رمز عبور جدید">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"
                                                       placeholder="تکرار رمز عبور جدید">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">به روز رسانی</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">لغو</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="body">
                                    <h6>اطلاعات کلی</h6>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="شماره موبایل">
                                            </div>


                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <h6>سطح دسترسی</h6>

                                            <ul class="list-unstyled list-email-received">
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox"
                                                               checked><span>تیکت ها</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox"><span>آکهی های شغلی</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" checked><span>Promotional news such as offers or
                                                                discounts</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" checked><span>Tips for campaign setup, growth and client success
                                                                stories</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">به روزرسانی</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">لغو</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <ul class="row profile_state list-unstyled">
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="26px" height="26px" viewBox="0 0 969.486 969.486"
                                         xml:space="preserve" style="vertical-align: sub;">
                                                <g>
                                                    <g>
                                                        <path d="M806.582,235.309L766.137,87.125l-137.434,37.51L571.451,9.072L114.798,235.309H0v725.105h907.137V764.973h62.35v-337.53
                                                            h-62.352V235.309H806.582z M718.441,170.63l17.654,64.68h-52.561h-75.887h-126.19l111.159-30.339l66.848-18.245L718.441,170.63z
                                                             M839.135,892.414H68V522.062v-129.13v-10.233v-69.787v-9.602h35.181h27.538h101.592h409.025h75.889h37.43h35.242h35.244h13.994
                                                            v51.272v72.86h-15.357h-35.244h-87.85H547.508h-55.217v27.356v75.888v8.758v35.244v35.244v155.039h346.846v127.441H839.135z
                                                             M901.486,696.973h-28.352h-34H560.291V591.375v-35.244v-35.244v-23.889v-1.555h3.139h90.086h129.129h56.492h34h4.445h23.904
                                                            V696.973z M540.707,100.191l21.15,42.688l-238.955,65.218L540.707,100.191z"/>
                                                        <polygon
                                                            points="614.146,564.57 614.146,576.676 614.146,631.152 680.73,631.152 680.73,564.57 658.498,564.57 		"/>
                                                    </g>
                                                </g>
                                    </svg>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000"
                                        data-fresh-interval="700">50000 <span style="font-size: 10px">تومان</span></h5>
                                    <small>موجودی کیف پول</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-camera"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000"
                                        data-fresh-interval="700">2365</h5>
                                    <small>Shots View</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000"
                                        data-fresh-interval="700">1203</h5>
                                    <small>Likes</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-comments-o"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000"
                                        data-fresh-interval="700">324</h5>
                                    <small>Comments</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-user"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000"
                                        data-fresh-interval="700">1980</h5>
                                    <small>Profile Views</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-desktop"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="1000"
                                        data-fresh-interval="700">251</h5>
                                    <small>Website View</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-file-text text-warning"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="52" data-speed="1000"
                                        data-fresh-interval="700">52</h5>
                                    <small>Attachment</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- data piker-->
    <script type="text/javascript">
        jalaliDatepicker.startWatch({
            minDate: "attr",
            maxDate: "attr"
        });


    </script>
@endsection
