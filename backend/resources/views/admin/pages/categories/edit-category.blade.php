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
                    <div class="card-body">
                        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name">Kategori Adı:</label>
                                <input class="form-control" id="name" name="name" type="text" value="{{ $category->name }}" required>
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
                                                <div id="editor8">
                                                    {{ $category->description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="mb-3">
                                <label>Meta Başlık:</label>
                                <input class="form-control" name="meta_title" type="text" value="{{ $category->meta_title }}">
                            </div>
                            <div class="mb-3">
                                <label>Meta Açıklama:</label>
                                <input class="form-control" name="meta_description" type="text" value="{{ $category->meta_description }}">
                            </div>
                            <div class="mb-3">
                                <label>Kapak Resmi:</label>
                                <input type="file" name="cover_image" class="form-control">
                                @if($category->cover_image)
                                    <img src="{{ asset('storage/' . $category->cover_image) }}" alt="{{ $category->name }}" width="100" class="mt-2">
                                @endif
                            </div>
                            <button class="btn btn-primary" type="submit">Güncelle</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Vazgeç</a>
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
@endsection
