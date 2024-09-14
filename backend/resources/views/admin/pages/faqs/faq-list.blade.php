@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')

@section('breadcrumb')
    SSS Ekle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="faq-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-faq">
                        <h4 class="mb-0">Sıkça Sorulan Sorular</h4>
                    </div>
                    <div class="row default-according style-1 faq-accordion" id="accordionoc">
                        <div class="col-lg-12 col-lg-6 col-md-7">
                            @if($faqs)
                                @foreach($faqs as $faq)
                                    @php
                                        $collapseId = 'collapseicon' . $faq->id;
                                    @endphp
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center px-2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="false" aria-controls="{{ $collapseId }}">
                                                    <i data-feather="help-circle"></i>
                                                    {{ $faq->question }}
                                                </button>
                                            </h5>
                                            <div class="product-action">
                                                <a href="{{ route('admin.faqs.edit', $faq->id) }}">
                                                    <svg>
                                                        <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="delete-button" type="submit" onclick="return confirm('Bu soruyu silmek istediğinizden emin misiniz?')">
                                                        <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="collapse" id="{{ $collapseId }}" aria-labelledby="{{ $collapseId }}" data-bs-parent="#accordionoc">
                                            <div class="card-body">
                                                {!! $faq->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


