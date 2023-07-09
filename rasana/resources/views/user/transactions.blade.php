@extends('user.panel-main')
@section('title', 'تراکنش ها')

@section('content')

    <div class="page">

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
                            <h2><strong>جدول</strong> تراکنش  </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>عنوان </th>
                                        <th>تاریخ درخواست</th>
                                        <th>وضعیت</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                           تراکنش 1
                                        </td>
                                        <td>26 اسفند 1401</td>
                                        <td ><span class="text-success" >پرداخت شده</span></td>



                                    </tr>
                                    <tr>
                                        <td>
                                            تراکنش 1
                                        </td>
                                        <td>26 اسفند 1401</td>
                                        <td>
                                            <span class="text-danger">در حال بررسی</span>
                                        </td>



                                    </tr>
                                    <tr>
                                        <td>
                                            تراکنش 1
                                        </td>
                                        <td>26 اسفند 1401</td>
                                        <td>
                                            <span class="text-danger">در حال بررسی</span>
                                        </td>



                                    </tr>
                                    <tr>
                                        <td>
                                            تراکنش 1
                                        </td>
                                        <td>26 اسفند 1401</td>
                                        <td>
                                            <span class="text-danger">در حال بررسی</span>
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

