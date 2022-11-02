@extends('layouts.admin')
@section('title','Add Team')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Team</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.team.store')}}"
                method="POST">
                @csrf
                <div class="form-group">
                    <label>Name*</label>
                    <input autofocus value="{{old('name')}}" required name="name" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Name...">
                </div>
                <div class="form-group">
                    <label>About*</label>
                    <textarea id="editor" rows="30" required style="background: #f5f6fa" name="about"
                        class="form-control" placeholder="Team About">{{old('about')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Email*</label>
                    <input autofocus value="{{old('email')}}" required name="email" style="background: #f5f6fa"
                        type="email" class="form-control " placeholder="Enter Email...">
                </div>

                <div class="form-group">
                    <label>Phone*</label>
                    <input required value="{{old('phone')}}" name="phone" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter Phone...">
                </div>
                <div class="form-group">
                    <label>Designation*</label>
                    <input required value="{{old('designation')}}" name="designation" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Designation">
                </div>
                <div class="form-group">
                    <label>Type*</label>
                    <select style="background: #f5f6fa" class="form-control" required name="type" id="">
                        <option value="Survey operation team">Survey operation team</option>
                        <option value="Reporter team">Reporter team</option>
                        <option value="Audit & quality control team">Audit & quality control team</option>
                        <option value="Design & Daring team">Design & Daring team</option>
                        <option value="IT & Online service team">IT & Online service team</option>
                        <option value="Marketing & Consular">Marketing & Consular</option>
                        <option value="Human resource & general service team"> Human resource & general service team</option>
                        <option value="Management">Management</option>
                        <option value="Superintendency">Superintendency</option>
                    </select>
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
        CKEDITOR.replace( 'editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection
