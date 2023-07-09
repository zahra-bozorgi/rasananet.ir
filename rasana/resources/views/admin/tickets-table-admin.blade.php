@extends('admin.admin-main')
@section('title', 'تیکت ها')
@section('content')

    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">تیکت ها</a>
            <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal"
                    data-target="#ticketModal">افزودن تیکت جدید
            </button>
            <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="" method="post" name="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ارسال تیکت</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                    <div class="form-group">
                                        <label class="form-label" for="inputBox">عنوان تیکت</label>
                                        <input type="text" class="form-control" id="inputBox">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="option">دپارتمان </label>
                                        <select class="form-control" id="option">
                                            <option>مالی </option>
                                            <option> فنی</option>
                                            <option>پشتیبانی </option>
                                            <option>فروش  </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="option">کاربر </label>
                                        <select class="form-control" id="option">
                                            <option>کاربر 1 </option>
                                            <option> کاربر 2 </option>
                                            <option>کاربر 3   </option>
                                            <option>کاربر 4   </option>
                                        </select>
                                    </div>
                                    <textarea class="tinyTextarea" placeholder="با سلام و وقت بخیر"></textarea>
                                    <button type="button" class="btn btn-primary ticketFile-btn mt-3"><span>پیوست فایل</span>
                                        <input class="form-control " type="file" id="ticketFile">
                                    </button>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" >ارسال تیکت</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>



        </nav>
        <div class="container-fluid">
            @if(Session::has('error'))
                <div class="alert alert-danger ">
                    <label>{!! Session::get('error') !!}</label>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success ">
                    <label>{!! Session::get('success') !!}</label>
                </div>
            @endif
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>شناسه تیکت</th>
                                        <th>عنوان تیکت</th>
                                        <th>کاربر</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ثبت</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>فعالسازی</td>
                                        <td>حامد ابراهیمی</td>
                                        <td>بدون پاسخ</td>
                                        <td>7 فروردین 1400</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm view-ticket-btn">
                                                <a href="{{  route('view-ticket') }}">مشاهده</a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                    data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="" name="" method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف تیکت</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این تیکت مطمعن هستید؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" onclick="location.href='#'" >بله
                                                                </button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">خیر</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>فعالسازی</td>
                                        <td>حامد ابراهیمی</td>
                                        <td>بدون پاسخ</td>
                                        <td>7 فروردین 1400</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm view-ticket-btn">
                                                <a href="{{  route('view-ticket') }}">مشاهده</a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                    data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="" name="" method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف تیکت</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این تیکت مطمعن هستید؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" onclick="location.href='#'" >بله
                                                                </button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">خیر</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>فعالسازی</td>
                                        <td>حامد ابراهیمی</td>
                                        <td>بدون پاسخ</td>
                                        <td>7 فروردین 1400</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm view-ticket-btn">
                                                <a href="{{  route('view-ticket') }}">مشاهده</a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                    data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="" name="" method="post">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف تیکت</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این تیکت مطمعن هستید؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" onclick="location.href='#'" >بله
                                                                </button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">خیر</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>
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
