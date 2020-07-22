@extends('layouts.admin')
@section('title','Add Job')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Job</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.job.store')}}"
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
                        class="form-control" placeholder="Job Details">{{old('details')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Location*</label>
                    <input autofocus value="{{old('location')}}" required name="location" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter Location...">
                </div>
                <div class="form-group">
                    <label>Last apply date*</label>
                    <input autofocus value="{{old('last_date')}}" required name="last_date" style="background: #f5f6fa" type="date"
                        class="form-control " placeholder="Enter Last apply date...">
                </div>
                <div class="form-group">
                    <label>Image(optional)</label>
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