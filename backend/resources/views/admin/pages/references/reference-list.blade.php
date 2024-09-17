@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/js-datatables/style.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Referanslar</h4>
                    </div>

                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.references.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Referans Ekle
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
                                    <th> <span class="f-light f-w-600">Marka</span></th>
                                    <th> <span class="f-light f-w-600">Link</span></th>
                                    <th> <span class="f-light f-w-600">İşlem</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($references)
                                    @foreach($references as $reference)
                                        <tr class="product-removes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-primary" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid" src="{{ asset('storage/' . $reference->cover_image) }}" alt="{{ $reference->name }}"></div>
                                                    <p>{{ $reference->name }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p>{{ $reference->link }}</p>
                                            </td>
                                            <td>
                                                <div class="product-action">
                                                    <a href="{{ route('admin.references.edit', $reference->id) }}">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.references.destroy', $reference->id) }}" method="POST">
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
