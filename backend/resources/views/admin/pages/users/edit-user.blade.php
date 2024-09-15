@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kullanıcı Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="mb-3 col-sm-6">
                                        <label for="name">Kullanıcı Adı:</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Kullanıcı Adı" value="{{ old('name', $user->name) }}" required="">
                                        @error('name')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="email">Email:</label>
                                        <input class="form-control @error('link') is-invalid @enderror" id="email" name="email" type="email" placeholder="Email" value="{{ old('email', $user->email) }}" required="">
                                        @error('link')
                                        <div class="valid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="password">Şifre(değiştirmeyeceksiniz boş bırakın):</label>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Şifre" value="" >
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label>Kullanıcı Rolü</label>
                                        <select class="form-select" name="role" id="role" >
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Personel</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3 btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Güncelle</button>
                                <input class="btn btn-light" type="reset" value="Vazgeç">
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
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>

@endsection
