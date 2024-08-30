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
                        <h4>Product Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-xl-5 g-3 gy-5">
                            <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <i class="fa-thin fa-file" style="color: #fff;"></i>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Add Product Details</h5>
                                                <p>Add Product name & details</p>
                                            </div></a></li>
                                    <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <i class="fa-thin fa-file" style="color: #0fffff;"></i>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Product gallery</h5>
                                                <p>thumbnail & Add Product Gallery</p>
                                            </div></a></li>
                                    <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#product-category"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Product Categories</h5>
                                                <p>Add Product category, Status and Tags</p>
                                            </div></a></li>
                                    <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="../assets/svg/icon-sprite.svg#pricing"> </use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h5>Selling prices</h5>
                                                <p>Add Product basic price & Discount</p>
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
                                                <label class="form-label col-12 m-0" for="validationServer01">Product Title <span class="txt-danger"> *</span></label>
                                                <div class="col-12 custom-input">
                                                    <input class="form-control is-invalid" id="validationServer01" type="text" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">A product name is required and recommended to be unique.</div>
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
                                        <button class="ql-video"></button></span></div>
                                                        <div id="editor2"></div>
                                                    </div>
                                                    <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                </div>
                                            </form>
                                            <div class="product-buttons">
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Next
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
                                                <p>Product Image </p>
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
                                                <p>Product Gallery</p>
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
                                                        </svg>Previous
                                                    </div>
                                                </div>
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Next
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
                                                                        <label class="form-label m-0">Add Category</label>
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
                                                                        <p class="f-light">A product can be added to a category</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row g-2 product-tag">
                                                                    <div class="col-12">
                                                                        <label class="form-label d-block m-0">Add Tag</label>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input name="basic-tags" value="watches, sports, clothes, bottles">
                                                                        <p class="f-light">Products can be tagged</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="category-buton"><a class="btn button-primary bg-light-primary font-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal"><i class="me-2 fa fa-plus"> </i>Create New Category </a></div>
                                                                <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="category-pill-modalLabel">Create new category</h4>
                                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body custom-input">
                                                                                <div class="create-category">
                                                                                    <div>
                                                                                        <label class="form-label" for="validationServer05">Category Name <span class="txt-danger"> *</span></label>
                                                                                        <input class="form-control m-0" id="validationServer05" type="text" required="">
                                                                                        <div class="toolbar-box">
                                                                                            <div id="toolbar3"><span class="ql-formats">
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
                                                                                            <div id="editor3"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                                <button class="btn btn-primary" type="button">Add</button>
                                                                            </div>
                                                                        </div>
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
                                                                        <label class="form-label">Publish Status</label>
                                                                        <select class="form-select" id="validationDefault04" required="">
                                                                            <option selected="" value="">Publish</option>
                                                                            <option>Drafts</option>
                                                                            <option>Unpublish</option>
                                                                        </select>
                                                                        <p class="f-light">Choose the status</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label">Publish Date & Time</label>
                                                                        <div class="input-group flatpicker-calender product-date">
                                                                            <input class="form-control" id="datetime-local1" type="date">
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
                                                            </svg>Previous
                                                        </div>
                                                    </div>
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                                        <div class="sidebar-body">
                                            <form class="price-wrapper">
                                                <div class="row g-3 custom-input">
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="initialCost">Initial cost <span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="initialCost" type="number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="sellingPrice">Selling price <span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="sellingPrice" type="number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Choose your currency</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Dollar $</option>
                                                            <option value="1">Euro €</option>
                                                            <option value="2">Rupees ₹</option>
                                                            <option value="3">British pounds £</option>
                                                            <option value="4">Russian Ruble ₽</option>
                                                            <option value="5">Japanese Yen ¥</option>
                                                            <option value="6">Singapore Dollar S$</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="productStock1">Product stocks<span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="productStock1" type="number">
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Types of product discount<i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Choose the kind of discount that will be used on that particular item."></i></label>
                                                        <ul class="radio-wrapper">
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon"><span>Fixed Price</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon4" type="radio" name="radio5" value="option5" checked="">
                                                                <label class="form-check-label" for="radio-icon4"><span>BOGO(Buy one, Get one)</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon5" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon5"><span>Seasonal or holiday discount</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon6" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon6"><span>Percentage-based discount(%)</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon7" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon7"><span>Volume or bulk discount</span></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-buttons">
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                        </div>
                                                    </div>
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow">   </use>
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
                                                <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">Inventory</a></li>
                                                <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">Additional Options</a></li>
                                                <li class="nav-item"><a class="nav-link" id="dropping-option-tab" data-bs-toggle="tab" href="#dropping-option" role="tab" aria-controls="dropping-option" aria-selected="false">Shipping</a></li>
                                            </ul>
                                            <div class="tab-content" id="advance-option-tabContent">
                                                <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                                    <div class="meta-body">
                                                        <form id="advance-tab">
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-sm-6">
                                                                    <label class="form-label">Stock Availability</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected="">In stock</option>
                                                                        <option value="1">Out of stock</option>
                                                                        <option value="2">Pre-order</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="form-label">Low Stock</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected="">Low Stock (5 or less)</option>
                                                                        <option value="1">Low Stock (10 or less)</option>
                                                                        <option value="2">Low Stock (20 or less)</option>
                                                                        <option value="2">Low Stock (25 or less)</option>
                                                                        <option value="2">Low Stock (30 or less)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label" for="exampleFormControlInput1">SKU <span class="txt-danger">*</span></label>
                                                                    <input class="form-control" id="exampleFormControlInput1" type="text">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label" for="exampleFormControlInputa">Stock Quantity <span class="txt-danger">*</span></label>
                                                                    <input class="form-control" id="exampleFormControlInputa" type="number" value="7" min="0">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label" for="exampleFormControlInputb">Restock Date <span class="txt-danger">*</span></label>
                                                                    <input class="form-control" id="exampleFormControlInputb" type="number">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label" for="exampleFormControlInputc">Pre-Order <span class="txt-danger">*</span></label>
                                                                    <input class="form-control" id="exampleFormControlInputc" type="number">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Allow Backorders</label>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="gridCheck" type="checkbox">
                                                                        <label class="form-check-label m-0" for="gridCheck">This is a digital Product</label>
                                                                        <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                        </svg>Previous
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Next
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
                                                                                    <label class="form-label" for="validationServer11">Additional Tag Title</label>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <input class="form-control" id="validationServer11" type="text">
                                                                                    <p class="f-light">Add a new tag title. Keywords should be simple and accurate.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="row product-tag">
                                                                                <label class="form-label col-12">Specific Tags</label>
                                                                                <div class="col-12">
                                                                                    <input name="basic-tags1" value="watches, sports, clothes, bottles">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <label class="form-label col-12">Additional Description</label>
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
                                                                                    <p class="f-light">Enhance your SEO ranking with an added tag description for the product.</p>
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
                                                                        </svg>Previous
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                                                    <div class="meta-body">
                                                        <form>
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-12">
                                                                    <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlInput1">Where can I pick up my order?</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputZip" type="number" placeholder="Zip code (10001)">
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCity" type="text" placeholder="City">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <select class="form-select" id="inputState2">
                                                                                <option selected="">State</option>
                                                                                <option>Gujarat</option>
                                                                                <option>Punjab</option>
                                                                                <option>Himachal pradesh</option>
                                                                                <option>Goa </option>
                                                                                <option>Sikkim </option>
                                                                                <option>Telangana</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlInput1">Weight (kg)</label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper weight for product items."></i>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <input class="form-control" id="inputCity2" type="number">
                                                                            <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlInput1">Dimensions </label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper length/width and height for product items."></i>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCity3" type="number" placeholder="Length[l]">
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCity4" type="number" placeholder="Width[w]">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input class="form-control" id="inputCity5" type="number" placeholder="Height[h]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlInput1">Shipping Class</label>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <select class="form-select" id="inputState">
                                                                                <option selected="">Basic Shipping</option>
                                                                                <option>Expedited Shipping</option>
                                                                                <option>International Shipping</option>
                                                                                <option>Free Shipping</option>
                                                                                <option>Same-Day or Next-Day Shipping</option>
                                                                                <option>Flat Rate Shipping</option>
                                                                                <option>Local Pickup</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                        </svg>Previous
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Submit
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
