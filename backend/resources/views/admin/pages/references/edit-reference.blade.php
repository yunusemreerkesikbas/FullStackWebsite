@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Referans Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" action="{{ route('admin.references.update', $reference->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="mb-3 col-sm-6">
                                        <label for="name">Marka Adı:</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Marka Adı" value="{{ old('name', $reference->name) }}" required="">
                                        @error('name')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="link">Marka Linki:</label>
                                        <input class="form-control @error('link') is-invalid @enderror" id="link" name="link" type="text" placeholder="Marka Linki" value="{{ old('link', $reference->link) }}" required="">
                                        @error('link')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image', $reference->cover_image) }}">
                            <div class="mb-3 btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                                <input class="btn btn-light" type="reset" value="Vazgeç">
                            </div>
                        </form>
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.references.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h5 class="f-w-600 mb-0">Logo Ekle</h5>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script>
        Dropzone.options.singleFileUpload = {
            paramName: "file",
            maxFilesize: 2,
            success: function(file, response) {
                document.getElementById('cover_image_path').value = response.path;
            },
            error: function(file, response) {
                console.log(response);
            }
        };
    </script>
@endsection
