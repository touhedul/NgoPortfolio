@extends('layouts.admin')
@section('title','Edit Branch')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Branch</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.branch.store',$branch->id)}}"
                method="POST">
                @csrf
                <div class="form-group">
                    <label>Title*</label>
                    <input autofocus value="{{$branch->title}}" required name="title" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <label>Short Details*</label>
                    <input autofocus value="{{$branch->short_details}}" required name="short_details" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Short Details...">
                </div>
                <div class="form-group">
                    <label>Details*</label>
                    <textarea id="editor" rows="30" required style="background: #f5f6fa" name="details"
                        class="form-control" placeholder="Branch Details">{{$branch->details}}</textarea>
                </div>
                <div class="form-group">
                    <label>Phone*</label>
                    <input autofocus value="{{$branch->phone}}" required name="phone" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter Phone...">
                </div>
                <div class="form-group">
                    <label>Image(optional)</label><br>
                    <img src="{{asset('branch_images/'.$branch->image)}}" alt="No image found"><br>
                    <input   name="image" style="background: #f5f6fa" type="file"
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
        CKEDITOR.replace( 'editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()]),}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection