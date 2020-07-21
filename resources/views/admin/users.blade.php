@extends('layouts.admin')
@section('title','Manage Users')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Manage Users</h2>
            </div>

            <div class="card-body">
                <div class="hoverable-data-table table-responsive">
                    <table id="user-table" class="table table-bordered table-hover table-striped"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th><h5>SL.</h5></th>
                                <th><h5>Name</h5></th>
                                <th><h5>Email</h5></th>
                                <th><h5>About</h5></th>
                                <th><h5>Phone</h5></th>
                                <th><h5>Address</h5></th>
                                <th><h5>Image</h5></th>
                                <th><h5>Action</h5></th>
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
            ajax: '{!! route('admin.user.index') !!}',
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'about', name: 'about'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
                {data: 'image', name: 'image'},
                {data: 'action', name: 'action',orderable: false, searchable: false},
            ],
            order: [0,'desc']
        });
    });
    </script>
    @endsection