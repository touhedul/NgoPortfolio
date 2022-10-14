@extends('layouts.admin')
@section('title', 'Manage')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    @if ($category == 'Program')
                        <h2>Service</h2>
                    @else
                        <h2>{{ $category }} </h2>
                    @endif
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
                                        <h5>Title</h5>
                                    </th>
                                    <th>
                                        <h5>Details</h5>
                                    </th>
                                    @if ($category == 'Notice' || $category == 'Publication')
                                        <th>
                                            <h5></h5>
                                        </th>
                                    @else
                                        <th>
                                            <h5>Images</h5>
                                        </th>
                                    @endif
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
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#user-table').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',

                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.data-table.values', $category) !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'details',
                        name: 'details'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [0, 'desc']
            });
        });
    </script>
@endsection
