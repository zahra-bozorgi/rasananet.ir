@extends('admin.admin-main')
@section('title', 'مشاهده تیکت')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مشاهده تیکت</a>

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
                                    <img src="{{ URL('assets/main/image/member5.jpg') }}" alt="avatar"/>

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
                                    <form method="post" class="mb-3">

                                        <textarea class="tinyTextarea"></textarea>
                                    </form>
                                    <div class="hidden-print col-md-12 text-left">


                                        <button class="btn btn-primary">ارسال پاسخ</button>
                                    </div>
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
