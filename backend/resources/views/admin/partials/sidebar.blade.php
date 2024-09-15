<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ url('/admin') }}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo_light.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-toggle-icon') }}"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ url('/admin') }}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo_icon.png') }}" alt="Logo"></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ url('/admin') }}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="Logo" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Panelim</h6>
                        </div>
                    </li>



                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                            </svg><span>Anasayfa</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span>Siteye Git</span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Yönetim</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Kategoriler</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/categories') }}">Kategori Listesi</a></li>
                            <li><a href="{{ url('/admin/category/create') }}">Kategori Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                            </svg><span>Ürünler</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/products') }}">Ürün Listesi</a></li>
                            <li><a href="{{ url('/admin/product/create') }}">Ürün Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-file') }}"></use>
                            </svg><span>Markalar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/brands') }}">Marka Listesi</a></li>
                            <li><a href="{{ url('/admin/brand/create') }}">Marka Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                            </svg><span>Statik Sayfalar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/pages') }}">Sayfa Listesi</a></li>
                            <li><a href="{{ url('/admin/page/create') }}">Sayfa Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                            </svg><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/blogs') }}">Blog Listesi</a></li>
                            <li><a href="{{ url('/admin/blog/create') }}">Blog Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>

                            </svg><span>SSS</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/faqs') }}">SSS Listesi</a></li>
                            <li><a href="{{ url('/admin/faq/create') }}">SSS Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Slider</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/sliders') }}">Slider Listesi</a></li>
                            <li><a href="{{ url('/admin/slider/create') }}">Slider Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Galeri</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/gallery') }}">Galeri Listesi</a></li>
                            <li><a href="{{ url('/admin/gallery/create') }}">Resim Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Referanslar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/admin/references') }}">Referans Listesi</a></li>
                            <li><a href="{{ url('/admin/reference/create') }}">Referans Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>İletişim Mesajları</span></a>

                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Genel Ayarlar</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/settings') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                            </svg><span>Genel Ayarlar</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/users') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                            </svg><span>Kullanıcılar</span></a></li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
