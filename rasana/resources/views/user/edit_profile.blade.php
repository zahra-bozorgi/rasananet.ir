@extends('user.panel-main')
@section('title', 'ویرایش پروفایل')
@section('breadcrumb_item_active','ویرایش پروفایل ')
<!-- PersianDateTimePicker -->
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css"/>
<script src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

@section('content')

    <div class="page edit_profile">

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-10 mx-auto">
                    <div class="card p-4">
                        <div class="header row align-items-center">
                            <div class="col-12">
                                <h2><strong>ویرایش</strong> پروفایل </h2>

                            </div>

                        </div>
                        <div class="body">
                            <form class="edit_profile_wrapper" name="" action="" method="post">
                                <div class="mb-4 d-flex flex-column align-items-center justify-content-center">
                                    <div class="user-change-photo ">
                                        <img src="{{ URL('assets/cloud/images/sm/avatar6.jpg') }}" >
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm px-4 upload-image-btn"> تعویض عکس
                                        <input class="form-control" type="file" id="uploadImage">
                                    </button>
                                </div>
                                <h5 class="mb-0 mt-4">اطلاعات کاربر</h5>
                                <hr>
                                <div class="row edit_profile_wrapper">
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">نام</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">نام خانوادگی</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">ایمیل</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">تاریخ تولد</label>
                                        <input type="text" class="date form-control" data-jdp placeholder="لطفا یک تاریخ وارد نمایید" />

                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">رمز عبور</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">جنسیت</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1" checked>
                                            <label class="custom-control-label" for="customRadio1">مرد</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" name="custom-radio-1"  class="custom-control-input" id="customRadio2" >
                                            <label class="custom-control-label" for="customRadio2">زن</label>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-0 mt-4">اطلاعات تماس</h5>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-12 selectpicker-wrapper">
                                        <label class="form-label" for="option">استان</label>
                                        <select class="selectpicker" data-live-search="true" data-live-search-placeholder="جستجو ..." >
                                            <option>گیلان</option>
                                            <option>تهران</option>
                                            <option>قزوین</option>
                                            <option>کرج</option>
                                            <option>همدان</option>
                                            <option>زنجان</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-12 selectpicker-wrapper">
                                        <label class="form-label" for="option">شهرستان</label>
                                        <select class="selectpicker" data-live-search="true" data-live-search-placeholder="جستجو ..." >
                                            <option>رشت</option>
                                            <option>لاهیجان</option>
                                            <option>شفت</option>
                                            <option>رودسر</option>
                                            <option>لنگرود</option>
                                            <option>آستانه اشرفیه</option>
                                        </select>

                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">شماره همراه</label>
                                        <input type="number" class="form-control">
                                    </div>

                                </div>
                                <h5 class="mb-0 mt-4">اطلاعات تکمیلی</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">توکن احراز هویت </label>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>

                                <div class="text-left mt-3">
                                    <button type="button" class="btn btn-primary px-4">ذخیره پروفایل</button>
                                </div>
                            </form>
                        </div>
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

