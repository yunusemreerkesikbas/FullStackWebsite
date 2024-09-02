@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection
@section('breadcrumb')
    Resim Ekle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Resim Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="validationCustom01">Başlık:</label>
                                        <input class="form-control" id="validationCustom01" type="text" placeholder="Başlık" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label>İşlem Durumu:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="edo-ani">
                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">Aktif
                                        </label>
                                        <label for="edo-ani1">
                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">Pasif
                                        </label>

                                    </div>
                                </div>
                            </div>

                        </form>
                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h5 class="f-w-600 mb-0">Resim Ekle</h5>
                            </div>
                        </form>
                        <div class="btn-showcase text-end">
                            <button class="btn btn-primary" type="submit">Ekle</button>
                            <input class="btn btn-light" type="reset" value="Vazgeç">
                        </div>
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
{{--    <script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>--}}
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
@endsection
