@extends('admin.admin-main')
@section('title', 'تنظیمات')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="javascript:void(0);">تنظیمات سایت</a>

        </nav>
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12">
                    <div class="card invoice1">
                        <div class="body">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="true">تنظیمات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#conditions" role="tab" aria-controls="conditions" aria-selected="false">شرایط و ضوابط</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#about-us" role="tab" aria-controls="about-us" aria-selected="false">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#token" role="tab" aria-controls="token" aria-selected="false">توکن احراز هویت گوگل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">متا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#sms-sending" role="tab" aria-controls="sms-sending" aria-selected="false">سامانه ارسال پیامک</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#port-settings" role="tab" aria-controls="port-settings" aria-selected="false">تنظیمات درگاه</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="header-logo">لوگوی هدر:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary upload-image-btn"><span> بارگزاری تصویر</span>
                                                            <input class="form-control" type="file" id="uploadImage">
                                                        </button>
                                                    </div>
                                                    <div class="setting-img-show col-md-6">
                                                        <a href="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" target="_blank" >
                                                            <img src="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" class="img-fluid img-thumbnail" style="width: 100px">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="Favicon">Favicon</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary upload-image-btn"><span> بارگزاری تصویر</span>
                                                            <input class="form-control" type="file" id="uploadImage">
                                                        </button>
                                                    </div>
                                                    <div class="setting-img-show col-md-6">
                                                        <a href="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" target="_blank" >
                                                            <img src="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" class="img-fluid img-thumbnail" style="width: 100px">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="email">ایمیل</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="email" id="email">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="call-num1">شماره تماس</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="number" id="call-num1">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="call-num2">شماره همراه</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="number" id="call-num2">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="address">آدرس</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="address">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="footer-text">متن درباره ما فوتر</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="form-control " id="footer-text" style="resize: none" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="header-script">کد اسکریپت هدر</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="form-control" id="header-script" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="footer-script">کد اسکریپت فوتر</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="form-control" id="footer-script" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="copy-right">متن حق کپی رایت</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="copy-right">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="login-pattern">الگوی ورود</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="login-pattern">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="register-pattern">الگوی ثبت نام</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="register-pattern">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="general-message">پیام های عمومی</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="general-message">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="tax-percentage">درصد مالیات</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="number" id="tax-percentage">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="collection-fee">هزینه دریافتی بابت جمع آوری </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="number" id="collection-fee">
                                            </div>
                                        </div>

                                        <button type="button" class="btn  btn-primary">ارسال</button>


                                    </form>

                                </div>
                                <div class="tab-pane " id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="conditions-text">متن شرایط و ضوابط</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="form-control" id="conditions-text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="conditions-header">عنوان شرایط و ضوابط</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="conditions-header">
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ارسال</button>
                                    </form>
                                </div>
                                <div class="tab-pane " id="about-us" role="tabpanel" aria-labelledby="about-us-tab">
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="about-us-text">متن درباره ما</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="form-control" id="about-us-text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="about-us-header">عنوان متن درباره ما</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="about-us-header">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="about-us-img">تصویر صفحه درباره ما</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row m-0">
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary upload-image-btn"><span> بارگزاری تصویر</span>
                                                            <input class="form-control" type="file" id="uploadImage">
                                                        </button>
                                                    </div>
                                                    <div class="setting-img-show col-md-6">
                                                        <a href="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" target="_blank" >
                                                            <img src="{{ URL('assets/cloud/images/image-gallery/1.jpg') }}" class="img-fluid img-thumbnail">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ارسال</button>
                                    </form>
                                </div>
                                <div class="tab-pane " id="token" role="tabpanel" aria-labelledby="token-tab">
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="security-title">Security key</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="security-title">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="site-key">Site key</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="site-key">
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ارسال</button>
                                    </form>
                                </div>
                                <div class="tab-pane  " id="meta" role="tabpanel" aria-labelledby="meta-tab" >
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="meta-title">Meta Title</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="meta-title">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="meta-des">Meta Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="meta-des">
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ارسال</button>
                                    </form>

                                </div>
                                <div class="tab-pane  " id="sms-sending" role="tabpanel" aria-labelledby="sms-sending"  >
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="user-name">نام کاربری</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="user-name">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="user-pass">پسورد</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="password" id="user-pass">
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ارسال</button>
                                    </form>

                                </div>
                                <div class="tab-pane  " id="port-settings" role="tabpanel" aria-labelledby="port-settings"  >
                                    <form class="p-3" name="" action="" method="">
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="user-name">نام کاربری</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" id="user-name">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="col-md-3">
                                                <label class="col-form-label" for="user-pass">پسورد</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="password" id="user-pass">
                                            </div>
                                        </div>
                                        <button type="button" class="btn  btn-primary">ذخیره</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
