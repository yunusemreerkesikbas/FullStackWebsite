@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kullanıcılar</h4>
                    </div>

                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Kullanıcı Ekle
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
                                    <th> <span class="f-light f-w-600">Kullanıcı Adı</span></th>
                                    <th> <span class="f-light f-w-600">Email</span></th>
                                    <th> <span class="f-light f-w-600">Kullanıcı Rolü</span></th>
                                    <th> <span class="f-light f-w-600">İşlem</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users)
                                    @foreach($users as $user)
                                        <tr class="product-removes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-primary" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-names">
                                                    <p>{{ $user->name }}</p>
                                                </div>
                                            </td>
                                            <td> <span class="">{{ $user->email }}</span></td>
                                            <td> <span class="badge badge-light-primary">{{ $user->role }}</span></td>
                                            <td>
                                                <div class="product-action">
                                                    <a href="{{ route('admin.users.edit', $user->id) }}">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
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
    <script src="{{ asset('assets/js/custom-list-product.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
@endsection
