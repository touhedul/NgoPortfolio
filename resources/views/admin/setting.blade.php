@extends('layouts.admin')
@section('title','Add Blog')
@section('content')

<div class="row">

    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Company Information</h2>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.settingCompany')}}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Company Name*</label>
                        <input autofocus required name="website_name" style="background: #f5f6fa" type="text"
                            class="form-control " placeholder="Enter Company Name..."
                            value="{{ $settings->where('key','website_name')->first()->value ?? old('website_name') }}">
                    </div>

                    <div class="form-group">
                        <label>Company Address</label>
                        <input value="{{ $settings->where('key','address')->first()->value ?? old('address') }}"
                            name="address" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Address...">
                    </div>

                    <div class="form-group">
                        <label>Company Phone</label>
                        <input
                            value="{{ $settings->where('key','phone_number')->first()->value ?? old('phone_number') }}"
                            name="phone_number" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Phone...">
                    </div>

                    <div class="form-group">
                        <label>Company Email</label>
                        <input value="{{ $settings->where('key','email')->first()->value ?? old('email') }}"
                            name="email" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Email...">
                    </div>

                    <div class="form-group">
                        <label>Company Facebook</label>
                        <input value="{{ $settings->where('key','facebook')->first()->value ?? old('facebook') }}"
                            name="facebook" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Facebook...">
                    </div>

                    <div class="form-group">
                        <label>Company Linkedin</label>
                        <input value="{{ $settings->where('key','linkedin')->first()->value ?? old('linkedin') }}"
                            name="linkedin" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Linkedin...">
                    </div>

                    <div class="form-group">
                        <label>Company Logo</label><br>
                        <img src="{{asset('images/'.$settings->where('key','logo')->first()->value)}}"
                            alt="No Image Found"><br>
                        <input autofocus name="logo" style="background: #f5f6fa" type="file" class="form-control ">
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

    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Office Information</h2>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.settingOffice')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Office Name*</label>
                        <input autofocus
                            value="{{ $settings->where('key','office_name')->first()->value ?? old('office_name') }}" required
                            name="office_name" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Office Name...">
                    </div>

                    <div class="form-group">
                        <label>Office Address</label>
                        <input value="{{ $settings->where('key','office_address')->first()->value ?? old('office_address') }}"
                            name="office_address" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Office Address...">
                    </div>

                    <div class="form-group">
                        <label>Office Phone</label>
                        <input value="{{ $settings->where('key','office_phone')->first()->value ?? old('office_phone') }}"
                            name="office_phone" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Office Phone...">
                    </div>

                    <div class="form-group">
                        <label>Office Email</label>
                        <input value="{{ $settings->where('key','office_email')->first()->value ?? old('office_email') }}"
                            name="office_email" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Office Email...">
                    </div>

                    <div class="form-group">
                        <label>Office Map Address</label>
                        <input value="{{ $settings->where('key','office_map')->first()->value ?? old('office_map') }}"
                            name="office_map" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Office Map Address...">
                    </div>

                    <div class="form-group">
                        <label>Company Youtube</label>
                        <input value="{{ $settings->where('key','youtube')->first()->value ?? old('youtube') }}"
                            name="youtube" style="background: #f5f6fa" type="text" class="form-control "
                            placeholder="Enter Company Youtube...">
                    </div>

                    <div class="form-group">
                        <label>Footer Logo*</label><br>
                        <img src="{{asset('images/'.$settings->where('key','logo_footer')->first()->value)}}"
                            alt="No Image Found"><br>
                        <input autofocus  name="logo_footer" style="background: #f5f6fa" type="file"
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

</div>
@endsection

@section('script')
<script>
    // CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'details', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection
