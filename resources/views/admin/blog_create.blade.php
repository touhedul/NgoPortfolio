@extends('layouts.admin')
@section('title','Add Blog')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Blog</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.blog.store')}}"
                method="POST">
                @csrf
                <div class="form-group">
                    <label>Title*</label>
                    <input autofocus value="{{old('title')}}" required name="title" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <label>Details*</label>
                    <textarea id="editor" rows="30" required style="background: #f5f6fa" name="details"
                        class="form-control" placeholder="Blog Details">{{old('details')}}</textarea>
                </div>

                <div class="form-group">
                    <label>Tags</label>
                    <input value="{{old('tags')}}" name="tags" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter Tags...">
                </div>
                <div class="form-group">
                    <label>Posted By</label>
                    <input value="{{old('posted_by')}}" name="posted_by" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter name by whom it will be posted...">
                </div>

                <div class="form-group">
                    <label>Image*</label>
                    <input autofocus required name="image" style="background: #f5f6fa" type="file"
                        class="form-control ">
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