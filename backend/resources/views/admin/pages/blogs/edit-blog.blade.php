@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    Blog Düzenle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Yazısı Düzenle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation add-blog" novalidate="" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="name">Blog Başlığı:</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name', $blog->name) }}" placeholder="Blog Başlığı" required="">
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
                                                    <!-- Quill toolbar ayarları -->
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
                                                </div>
                                                <div id="editor8"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="description" id="description" value="{{ old('description', $blog->description) }}">
                                </div>

                                <!-- Meta ve Durum alanları -->
{{--                                <div class="col-12">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Meta Başlık:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" value="{{ old('meta_title', $blog->meta_title) }}" placeholder="Meta Başlık" required="">--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Meta Açıklama:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" value="{{ old('meta_description', $blog->meta_description) }}" placeholder="Meta Açıklama" required="">--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 col-sm-6">--}}
{{--                                            <label for="validationCustom01">Anahtar Kelimeler:</label>--}}
{{--                                            <input class="form-control" id="validationCustom01" type="text" value="{{ old('keywords', $blog->keywords) }}" placeholder="Anahtar Kelimeler" required="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <!-- Durum alanı -->
                                <div class="mb-3">
                                    <label>Sayfada Göster:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="status_active">
                                            <input class="radio_animated" id="status_active" type="radio" name="status" value="1" {{ $blog->status == 1 ? 'checked' : '' }}>Aktif
                                        </label>
                                        <label for="status_inactive">
                                            <input class="radio_animated" id="status_inactive" type="radio" name="status" value="0" {{ $blog->status == 0 ? 'checked' : '' }}>Pasif
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image', $blog->cover_image) }}">

                            <!-- Form submit butonları -->
                            <div class="btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Güncelle</button>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Vazgeç</a>
                            </div>
                        </form>

                        <!-- Dropzone alanı -->
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.blogs.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h5 class="f-w-600 mb-0">Kapak Resmi Yükle</h5>
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

        var quillEditor = new Quill("#editor8", {
            modules: { toolbar: "#toolbar8" },
            theme: "snow",
            placeholder: "Açıklama Ekle...",
        });

        var existingDescription = document.querySelector('input[name=description]').value;
        quillEditor.root.innerHTML = existingDescription;

        document.querySelector('.add-blog').addEventListener('submit', function () {
            var quillContent = quillEditor.root.innerHTML;
            document.querySelector('input[name=description]').value = quillContent;
        });
    </script>
@endsection
