@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    Marka Ekle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Marka Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="name">Marka Adı:</label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Marka Adı" required="" value="{{ old('name') }}">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="mb-3">
                                    <label>Sayfada Göster:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="status_active">
                                            <input class="radio_animated" id="status_active" type="radio" name="status" value="1" checked="">Aktif
                                        </label>
                                        <label for="status_inactive">
                                            <input class="radio_animated" id="status_inactive" type="radio" name="status" value="0">Pasif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image') }}">
                            <div class="btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                                <input class="btn btn-light" type="reset" value="Vazgeç">
                            </div>
                        </form>
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.brands.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
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
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>
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
