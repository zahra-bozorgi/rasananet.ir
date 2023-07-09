@extends('admin.admin-main')
@section('title', 'مدیریت پکیج ها')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مدیریت پکیج ها</a>

                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#addPackageModal">افزودن پکیج
                </button>
                <div class="modal fade" id="addPackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="" name="" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">افزودن پکیج</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                        <div class="form-group">
                                            <label class="form-label" for="inputBox">نام پکیج</label>
                                            <input type="text" name="" class="form-control" id="inputBox">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="inputBox">قیمت</label>
                                            <input type="text" name="" class="form-control" id="inputBox">
                                        </div>
                                        <div class="form-group">
                                            <h5 class=" mt-4 mb-4">وضعیت</h5>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1">
                                                <label class="custom-control-label" for="customRadio1">کاربر</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio2">
                                                <label class="custom-control-label" for="customRadio2">کارمند</label>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">افزودن</button>

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
                        <div class="header">
                            <h2><strong>لیست</strong> پکیج ها </h2>
                        </div>

                        <div class="body">

                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer w-100">
                                    <div class="row">

                                        <table class="table table-bordered table-hover js-basic-example dataTable " id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 310.122px;">نام پکیج</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 280.434px;"> نوع محدودیت</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 208.177px;">قیمت</th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;"> اقدامات </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" >
                                                <td class="sorting_1">پکیج طلایی</td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editpackageModal" ><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="editpackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label class="form-label" for="inputBox">نام پکیج</label>
                                                                                <input type="text" class="form-control" id="inputBox">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="inputBox">قیمت</label>
                                                                                <input type="text" class="form-control" id="inputBox">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <h5 class=" mt-4 mb-4">وضعیت</h5>
                                                                                <div class="custom-control custom-radio mb-3">
                                                                                    <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1">
                                                                                    <label class="custom-control-label" for="customRadio1">کاربر</label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio mb-3">
                                                                                    <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio2">
                                                                                    <label class="custom-control-label" for="customRadio2">کارمند</label>
                                                                                </div>
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success" >به روزرسانی</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#packageModal"><i class="fa fa-trash-o"></i></button>
                                                    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">حذف پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        آیا از حذف این پکیج مطمعن هستید؟
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
                                            <tr role="row" >
                                                <td class="sorting_1">پکیج طلایی</td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editpackageModal" ><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="editpackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">نام پکیج</label>
                                                                            <input type="text" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">قیمت</label>
                                                                            <input type="text" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5 class=" mt-4 mb-4">وضعیت</h5>
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1">
                                                                                <label class="custom-control-label" for="customRadio1">کاربر</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio2">
                                                                                <label class="custom-control-label" for="customRadio2">کارمند</label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success" >به روزرسانی</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#packageModal"><i class="fa fa-trash-o"></i></button>
                                                    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">حذف پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        آیا از حذف این پکیج مطمعن هستید؟
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
                                            <tr role="row" >
                                                <td class="sorting_1">پکیج طلایی</td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editpackageModal" ><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="editpackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">نام پکیج</label>
                                                                            <input type="text" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">قیمت</label>
                                                                            <input type="text" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <h5 class=" mt-4 mb-4">وضعیت</h5>
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1">
                                                                                <label class="custom-control-label" for="customRadio1">کاربر</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio mb-3">
                                                                                <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio2">
                                                                                <label class="custom-control-label" for="customRadio2">کارمند</label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success" >به روزرسانی</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#packageModal"><i class="fa fa-trash-o"></i></button>
                                                    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">حذف پکیج</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        آیا از حذف این پکیج مطمعن هستید؟
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
                                        </table></div></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
