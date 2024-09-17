@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/js-datatables/style.css') }}">
@endsection

@section('breadcrumb')
    Markalar
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Markalar</h4>
                    </div>

                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.brands.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Marka Ekle
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
                                    <th> <span class="f-light f-w-600">Logo</span></th>
                                    <th> <span class="f-light f-w-600">Durum</span></th>
                                    <th> <span class="f-light f-w-600">İşlem</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brands)
                                    @foreach($brands as $brand)
                                        <tr class="product-removes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-primary" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid" src="{{ asset('storage/brands' . $brand->cover_image) }}" alt="{{ $brand->name }}"></div>
                                                    <p>{{ $brand->name }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-{{ $brand->status ? 'success' : 'danger' }}">
                                                {{ $brand->status ? 'Aktif' : 'Pasif' }}
                                        </span>
                                            </td>
                                            <td>
                                                <div class="product-action">
                                                    <a href="{{ route('admin.brands.edit', $brand->id) }}">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="delete-button" type="submit">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

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
