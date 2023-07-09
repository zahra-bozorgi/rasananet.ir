@extends('user.panel-main')
@section('title', 'اطلاعیه ها')
@section('breadcrumb_item_active','اطلاعیه ها ')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">اطلاعیه ها</a>


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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 310.122px;">نام </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 280.434px;"> کاربر</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 208.177px;">توضیح</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;">تاریخ </th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;"> اقدامات </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" >
                                                <td class="sorting_1">افتتاح رسانا</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewNotificationsModal" >مشاهده</button>
                                                    <div class="modal fade" id="viewNotificationsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
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
                                                                            <label class="col-md-3">نام اطلاعیه</label>
                                                                            <div class="col-md-8">ورود به ناحیه کاربری</div>
                                                                            <hr>
                                                                            <label class="col-md-3">تاریخ ثبت:</label>
                                                                            <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                            <hr>
                                                                            <label class="col-md-3">توضیح:</label>
                                                                            <div class="col-md-8">ناحیه کاربری برای مشاهده فاکتورهای شما ، پرداخت آنها ، مشاهده اطلاعات حساب کاربری ، مدیریت سرویس ها، سفارش سرویس، پشتیبانی درخواست ها (تیکت) و...کاربرد دارد.</div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">افتتاح رسانا</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewNotificationsModal" >مشاهده</button>
                                                    <div class="modal fade" id="viewNotificationsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
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
                                                                            <label class="col-md-3">نام اطلاعیه</label>
                                                                            <div class="col-md-8">ورود به ناحیه کاربری</div>
                                                                            <hr>
                                                                            <label class="col-md-3">تاریخ ثبت:</label>
                                                                            <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                            <hr>
                                                                            <label class="col-md-3">توضیح:</label>
                                                                            <div class="col-md-8">ناحیه کاربری برای مشاهده فاکتورهای شما ، پرداخت آنها ، مشاهده اطلاعات حساب کاربری ، مدیریت سرویس ها، سفارش سرویس، پشتیبانی درخواست ها (تیکت) و...کاربرد دارد.</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">افتتاح رسانا</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewNotificationsModal" >مشاهده</button>
                                                    <div class="modal fade" id="viewNotificationsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
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
                                                                            <label class="col-md-3">نام اطلاعیه</label>
                                                                            <div class="col-md-8">ورود به ناحیه کاربری</div>
                                                                            <hr>
                                                                            <label class="col-md-3">تاریخ ثبت:</label>
                                                                            <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                            <hr>
                                                                            <label class="col-md-3">توضیح:</label>
                                                                            <div class="col-md-8">ناحیه کاربری برای مشاهده فاکتورهای شما ، پرداخت آنها ، مشاهده اطلاعات حساب کاربری ، مدیریت سرویس ها، سفارش سرویس، پشتیبانی درخواست ها (تیکت) و...کاربرد دارد.</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </td>
                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">افتتاح رسانا</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>



                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewNotificationsModal" >مشاهده</button>
                                                    <div class="modal fade" id="viewNotificationsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
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
                                                                            <label class="col-md-3">نام اطلاعیه</label>
                                                                            <div class="col-md-8">ورود به ناحیه کاربری</div>
                                                                            <hr>
                                                                            <label class="col-md-3">تاریخ ثبت:</label>
                                                                            <div class="col-md-8">16 اردیبهشت 1402</div>
                                                                            <hr>
                                                                            <label class="col-md-3">توضیح:</label>
                                                                            <div class="col-md-8">ناحیه کاربری برای مشاهده فاکتورهای شما ، پرداخت آنها ، مشاهده اطلاعات حساب کاربری ، مدیریت سرویس ها، سفارش سرویس، پشتیبانی درخواست ها (تیکت) و...کاربرد دارد.</div>
                                                                        </div>

                                                                    </div>
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
