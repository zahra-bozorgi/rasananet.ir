@extends('user.panel-main')
@section('title', 'مشاهده تیکت')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مشاهده تیکت</a>
            <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#ticketChangeModal">تغییر وضعیت تیکت
            </button>
            <div class="modal fade" id="ticketChangeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تغییر وضعیت تیکت</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class=" form-group">
                                <label class="form-label">وضعیت</label>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1" checked>
                                    <label class="custom-control-label" for="customRadio1">در حال بررسی</label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" name="custom-radio-1"  class="custom-control-input" id="customRadio2" >
                                    <label class="custom-control-label" for="customRadio2">خوانده شده</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">ارسال</button>

                        </div>
                    </div>
                </div>
            </div>


        </nav>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 d-flex">
                    <div class="card flex-fill">
                        <div class="chat_window body">
                            <div class="chat-header">
                                <div class="user">

                                    <div class="chat-about">
                                        <div class="chat-with">علی نیازی</div>
                                        <div class="chat-num-messages">پیش از این 2 پیام</div>
                                    </div>
                                    <img src="{{ URL('assets/cloud/images/sm/avatar6.jpg') }}" alt="avatar"/>

                                </div>


                            </div>
                            <hr>
                            <ul class="chat-history">
                                <li class="clearfix">
                                    <div class="status online message-data text-right">
                                        <i class="fa fa-circle me"></i>
                                        <span class="name">مدیر سایت</span>

                                    </div>
                                    <div class="message other-message float-right">
                                        Hi John Doe, how are you? How is the project coming along?
                                        <span class="time">10:10 صبح, امروز</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="status message-data">
                                        <span class="name">علی نیازی</span>
                                    </div>
                                    <div class="message my-message">
                                        <p>Are we meeting today? Project has been already finished and I have results to
                                            show you.</p>
                                        <span class="time">امروز، 10:12 صبح</span>
                                    </div>

                                </li>


                            </ul>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <form method="post" action="" name="" class="mb-3">

                                        <textarea class="tinyTextarea"></textarea>


                                        <button class="btn btn-primary float-left mt-2">ارسال پاسخ</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/a5l2qyrzyqekxrwqk8p8x3qpo6cqzb5ptu719mokzfnu363q/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.tinyTextarea',
            statusbar: false,
            directionality : 'Rtl'
        });

    </script>
@endsection
