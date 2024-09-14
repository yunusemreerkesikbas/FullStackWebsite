@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('breadcrumb')
    SSS Ekle
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Soru Ekle</h4>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation add-faq" novalidate="" action="{{route('admin.faqs.update', $faq->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="question">Soru</label>
                                    <input class="form-control @error('question') is-invalid @enderror" id="question" name="question" type="text" placeholder="Soru Ekle" value="{{old('question', $faq->question)}}" required="">
                                    @error('question')
                                    <div class="valid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label class="w-100">Açıklama:</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar8"><span class="ql-formats">
                                    <select class="ql-size">
                                      <option value="small">Small</option>
                                      <option selected="">Normal</option>
                                      <option value="large">Large</option>
                                      <option value="huge">Huge</option>
                                    </select></span><span class="ql-formats">
                                    <button class="ql-bold">Bold</button>
                                    <button class="ql-italic">Italic</button>
                                    <button class="ql-underline">Underline</button>
                                    <button class="ql-strike">Strike</button>
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button></span><span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button></span><span class="ql-formats">
                                    <button class="ql-list" value="ordered">List</button>
                                    <button class="ql-list" value="bullet">Bullet</button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                    <button class="ql-link">Link</button>
                                    <button class="ql-image">Image</button>
                                    <button class="ql-video">Video</button>
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select></span>
                                                    <!-- Add more options here--><span class="ql-formats">
                                    <button class="ql-blockquote">Blockquote</button>
                                    <button class="ql-code-block"></button></span><span class="ql-formats">
                                    <button class="ql-align" value=""></button>
                                    <button class="ql-align" value="center"></button>
                                    <button class="ql-align" value="right"></button>
                                    <button class="ql-align" value="justify"></button></span><span class="ql-formats">
                                    <button class="ql-clean"></button></span>
                                                </div>
                                                <div id="editor8"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="answer" id="answer" value="{{ old('answer', $faq->answer) }}>
                                </div>

                            </div>

                            <div class="btn-showcase text-end">
                                <button class="btn btn-primary" type="submit">Ekle</button>
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
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script>

        var quillEditor = new Quill("#editor8", {
            modules: { toolbar: "#toolbar8" },
            theme: "snow",
            placeholder: "Açıklama Ekle...",
        });

        var existingDescription = document.querySelector('input[name=answer]').value;
        quillEditor.root.innerHTML = existingDescription;

        document.querySelector('.add-faq').addEventListener('submit', function () {
            var quillContent = quillEditor.root.innerHTML;
            document.querySelector('input[name=answer]').value = quillContent;
        });
    </script>
@endsection
