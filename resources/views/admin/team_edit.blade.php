@extends('layouts.admin')
@section('title','Edit Team')
@section('content')

<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Team</h2>
        </div>
        <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.team.update',$team->id)}}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name*</label>
                    <input autofocus value="{{$team->name}}" required name="name" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Name...">
                </div>
                <div class="form-group">
                    <label>About*</label>
                    <textarea id="editor" rows="30" required style="background: #f5f6fa" name="about"
                        class="form-control" placeholder="Team About">{{$team->about}}</textarea>
                </div>
                <div class="form-group">
                    <label>Email*</label>
                    <input autofocus value="{{$team->email}}" required name="email" style="background: #f5f6fa"
                        type="email" class="form-control " placeholder="Enter Email...">
                </div>

                <div class="form-group">
                    <label>Phone*</label>
                    <input required value="{{$team->phone}}" name="phone" style="background: #f5f6fa" type="text"
                        class="form-control " placeholder="Enter Phone...">
                </div>
                <div class="form-group">
                    <label>Designation*</label>
                    <input required value="{{$team->designation}}" name="designation" style="background: #f5f6fa"
                        type="text" class="form-control " placeholder="Enter Designation">
                </div>
                <div class="form-group">
                    <label>Type*</label>
                    <select style="background: #f5f6fa" class="form-control" required name="type" id="">
                        <option @if ($team->type == "General") selected
                            @endif value="General">General</option>
                        <option @if ($team->type == "Executive") selected
                            @endif value="Executive">Executive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Image*</label>
                    <img src="{{asset('team_images/'.$team->image)}}" alt=""> <br>
                    <input autofocus name="image" style="background: #f5f6fa" type="file" class="form-control ">
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