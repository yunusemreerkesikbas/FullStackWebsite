<div class="page-header row">
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Yönetim Paneli</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Admin</li>
                <li class="breadcrumb-item f-w-400 active">@yield('breadcrumb')</li>
            </ol>
        </nav>
    </div>
    <div class="header-wrapper col m-0">
        <div class="row">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="{{ url('/admin') }}">
                        <img class="img-fluid" src="{{ asset('images/logo/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <svg class="stroke-icon sidebar-toggle status_toggle middle">
                        <use href="../../assets/svg/icon-sprite.svg#toggle-icon"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li>                         <span class="header-search">
                    <svg>
                      <use href="../../assets/svg/icon-sprite.svg#search"></use>
                    </svg></span></li>
                    <li>
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative d-flex align-items-center">
                                    <svg class="search-bg svg-color">
                                        <use href="../../assets/svg/icon-sprite.svg#search"></use>
                                    </svg>
                                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mode">
                            <svg>
                                <use href="../../assets/svg/icon-sprite.svg#moon"></use>
                            </svg>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown px-0 py-0">
                        <div class="d-flex profile-media align-items-center"><img class="img-30" src="../../assets/images/dashboard/profile.png" alt="">
                            <div class="flex-grow-1"><span>Alen Miller</span>
                                <p class="mb-0 font-outfit">UI Designer<i class="fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="{{ url('/admin/settings') }}"><i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a href="{{ url('/admin/logout') }}"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
