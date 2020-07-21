@extends('layouts.admin')
@section('title','Feedbacks')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Feedbacks</h2>
                <h2>Average Feedback {{$averageFeedback}}</h2>
            </div>

            <div class="card-body">
                <div class="hoverable-data-table table-responsive">
                    <table id="user-table" class="table table-bordered table-hover table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th><h5>SL.</h5></th>
                                <th><h5>Name</h5></th>
                                <th><h5>Email</h5></th>
                                <th><h5>Message</h5></th>
                                <th><h5>Feedback</h5></th>
                                <th><h5>Time</h5></th>
                                <th><h5>Action</h5></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#user-table').DataTable({
            "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
            "pageLength": 20,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
   
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.feedbacks') !!}',
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'message', name: 'message'},
                {data: 'feedback', name: 'feedback'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action',orderable: false, searchable: false},
            ],
            order: [0,'desc']
        });
    });
</script>
@endsection