@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/js-datatables/style.css') }}">
@endsection

@section('breadcrumb')
    Blog Yazıları
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Yazıları</h4>
                    </div>

                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Yazı Ekle
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
                                    <th> <span class="f-light f-w-600">Başlık</span></th>
                                    <th> <span class="f-light f-w-600">Durum</span></th>
                                    <th> <span class="f-light f-w-600">İşlem</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($blogs)
                                    @foreach($blogs as $blog)
                                        <tr class="product-removes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-primary" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-names">
                                                    <p>{{$blog->name}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-{{ $blog->status ? 'success' : 'danger' }}">
                                                {{ $blog->status ? 'Aktif' : 'Pasif' }}
                                            </td>
                                            <td>
                                                <div class="product-action">
                                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="delete-button" type="submit" onclick="return confirm('Bu yazıyı silmek istediğinizden emin misiniz?')">
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
