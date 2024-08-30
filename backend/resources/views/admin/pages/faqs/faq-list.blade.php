@extends('admin.layouts.app')

@section('title', 'Yönetim Paneli')


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
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="false" aria-controls="collapseicon"><i data-feather="help-circle"></i> Integrating WordPress with Your Website?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordionoc">
                                    <div class="card-body">How you approach this process will depend on which web host you use. For example, a lot of hosting providers use cPanel, which includes an option to set up subdomains with just a few clicks.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i> WordPress Site Maintenance ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
                                    <div class="card-body">We’ve just published a detailed on how to backup your WordPress website, however, if you’re in a hurry, here’s a quick solution.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Meta Tags in WordPress ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
                                    <div class="card-body">Manually adding meta tags in WordPress is relatively simple. For this demo, we’ll use the example from the WordPress Codex. Imagine you’re Harriet Smith, a veterinarian who blogs about their animal stories on WordPress.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>   WordPress in Your Language ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
                                    <div class="card-body">As of version 4.0, you can have WordPress automatically install the language of your choice during the installation process.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


