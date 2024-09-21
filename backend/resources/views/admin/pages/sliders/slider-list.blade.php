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
                        <h4>Slider</h4>
                    </div>

                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.sliders.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Slider Ekle
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
                                    <th> <span class="f-light f-w-600">Görsel</span></th>
                                    <th> <span class="f-light f-w-600">Durum</span></th>
                                    <th> <span class="f-light f-w-600">İşlem</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($sliders)
                                    @foreach($sliders as $slider)
                                        <tr class="product-removes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-primary" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid" src="{{ $slider->cover_image != null ? asset('storage/' . $slider->cover_image) : asset('assets/images/no_image.png') }}" alt="{{ $slider->title }}"></div>
                                                    <p>{{ $slider->title }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-{{ $slider->status ? 'success' : 'danger' }}">
                                                {{ $slider->status ? 'Aktif' : 'Pasif' }}
                                            </td>
                                            <td>
                                                <div class="product-action">
                                                    <a href="{{ route('admin.sliders.edit', $slider->id) }}">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST">
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
