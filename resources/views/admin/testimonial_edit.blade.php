@extends('layouts.admin')
@section('title','Edit Testimonial')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Testimonial</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.testimonial.update',$testimonial->id)}}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name*</label>
                    <input autofocus value="{{$testimonial->name}}" required name="name" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Name...">
                </div>
                <div class="form-group">
                    <label>About*</label>
                    <input autofocus value="{{$testimonial->about}}" required name="about" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter About...">
                </div>
                <div class="form-group">
                    <label>Message*</label>
                    <textarea id="editor" rows="30" required style="background: #f5f6fa" name="message"
                        class="form-control" placeholder="Testimonial Message">{{$testimonial->message}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image(optional)</label><br>
                    <img src="{{asset('testimonial_images/'.$testimonial->image)}}" alt="No Image Found"><br>
                    <input name="image" style="background: #f5f6fa" type="file" class="form-control ">
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