@extends('admin.admin-main')
@section('title', 'مدیریت مالی')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">مدیریت مالی</a>



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
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">

                                        <table class="table table-bordered table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 310.122px;">نام مشتری</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 280.434px;">تاریخ ثبت</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 208.177px;">شماره پیگیری</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;">مبلغ </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;">نام سرویس  </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;"> اقدامات </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td>

                                                    <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#viewTransactionModal">مشاهده</button>
                                                    <div class="modal fade" id="viewTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">مشاهده جزئیات بیشتر</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row m-0">
                                                                        <label class="col-md-3">نام مشتری:</label>
                                                                        <div class="col-md-8">علی نیازی</div>
                                                                        <hr>
                                                                        <label class="col-md-3">تاریخ ثبت:</label>
                                                                        <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#invoiceEditingModal"><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="invoiceEditingModal" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش فاکتور</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label class="form-label" for="inputBox">قیمت</label>
                                                                                <input type="text" name="" class="form-control" id="inputBox">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="option">وضعیت فاکتور </label>
                                                                                <select class="form-control" id="option">
                                                                                    <option>وضعیت 1 </option>
                                                                                    <option> وضعیت 2 </option>
                                                                                </select>
                                                                            </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">ویرایش</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td>

                                                    <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#viewTransactionModal">مشاهده</button>
                                                    <div class="modal fade" id="viewTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">مشاهده جزئیات بیشتر</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row m-0">
                                                                        <label class="col-md-3">نام مشتری:</label>
                                                                        <div class="col-md-8">علی نیازی</div>
                                                                        <hr>
                                                                        <label class="col-md-3">تاریخ ثبت:</label>
                                                                        <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#invoiceEditingModal"><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="invoiceEditingModal" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش فاکتور</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">قیمت</label>
                                                                            <input type="text" name="" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="option">وضعیت فاکتور </label>
                                                                            <select class="form-control" id="option">
                                                                                <option>وضعیت 1 </option>
                                                                                <option> وضعیت 2 </option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">ویرایش</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td>

                                                    <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#viewTransactionModal">مشاهده</button>
                                                    <div class="modal fade" id="viewTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">مشاهده جزئیات بیشتر</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row m-0">
                                                                        <label class="col-md-3">نام مشتری:</label>
                                                                        <div class="col-md-8">علی نیازی</div>
                                                                        <hr>
                                                                        <label class="col-md-3">تاریخ ثبت:</label>
                                                                        <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#invoiceEditingModal"><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="invoiceEditingModal" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش فاکتور</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">قیمت</label>
                                                                            <input type="text" name="" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="option">وضعیت فاکتور </label>
                                                                            <select class="form-control" id="option">
                                                                                <option>وضعیت 1 </option>
                                                                                <option> وضعیت 2 </option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">ویرایش</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td>

                                                    <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#viewTransactionModal">مشاهده</button>
                                                    <div class="modal fade" id="viewTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">مشاهده جزئیات بیشتر</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row m-0">
                                                                        <label class="col-md-3">نام مشتری:</label>
                                                                        <div class="col-md-8">علی نیازی</div>
                                                                        <hr>
                                                                        <label class="col-md-3">تاریخ ثبت:</label>
                                                                        <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#invoiceEditingModal"><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="invoiceEditingModal" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" name="" method="post">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش فاکتور</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">قیمت</label>
                                                                            <input type="text" name="" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="option">وضعیت فاکتور </label>
                                                                            <select class="form-control" id="option">
                                                                                <option>وضعیت 1 </option>
                                                                                <option> وضعیت 2 </option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">ویرایش</button>

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
