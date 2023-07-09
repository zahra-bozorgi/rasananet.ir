
@extends('admin.admin-main')
@section('title', 'مدیریت کاربر')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مدیران کل و کارمندان</a>
            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#ticketModal" style="width: 120px;">ثبت کارمند
            </button>
            <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="post" action="" name="">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ثبت کارمند</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                    <div class="form-group">
                                        <label class="form-label" for="inputName">نام</label>
                                        <input type="text" name="" class="form-control" id="inputName">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="inputNumber">شماره موبایل</label>
                                        <input type="text" name="" class="form-control" id="inputNumber">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="inputPass">رمز عبور</label>
                                        <input type="password" name="" class="form-control" id="inputPass">
                                    </div>
                                    <div class="form-group">
                                        <h5 class=" mt-4 mb-4">وضعیت</h5>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">مدیر</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">کارمند</label>
                                        </div>
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" >افزودن</button>

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
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 c_table js-basic-example dataTable">
                                    <thead>
                                    <tr>

                                        <th>کاربران</th>
                                        <th>تلفن</th>
                                        <th>ایمیل</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>
                                            <img src="{{ URL('assets/main/image/member5.jpg') }}" class="avatar w30" alt="">
                                            <span class="ml-2">John Smith</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-2583</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);" title="">johnsmith@gmail.com</a></span>
                                        </td>

                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn">
                                                <a href="{{  route('page-profile') }}"> <i class="fa fa-edit"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post" action="" name="">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف کاربر</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این کاربر مطمعن هستید؟
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
                                            <img src="{{ URL('assets/main/image/member5.jpg') }}" class="avatar w30" alt="">
                                            <span class="ml-2">John Smith</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-2583</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);" title="">johnsmith@gmail.com</a></span>
                                        </td>

                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn">
                                                <a href="{{  route('page-profile') }}"> <i class="fa fa-edit"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post" action="" name="">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف کاربر</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این کاربر مطمعن هستید؟
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
                                            <img src="{{ URL('assets/main/image/member5.jpg') }}" class="avatar w30" alt="">
                                            <span class="ml-2">John Smith</span>
                                        </td>
                                        <td>
                                            <span class="phone">+1 264-625-2583</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);" title="">johnsmith@gmail.com</a></span>
                                        </td>

                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn">
                                                <a href="{{  route('page-profile') }}"> <i class="fa fa-edit"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o"></i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="post" action="" name="">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">حذف کاربر</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                آیا از حذف این کاربر مطمعن هستید؟
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


@endsection




