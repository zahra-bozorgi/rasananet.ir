@extends('user.panel-main')
@section('title', 'سوالات متداول')
<style>
    .content {
        background: #fff;
        /*border-radius: 3px;*/
        /*box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075), 0 2px 4px rgba(0, 0, 0, 0.0375);*/
        padding: 30px;
    }

    .panel-group {
        margin-bottom: 0;
    }

    .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
    }


    .panel-heading {
        padding: 0;
    }

    .panel-heading h4 a {
        background: #f8f8f8;
        display: block;
        font-size: 16px;
        font-weight: bold;
        padding: 15px;
        text-decoration: none;
        transition: 0.15s all ease-in-out;
    }

    .panel-heading h4 a:hover,.panel-heading h4 a:not(.collapsed) {
        background: #fff;
        transition: 0.15s all ease-in-out;
    }

    .panel-group .panel .panel-heading h4 a:not(.collapsed) i:before {
        content: "\f068";
    }


    .panel-group .panel .panel-heading h4 a i{
        color: #999;
    }


    .panel-body {
        padding-top: 0;
    }


    .panel-heading + .panel-collapse > .list-group,
    .panel-heading + .panel-collapse > .panel-body {
        border-top: none;
    }


    + .panel {
        border-top: none;
        margin-top: 0;
    }

</style>
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">سوالات متداول</a>


        </nav>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="container">
                                <div class="content">
                                    <div class="panel-group" id="accordion" role='tablist' aria-multiselectable='true'>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne" role='tab'>
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne" aria-expanded="false"
                                                       aria-controls="collapseOne" class="collapsed">کد رهگیری چیست؟
                                                        <i class="pull-left fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseOne" role="tabpanel"
                                                 aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>کد رهگیری ۱۱ تا ۲۵رقم است که هنگام ثبت قرارداد برای فرستنده و گیرنده ی کالا پیامک می شود</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingTwo" role='tab'>
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseTwo" aria-expanded="false"
                                                       aria-controls="collapseTwo" class="collapsed">چه زمانی اطلاعات بسته ی ارسالی من قابل رهگیری است؟
                                                        <i class="pull-left fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel"
                                                 aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>بعد از دریافت کد رهگیری اطلاعات مرسوله قابل رویت می باشد.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingThree" role='tab'>
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseThree" aria-expanded="false"
                                                       aria-controls="collapseThree" class="collapsed">چه تفاوتی بین وزن حجمی و وزن جرمی می‌باشد؟
                                                        <i class="pull-left fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseThree" role="tabpanel"
                                                 aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>منظور از وزن واقعی، وزن حقیقی کالا مطابق باسکول می‌باشد، لیکن وزن حجمی در خصوص کالاهایی مصداق دارد که وزن کم ولی ابعاد اشغال شده زیادی دارند.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
