@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ürün Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 col-sm-6">
                                <label class="form-label col-12 m-0" for="validationServer01">Ürün Adı<span class="txt-danger"> *</span></label>
                                <div class="col-12 custom-input mb-2">
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required="">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label>Anasayfada Göster:</label>
                                <div class="m-checkbox-inline">
                                    <label for="status_active">
                                        <input class="radio_animated" id="status_active" type="radio" name="status" value="1" checked="">Aktif
                                    </label>
                                    <label for="status_inactive">
                                        <input class="radio_animated" id="status_inactive" type="radio" name="status" value="0">Pasif
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <div class="col-form-label">Kategori:
                                    <select class="js-example-placeholder-multiple col-sm-12" name="category_id" required>
                                        <option value="" disabled selected>Kategori Seç</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 col-sm-6">
                                <div class="col-form-label">Stok Durumu
                                    <select class="js-example-placeholder-multiple col-sm-12 @error('stock_status') is-invalid @enderror" name="stock_status" required>
                                        <option value="in_stock" {{ old('stock_status') == 'in_stock' ? 'selected' : '' }}>Stokta Var</option>
                                        <option value="out_of_stock" {{ old('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Stokta Yok</option>
                                    </select>
                                    @error('stock_status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="sku">Ürün Kodu (SKU)</label>
                                <input class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" type="text" value="{{ old('sku') }}">
                                @error('sku')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="quantity">Adet</label>
                                <input class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" type="number" value="{{ old('quantity') }}" min="0">
                                @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label class="form-label" for="price">Ürün Fiyatı</label>
                                <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" type="number" min="0" value="{{ old('price') }}">
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="mb-3 col-sm-6">
                                        <label for="meta_title">Meta Başlık:</label>
                                        <input class="form-control" id="meta_title" name="meta_title" type="text" placeholder="Meta Başlık" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="meta_description">Meta Açıklama:</label>
                                        <input class="form-control" id="meta_description" name="meta_description" type="text" placeholder="Meta Açıklama" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="meta_description">Meta Anahtar Kelimeler</label>
                                        <input type="text" class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3">{{ old('meta_description') }}</input>
                                        @error('meta_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_path" value="{{ old('cover_image') }}">
                            <input type="hidden" name="description" id="description">
                            <div class="btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Vazgeç</a>
                            </div>
                        </form>

                        <form class="dropzone mt-4" id="singleFileUpload" action="{{ route('admin.products.uploadCoverImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="dz-message needsclick">
                                    <i class="icon-cloud-up"></i>
                                    <h5 class="f-w-600 mb-0">Kapak Resmi Yüklemek İçin Tıklayın veya Sürükleyin</h5>
                                </div>
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
        document.querySelector('.add-post').addEventListener('submit', function () {
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

