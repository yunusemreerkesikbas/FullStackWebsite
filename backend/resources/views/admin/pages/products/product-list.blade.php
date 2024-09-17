@extends('admin.layouts.app')

@section('title', 'Kategoriler - Yönetim Paneli')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/js-datatables/style.css') }}">
@endsection

@section('breadcrumb')
    Ürünler
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ürünler</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.products.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Ürün Ekle
                                </a>
                            </div>
                        </div>
                        <div class="list-product list-category">
                            <table class="table table-striped" id="project-status">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input checkbox-primary" type="checkbox">
                                        </div>
                                    </th>
                                    <th>Ürün</th>
                                    <th>Açıklama</th>
                                    <th>Kategori</th>
                                    <th>Durum</th>
                                    <th>İşlem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="product-removes">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-names">
                                                <div class="light-product-box">
                                                    <img class="img-fluid" src="{{ $product->cover_image != null ? asset('storage/' . $product->cover_image) : asset('assets/images/no_image.png') }}" alt="{{ $product->name }}">
                                                </div>
                                                <p>{{ $product->name }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="f-light">{!! $product->description !!}</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">{{ $product->parent ? $product->parent->name : 'Yok' }}</span>
                                        </td>
                                        <td>
                                        <span class="badge badge-light-{{ $product->status ? 'success' : 'danger' }}">
                                            {{ $product->status ? 'Aktif' : 'Pasif' }}
                                        </span>
                                        </td>
                                        <td>
                                            <div class="product-action">
                                                <a href="{{ route('admin.products.edit', $product->id) }}">
                                                    <svg>
                                                        <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-button">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                                        </svg>
                                                    </button>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/js-datatables/simple-datatables@latest.js') }}"></script>
    <script src="{{ asset('assets/js/custom-list-product.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
@endsection
