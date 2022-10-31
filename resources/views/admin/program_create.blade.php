@extends('layouts.admin')
@section('title', 'Add')
@section('content')

    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                @if ($category == 'Program')
                    <h2>Add Service</h2>
                @else
                    <h2>Add {{ $category }}</h2>
                @endif
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{ route('admin.program.store') }}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title*</label>
                        <input autofocus value="{{ old('title') }}" required name="title" style="background: #f5f6fa"
                            type="text" class="form-control " placeholder="Enter Title...">
                    </div>
                    <div class="form-group">
                        <label>Details*</label>
                        <textarea id="editor" rows="30" required style="background: #f5f6fa" name="details" class="form-control"
                            placeholder="{{ $category }} Details">{{ old('details') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Type*</label>
                        <select style="background: #f5f6fa" class="form-control" required name="type" id="">
                            <option selected disabled>select Type</option>
                            <option value="Valuation">Valuation</option>
                            <option value="Building">Building</option>
                            <option value="Inventory">Inventory</option>
                            <option value="Digital survey">Digital survey</option>
                            <option value="Asset valuation
                            ">Asset valuation
                            </option>
                            <option value="Consolatory">Consolatory</option>
                            <option value="Preparation of project profile
                            "> Preparation of project profile
                            </option>
                            <option value="General
                            "> General
                            </option>
                        </select>
                    </div>


                    @if ($category != 'Notice' && $category != 'Resource')
                        <div class="form-group">
                            <label>Image*</label>
                            <input autofocus required name="image" style="background: #f5f6fa" type="file"
                                class="form-control ">
                        </div>
                    @else
                        <div class="form-group">
                            <label>File</label>
                            <input autofocus name="file" style="background: #f5f6fa" type="file"
                                class="form-control ">
                        </div>
                    @endif
                    <input type="hidden" name="category" value="{{ $category }}">
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
        CKEDITOR.replace('details', {
            filebrowserUploadUrl: "{{ route('ckeditor.image.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
