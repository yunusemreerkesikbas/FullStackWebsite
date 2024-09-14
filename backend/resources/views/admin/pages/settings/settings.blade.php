@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    Ayarlar
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ayarlar</h4>
                    </div>
                    <div class="card-body add-post">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="row needs-validation add-form" novalidate="" action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="site_name">Site Adı:</label>
                                        <input class="form-control" id="site_name" type="text" name="site_name" value="{{ old('site_name', $setting->site_name) }}" placeholder="Site Adı" required="">
                                        <div class="valid-feedback">Looks good!</div>
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
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="instagram">Instagram:</label>
                                        <input class="form-control" id="instagram" name="instagram" type="text" value="{{ old('instagram', $setting->instagram) }}" placeholder="Instagram">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label for="facebook">Facebook:</label>
                                        <input class="form-control" id="facebook" name="facebook" type="text" value="{{ old('facebook', $setting->facebook) }}" placeholder="Facebook">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label for="twitter">Twitter:</label>
                                        <input class="form-control" id="twitter" name="twitter" type="text" value="{{ old('twitter', $setting->twitter) }}" placeholder="Twitter">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="linkedin">Linkedin:</label>
                                        <input class="form-control" id="linkedin" name="linkedin" type="text" value="{{ old('linkedin', $setting->linkedin) }}" placeholder="Linkedin">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label for="tel_no">Telefon Numarası</label>
                                        <input class="form-control" id="tel_no" name="tel_no" type="number" value="{{ old('tel_no', $setting->tel_no) }}" placeholder="Telefon Numarası">
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label for="wp_no">Whatsapp Numarası:</label>
                                        <input class="form-control" id="wp_no" name="wp_no" type="number" value="{{ old('wp_no', $setting->wp_no) }}" placeholder="Whatsapp Numarası">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="email">E Posta Adresi</label>
                                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $setting->email) }}" placeholder="E Posta Adresi" >
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="address">Adres</label>
                                        <input class="form-control" id="address" name="address" type="text" value="{{ old('address', $setting->address) }}" placeholder="Adres" >
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <label for="meta_name">Meta Başlık:</label>
                                            <input class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title', $setting->meta_title) }}" type="text" placeholder="Kategori Adı" >
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label for="meta_description">Meta Açıklama:</label>
                                            <input class="form-control" id="meta_description" name="meta_description" value="{{ old('meta_description', $setting->meta_description) }}" type="text" placeholder="Meta Açıklama" >
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label for="meta_keywords">Anahtar Kelime:</label>
                                            <input class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $setting->meta_keywords) }}" type="text" placeholder="Anahtar Kelimeler" >
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="site_description" id="site_description" value="{{ old('site_description', $setting->site_description) }}">
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image', $setting->cover_image) }}">
                            <div class="btn-showcase text-end mb-3">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                                <input class="btn btn-light" type="reset" value="Vazgeç">
                            </div>

                        </form>
                        <form class="dropzone" id="singleFileUpload" action="{{ route('admin.settings.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
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
        var editor8 = new Quill("#editor8", {
            modules: { toolbar: "#toolbar8" },
            theme: "snow",
            placeholder: "Açıklama Ekle...",
        });

        var existingDescription = document.querySelector('input[name=site_description]').value;
        editor8.root.innerHTML = existingDescription;

        document.querySelector('.add-form').addEventListener('submit', function () {
            var quillContent = editor8.root.innerHTML;
            document.querySelector('input[name=site_description]').value = quillContent;
        });

    </script>
@endsection
