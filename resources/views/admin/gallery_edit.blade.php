@extends('layouts.admin')
@section('title','Edit Gallery')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Gallery</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.gallery.update',$gallery->id)}}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Category*</label>
                    <select name="category" class="form-control" id="">
                        <option @if ($gallery->category == "Gallery")selected @endif value="Gallery">Gallery</option>
                        <option @if ($gallery->category == "Slider")selected @endif value="Slider">Slider</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Image*</label>
                    <img src="{{asset('gallery_images/'.$gallery->image)}}" alt="" srcset="">
                    <input autofocus name="image" style="background: #f5f6fa" type="file"
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
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection