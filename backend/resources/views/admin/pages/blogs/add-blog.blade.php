@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    Blog Ekle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Yazısı Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation add-blog" novalidate="" action="{{route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="name">Blog Başlığı:</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Blog Başlığı" required="">
                                    @error('name')
                                    <div class="valid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label class="w-100">Açıklama:</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar8"><span class="ql-formats">
                                    <select class="ql-size">
                                      <option value="small">Small</option>
                                      <option selected="">Normal</option>
                                      <option value="large">Large</option>
                                      <option value="huge">Huge</option>
                                    </select></span><span class="ql-formats">
                                    <button class="ql-bold">Bold</button>
                                    <button class="ql-italic">Italic</button>
                                    <button class="ql-underline">Underline</button>
                                    <button class="ql-strike">Strike</button>
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button></span><span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button></span><span class="ql-formats">
                                    <button class="ql-list" value="ordered">List</button>
                                    <button class="ql-list" value="bullet">Bullet</button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                    <button class="ql-link">Link</button>
                                    <button class="ql-image">Image</button>
                                    <button class="ql-video">Video</button>
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select></span>
                                                    <!-- Add more options here--><span class="ql-formats">
                                    <button class="ql-blockquote">Blockquote</button>
                                    <button class="ql-code-block"></button></span><span class="ql-formats">
                                    <button class="ql-align" value=""></button>
                                    <button class="ql-align" value="center"></button>
                                    <button class="ql-align" value="right"></button>
                                    <button class="ql-align" value="justify"></button></span><span class="ql-formats">
                                    <button class="ql-clean"></button></span>
                                                </div>
                                                <div id="editor8"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="description" id="description">
                                </div>
{{--                                <div class="col-12">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Meta Başlık:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" placeholder="Kategori Adı" required="">--}}
{{--                                            <div class="valid-feedback">Looks good!</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Meta Açıklama:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" placeholder="Kategori Açıklama" required="">--}}
{{--                                            <div class="valid-feedback">Looks good!</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Anahtar Kelimeler:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" placeholder="Anahtar Kelimeler" required="">--}}
{{--                                            <div class="valid-feedback">Looks good!</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.blogs.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
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
        document.querySelector('.add-blog').addEventListener('submit', function () {
            var editor8 = new Quill("#editor8", {
                modules: { toolbar: "#toolbar8" },
                theme: "snow",
                placeholder: "Açıklama Ekle...",
            });
            var quillContent = editor8.root.innerHTML;
            document.querySelector('input[name=description]').value = quillContent;
        });
    </script>
@endsection
