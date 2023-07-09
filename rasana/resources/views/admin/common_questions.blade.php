@extends('admin.admin-main')
@section('title', 'سوالات متداول')
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

                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">

                                        <table class="table table-bordered table-hover js-basic-example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 310.122px;">عنوان </th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;">تاریخ </th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 168.837px;"> اقدامات </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" >
                                                <td class="sorting_1">
                                                    چگونه بسته خود را پیگیری کنم؟
                                                </td>

                                                <td></td>



                                                <td>

                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editQuestionsModal" ><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade" id="editQuestionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form method="post" name="" action="">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش سوال</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="inputBox">عنوان سوال </label>
                                                                            <input type="text" name="" class="form-control" id="inputBox">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="textareaBox">پاسخ</label>
                                                                            <textarea class="tinyTextarea"></textarea>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success" >به روزرسانی</button>

                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o"></i></button>
                                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form method="post" action="" name="">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">حذف </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        آیا از حذف این سوال مطمعن هستید؟
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




    <script src="https://cdn.tiny.cloud/1/a5l2qyrzyqekxrwqk8p8x3qpo6cqzb5ptu719mokzfnu363q/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.tinyTextarea',
            statusbar: false,
            directionality : 'Rtl'
        });
    </script>
@endsection
