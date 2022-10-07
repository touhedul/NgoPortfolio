@extends('layouts.admin')
@section('title', 'Add Gallery')
@section('content')

    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Gallery</h2>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{ route('admin.gallery.store') }}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category*</label>
                        <select name="category" class="form-control" id="">
                            <option value="Gallery">Gallery</option>
                            <option value="Slider">Slider</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Enter the title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                            placeholder="Description"></textarea>
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
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.image.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
