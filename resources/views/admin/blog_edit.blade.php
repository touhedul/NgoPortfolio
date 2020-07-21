@extends('layouts.admin')
@section('title','Edit Blog')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Blog</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.blog.update',$blog->id)}}"
                class="" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Title</label>
                    <input autofocus value="{{$blog->title}}" required name="title" style="background: #f5f6fa"
                        type="text" class="form-control is-valid" placeholder="">
                </div>
                <div class="form-group">
                    <label>Details</label>
                    <textarea rows="15" required style="background: #f5f6fa" name="details" class="form-control"
                        placeholder="Enter Email">{!!$blog->details!!}</textarea>
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input value="{{$blog->tags}}" name="tags" style="background: #f5f6fa" type="text"
                        class="form-control is-valid" placeholder="">
                </div>
                <div class="form-group">
                    <label>Posted By</label>
                    <input autofocus value="{{$blog->posted_by}}" name="posted_by" style="background: #f5f6fa"
                        type="text" class="form-control is-valid" placeholder="">
                </div>
                <div class="form-group">
                    <label>Image</label><br>
                    <img src="{{asset('blog_images/'.$blog->image)}}" alt=""> <br>
                    <input name="image" style="background: #f5f6fa" type="file" class="form-control is-valid">
                </div>
                <div class="form-footer pt-4 pt-2 mt-4 border-top">
                    <button type="submit" class="mb-1 btn btn-success">
                        <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
    // CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'details', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()]),}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection