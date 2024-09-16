@extends('admin.layouts.app')

@section('title', 'Kategori Düzenle')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    {{$category->name}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$category->name}} Düzenle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name">Kategori Adı:</label>
                                <input class="form-control" id="name" name="name" type="text" value="{{ $category->name }}">
                            </div>
                            <div class="mb-3">
                                <label>Anasayfada Göster:</label>
                                <div class="m-checkbox-inline">
                                    <label for="status_active">
                                        <input class="radio_animated" id="status_active" type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked' : '' }}>Aktif
                                    </label>
                                    <label for="status_inactive">
                                        <input class="radio_animated" id="status_inactive" type="radio" name="status" value="0" {{ $category->status == 0 ? 'checked' : '' }}>Pasif
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Üst Kategori:</label>
                                <select class="form-control" name="parent_id">
                                    <option value="">Yok</option>
                                    @foreach($categories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}" {{ $category->parent_id == $parentCategory->id ? 'selected' : '' }}>
                                            {{ $parentCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
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
                                <input type="hidden" name="description" id="description" value="{{ old('description', $category->description) }}">
                            </div>
                            <div class="mb-3">
                                <label>Meta Başlık:</label>
                                <input class="form-control" name="meta_title" type="text" value="{{ $category->meta_title }}">
                            </div>
                            <div class="mb-3">
                                <label>Meta Açıklama:</label>
                                <input class="form-control" name="meta_description" type="text" value="{{ $category->meta_description }}">
                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image', $category->cover_image) }}">

                            <button class="btn btn-primary" type="submit">Güncelle</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Vazgeç</a>
                        </form>
                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.categories.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h5 class="f-w-600 mb-0">Kapak Resmi Güncelle</h5>
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

        document.querySelector('.add-post').addEventListener('submit', function () {
            var quillContent = quillEditor.root.innerHTML;
            document.querySelector('input[name=description]').value = quillContent;
        });
    </script>
@endsection
