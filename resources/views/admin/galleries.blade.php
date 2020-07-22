@extends('layouts.admin')
@section('title','Manage Gallery')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Manage Gallery</h2>
            </div>

            <div class="card-body">
                <div class="hoverable-data-table table-responsive">
                    <table id="user-table" class="table table-bordered table-hover table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    <h5>SL.</h5>
                                </th>
                                <th>
                                    <h5>Category</h5>
                                </th>
                                <th>
                                    <h5>Image</h5>
                                </th>
                                <th>
                                    <h5>Action</h5>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script>
        $(document).ready(function () {
        $('#user-table').DataTable({
             "aLengthMenu": [[10,20, 30, 50, 75, -1], [10,20, 30, 50, 75, "All"]],
            "pageLength": 10,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
   
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.gallery.index') !!}',
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'category', name: 'category'},
                {data: 'image', name: 'image'},
                {data: 'action', name: 'action',orderable: false, searchable: false},
            ],
            order: [0,'desc']
        });
    });
    </script>
    @endsection