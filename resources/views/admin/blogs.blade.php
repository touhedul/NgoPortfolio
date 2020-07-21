@extends('layouts.admin')
@section('title','Manage Blogs')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Manage Blogs</h2>
            </div>

            <div class="card-body">
                <div class="hoverable-data-table table-responsive">
                    <table id="user-table" class="table table-bordered table-hover table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th><h5>SL.</h5></th>
                                <th><h5>Title</h5></th>
                                <th><h5>Details</h5></th>
                                <th><h5>Tags</h5></th>
                                <th><h5>Posted By</h5></th>
                                <th><h5>Image</h5></th>
                                <th><h5>Action</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{Str::limit($blog->title,50)}}</td>
                                <td>{!!Str::limit($blog->details,50)!!}</td>
                                <td>{{Str::limit($blog->tags,25)}}</td>
                                <td>{{$blog->posted_by}}</td>
                                <td><img src="{{asset('blog_images/'.$blog->image)}}" height="80px" width="120px"
                                        alt=""></td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.blog.edit',$blog->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form{{$blog->id}}').submit();}else{event.preventDefault()}">Delete</a>
                                </td>
                                <form id="delete-form{{$blog->id}}" action="{{ route('admin.blog.destroy',$blog->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-3">
        {{$blogs->links()}}
    </div>
</div>
@endsection