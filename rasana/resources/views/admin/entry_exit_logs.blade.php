@extends('admin.admin-main')
@section('title', 'لاگ های ورود و خروج کاربران ')
@section('content')
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between page-navbar">
            <a class="navbar-brand" href="javascript:void(0);">لاگ های ورود و خروج کاربران </a>



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
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 310.122px;">نام کاربر </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 280.434px;"> نوع</th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;">تاریخ </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td>کارمند</td>
                                                <td></td>

                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td>کارمند</td>
                                                <td></td>

                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td>کارمند</td>
                                                <td></td>

                                            </tr>
                                            <tr role="row" >
                                                <td class="sorting_1">علی نیازی</td>
                                                <td>کارمند</td>
                                                <td></td>

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
