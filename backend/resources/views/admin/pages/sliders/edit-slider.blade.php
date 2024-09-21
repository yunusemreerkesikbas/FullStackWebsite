@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    Slider Düzenle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$slider->title}} Düzenle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="title">Başlık:</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="title" name="title" type="text" placeholder="Başlık" value="{{ old('title', $slider->title) }}" required="">
                                        @error('name')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="display_order">Görüntülenme Sırası:</label>
                                        <input class="form-control @error('display_order') is-invalid @enderror" id="display_order" name="display_order" value="{{ old('title', $slider->display_order) }}" type="number" placeholder="Sıra No" required="">
                                        @error('display_order')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Sayfada Göster:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="status_active">
                                            <input class="radio_animated" id="status_active" type="radio" name="status" value="1" {{ $slider->status == 1 ? 'checked' : '' }}>Aktif
                                        </label>
                                        <label for="status_inactive">
                                            <input class="radio_animated" id="status_inactive" type="radio" name="status" value="0" {{ $slider->status == 0 ? 'checked' : '' }}>Pasif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image', $slider->cover_image) }}">
                            <div class="btn-showcase text-end mb-3">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                                <input class="btn btn-light" type="reset" value="Vazgeç">
                            </div>

                        </form>
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.sliders.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
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
