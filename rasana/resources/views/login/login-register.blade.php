@extends('main.main_index')
    <title>ورود و ثبت نام-آنیسون</title>

@section('content')

<main class="login-register-mobile">
    <div id="login">
        <div class="page-title-wrapper">
            <div class="page-title-wrapper-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title-heading-wrapper">
                            <div class="title-heading">
                                <h2>ورود</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 " id="mobile-number">
                        <h5 class="login-form-title">وارد حساب کاربری خود شوید</h5>
                        <div class="login-form-box">
                            <form class="row">
                                <div class="form-group col-12">
                                    <label for="mobileNum" class="col-form-label">شماره همراه</label>
                                    <input type="number" class="form-control" id="mobileNum">
                                </div>
                                <div class="form-group col-12">
                                    <label for="userpass" class="col-form-label">رمز عبور</label>
                                    <input type="text" class="form-control" id="userpass">
                                </div>
                                <div class="form-group col-12">
                                    <label  class="col-form-label">کد امنیتی</label>

                                </div>
                                <div class="col-12">
                                    <div class="form-check my-3 d-inline-block">
                                        <input class="form-check-input" id="check-box1" type="checkbox" value="something">
                                        <label class="form-check-label" for="check-box1">مرا داخل سایت نگه دار</label>
                                    </div>
                                    <div class="forget-pass d-inline-block">
                                        <a href="#" id="forget-pass-link">آیا رمز عبور را فراموش
                                            کرده اید؟</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="otp-login-btn" id="login-btn">
                                        ورود با کد یکبار مصرف
                                    </a>
                                    <a href="#" class="login-btn" >
                                        تایید و ادامه
                                    </a>

                                </div>

                            </form>
                            <div class="register-info">
                                <span>
					آیا شما حساب کاربری ندارید؟					</span>

                                <a href="#" id="register-info">ثبت نام</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="mobile-verification">
                        <h5 class="login-form-title">تایید</h5>
                        <div class="login-form-box">
                            <p class="sms-help mb-0">
                                رمز یک بار مصرف با موفقیت به شماره<span> 09057404649 </span>ارسال شد <a href="#" id="edit-number">ویرایش شماره</a>
                            </p>
                            <form>

                                <div class="row m-0 mb-3 justify-content-end">
                                    <div class="ap-otp-inputs otp-password mt-3" data-length="6" data-form="registration">

                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="0">


                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="1">

                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="2">
                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="3">
                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="4">
                                        <input class="ap-otp-input otp-input" type="tel" maxlength="1" data-index="5">



                                    </div>
                                </div>

                                <div class="row m-0">


                                    <div class="col-lg-12 p-0 d-flex align-items-center">
                                        <div class="resend">

                                            <div class="countdown" id="countdown"></div>

                                        </div>
                                    </div>
                                    <dic class="col-lg-12 p-0">
                                        <button type="button" class="btn confirm-pass-btn">تایید و ادامه</button>
                                    </dic>

                                </div>







                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="forget-pass">
        <div class="page-title-wrapper">
            <div class="page-title-wrapper-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title-heading-wrapper">
                            <div class="title-heading">
                                <h2>نوسازی رمز عبور</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="forget-pass-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h5 class="forget-pass-title">لطفا نام کاربری یا ایمیل خود را وارد کنید</h5>
                        <div class="forget-form-box">
                           <form class="row" >
                               <div class="col-12">
                                   <input type="text" class="form-control">
                               </div>
                               <div class="col-12">
                                   <a href="#" class="forget-btn" >
                                       دریافت رمز عبور جدید
                                   </a>
                               </div>

                               <div class="col-12 text-center">
                                   <a href="#" class="forget-pass-link" id="return-login-page">
                                       بازگشت به صفحه ورود
                                   </a>
                               </div>
                           </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div id="register">
        <div class="page-title-wrapper">
            <div class="page-title-wrapper-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title-heading-wrapper">
                            <div class="title-heading">
                                <h2>ثبت نام</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="register-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 " id="mobile-number">
                        <h5 class="register-form-title">ایجاد یک حساب کاربری</h5>
                        <div class="register-form-box">
                            <div class="role-tabs">
                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a href="#" class="active nav-link" data-toggle="tab"  role="tab" aria-controls="duck" aria-selected="true">
                                            <i class="	fa fa-user-o"></i>
                                            کارجو
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="tab"  role="tab" aria-controls="duck1" aria-selected="false">
                                            <i class="fa fa-briefcase"></i>
                                            کارفرما
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <form class="row">
                                <div class="form-group col-12">
                                    <label for="email-input" class="col-form-label">ایمیل <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="email-input">
                                </div>
                                <div class="form-group col-12">
                                    <label for="pas-input" class="col-form-label">رمز عبور <span class="required">*</span></label>
                                    <input type="password" class="form-control" id="pas-input">
                                </div>
                                <div class="form-group col-12">
                                    <label for="pas-input" class="col-form-label"> تکرار رمز عبور <span class="required">*</span> </label>
                                    <input type="password" class="form-control" id="pas-input">
                                </div>
                                <div class="form-check d-inline-block  conditions-check col-12 ">
                                    <input class="form-check-input" type="checkbox" value="something">
                                    <label class="form-check-label">شما <a href="#" id="conditions-check">
                                        شرایط و ضوابط و خط مشی رازداری</a> ما را می پذیرید</label>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="register-btn" id="register-btn">
                                        هم اکنون ثبت نام کنید
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

</main>

@endsection

