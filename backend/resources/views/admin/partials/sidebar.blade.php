<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo_light.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="../assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
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



                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin') }}">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg><span>Anasayfa</span></a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin') }}">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
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
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Kategoriler</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/categories') }}">Kategori Listesi</a></li>
                            <li><a href="{{ url('/add-category') }}">Kategori Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Ürünler</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/products') }}">Ürün Listesi</a></li>
                            <li><a href="{{ url('/add-product') }}">Ürün Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Markalar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/brands') }}">Marka Listesi</a></li>
                            <li><a href="{{ url('/add-brand') }}">Marka Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Statik Sayfalar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="job-cards-view.html">Sayfa Listesi</a></li>
                            <li><a href="job-list-view.html">Sayfa Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/blogs') }}">Blog Listesi</a></li>
                            <li><a href="{{ url('/add-blog') }}">Blog Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>SSS</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/faqs') }}">SSS Listesi</a></li>
                            <li><a href="{{ url('/add-faq') }}">SSS Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Slider</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/sliders') }}">Slider Listesi</a></li>
                            <li><a href="{{ url('/add-slider') }}">Slider Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Galeri</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('/gallery-list') }}">Galeri Listesi</a></li>
                            <li><a href="{{ url('/add-image') }}">Resim Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>Referanslar</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="job-cards-view.html">Referans Listesi</a></li>
                            <li><a href="job-list-view.html">Referans Ekle</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                            </svg><span>İletişim Mesajları</span></a>

                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Genel Ayarlar</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg><span>Genel Ayarlar</span></a></li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg><span>Kullanıcılar</span></a></li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
