@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ürün Ekle</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-xl-5 g-3 gy-5">
                            <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Ekle</h5>
                                                <p>Ürün İsmi && Detaylar</p>
                                            </div></a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#product-gallery"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Galeri</h5>
                                                <p>Kapak Resmi && Ürün Galerisi</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Özellikler</h5>
                                                <p>Ürün, Ürün Durumu Ekle</p>
                                            </div></a></li>

                                    <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#advance"> </use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Advance</h5>
                                                <p>Add Meta details & Inventory details</p>
                                            </div></a></li>
                                </ul>
                            </div>
                            <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                <div class="tab-content" id="add-product-pills-tabContent">
                                    <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                                        <div class="sidebar-body">
                                            <form class="row g-2">
                                                <label class="form-label col-12 m-0" for="validationServer01">Ürün Adı<span class="txt-danger"> *</span></label>
                                                <div class="col-12 custom-input">
                                                    <input class="form-control is-invalid" id="validationServer01" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Bir ürün adı gereklidir ve benzersiz olması önerilir.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="toolbar-box">
                                                        <div id="toolbar2"><span class="ql-formats">
                                        <select class="ql-size"></select></span><span class="ql-formats">
                                        <button class="ql-bold">Bold </button>
                                        <button class="ql-italic">Italic </button>
                                        <button class="ql-underline">underline</button>
                                        <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                        <button class="ql-list" value="ordered">List </button>
                                        <button class="ql-list" value="bullet"> </button>
                                        <button class="ql-indent" value="-1"> </button>
                                        <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button></span>
                                                        </div>
                                                        <div id="editor2"></div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="product-buttons">
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Sonraki
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">  </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
                                        <div class="sidebar-body">
                                            <div class="product-upload">
                                                <p>Kapak Resmi</p>
                                                <form class="dropzone dropzone-light" id="multiFileUploadA" action="/upload.php">
                                                    <div class="dz-message needsclick">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload"></use>
                                                        </svg>
                                                        <h5>Drag your image here, or <a class="txt-primary" href="#!">browser</a></h5><span class="note needsclick">SVG,PNG,JPG or GIF</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-upload">
                                                <p>Ürün Galeri</p>
                                                <form class="dropzone dropzone-light" id="multiFileUploadB" action="/upload.php">
                                                    <div class="dz-message needsclick">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload1"></use>
                                                        </svg>
                                                        <h5>Drag files here</h5><span class="note needsclick">Add Product Gallery Images</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-buttons">
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                        </svg>Önceki
                                                    </div>
                                                </div>
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Sonraki
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">     </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                                        <div class="sidebar-body">
                                            <form>
                                                <div class="row g-lg-4 g-3">
                                                    <div class="col-12">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row g-2">
                                                                    <div class="col-12">
                                                                        <label class="form-label m-0">Kategori</label>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <select class="form-select" id="validationDefault01" required="">
                                                                            <option selected="" value="">Toys & games</option>
                                                                            <option>Sportswear </option>
                                                                            <option>Jewellery </option>
                                                                            <option>Furniture and Decor</option>
                                                                            <option>Health, Personal Care, and Beauty</option>
                                                                            <option>Auto and Parts </option>
                                                                            <option>Baby Care Products</option>
                                                                        </select>
                                                                        <p class="f-light">Bir ürün bir kategoriye eklenebilir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label">Anasayfada Göster</label>
                                                                        <select class="form-select" id="validationDefault04" required="">
                                                                            <option selected="" value="">Publish</option>
                                                                            <option>Aktif</option>
                                                                            <option>Pasif</option>
                                                                        </select>
                                                                        <p class="f-light">Durumu seçin</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6 mt-3">
                                                                <label class="form-label" for="exampleFormControlInputa">Ürün Fiyatı</label>
                                                                <input class="form-control" id="exampleFormControlInputa" type="number" value="0" min="0">

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="product-buttons">
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Önceki
                                                        </div>
                                                    </div>
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Sonraki
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="advance-product-tab">
                                        <div class="sidebar-body advance-options">
                                            <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">Ürün Bilgileri</a></li>
                                                <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">Meta Etiketleri</a></li>
                                            </ul>
                                            <div class="tab-content" id="advance-option-tabContent">
                                                <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                                    <div class="meta-body">
                                                        <form id="advance-tab">
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-sm-6">
                                                                    <label class="form-label">Stok Durumu</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected="">Stokta Var</option>
                                                                        <option value="1">Stokta Yok</option>
                                                                    </select>
                                                                </div>


                                                            </div>
                                                            <div class="col-sm-6 mt-3">
                                                                <label class="form-label" for="exampleFormControlInput1">Ürün Kodu <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInput1" type="text">
                                                            </div>
                                                            <div class="col-sm-6 mt-3">
                                                                <label class="form-label" for="exampleFormControlInputa">Stock Quantity <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputa" type="number" value="7" min="0">

                                                            </div>

                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                        </svg>Önceki
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Sonraki
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                                                    <div class="meta-body">
                                                        <form>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <div class="row custom-input">
                                                                                <div class="col-12">
                                                                                    <label class="form-label" for="validationServer11">Meta Başlık</label>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <input class="form-control" id="validationServer11" type="text">
                                                                                    <p class="f-light">Yeni bir etiket başlığı ekleyin. Anahtar kelimeler basit ve doğru olmalıdır.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="row custom-input">
                                                                                <div class="col-12">
                                                                                    <label class="form-label" for="validationServer11">Anahtar Kelimeler</label>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <input class="form-control" id="validationServer11" type="text">
                                                                                    <p class="f-light">Anahtar kelimeler basit ve doğru olmalıdır.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <label class="form-label col-12">Açıklama</label>
                                                                                    <div class="toolbar-box">
                                                                                        <div id="toolbar4"><span class="ql-formats">
                                                                                            <select class="ql-size"></select></span><span class="ql-formats">
                                                                                            <button class="ql-bold">Bold </button>
                                                                                            <button class="ql-italic">Italic </button>
                                                                                            <button class="ql-underline">underline</button>
                                                                                            <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                                            <button class="ql-list" value="ordered">List </button>
                                                                                            <button class="ql-list" value="bullet"> </button>
                                                                                            <button class="ql-indent" value="-1"> </button>
                                                                                            <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                                            <button class="ql-link"></button>
                                                                                            <button class="ql-image"></button>
                                                                                            <button class="ql-video"></button></span></div>
                                                                                        <div id="editor4"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                        </svg>Önceki
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Sonraki
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/add-product/select4-custom.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection

