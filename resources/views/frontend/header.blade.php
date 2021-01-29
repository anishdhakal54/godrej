<header class="main-header-area header-2">
    <!-- Main Header Area Start -->
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-sm-6">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="img-full"
                                         src="{{ url('storage') . '/' . getConfiguration('site_logo') }}"
                                         alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 position-static d-none d-xl-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul class="nav">

                                    @foreach($menuList as $menu)
                                        <li>
                                            <a href="{{ $menu['link'] }}">
                                                <span class="menu-text"> {{ $menu['label'] }}
                                                    @if(!empty($menu['child']))</span>
                                                <i class="lastudioicon-down-arrow"></i>
                                                @endif
                                            </a>
                                            @include('frontend.partials.menu', ['menu' => $menu])
                                        </li>
                                    @endforeach


                                    {{--                                    <li>--}}
                                    {{--                                        <a href="#">--}}
                                    {{--                                            <span class="menu-text"> All Categories</span>--}}
                                    {{--                                            <i class="lastudioicon-down-arrow"></i>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="mgana-dropdown dropdown-hover">--}}
                                    {{--                                            <li><a href="shop-collection-1.html">Aerospace and Defense</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Chemicals</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Financial Services</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Foods and Agriculture</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Furniture, Furnishing and Fittings</a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">General Engineering</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Heavy Engineering</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Home and Personal Care</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Information Technology</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Intra-Logistics</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Locks and Security</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Solutions</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Power and Energy</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Real Estate</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="shop-fullwidth.html">--}}
                                    {{--                                            <span class="menu-text">Know About Us</span>--}}
                                    {{--                                            <i class="lastudioicon-down-arrow"></i>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="mgana-dropdown dropdown-hover">--}}

                                    {{--                                            <li><a href="about.html">About Us</a></li>--}}
                                    {{--                                            <li><a href="blog-left-sidebar.html">Home</a></li>--}}
                                    {{--                                            <li><a href="blog-details-fullwidth.html">Home</a></li>--}}
                                    {{--                                            <li><a href="blog-single-post.html">Home</a></li>--}}

                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="#">--}}
                                    {{--                                            <span class="menu-text"> Careers</span>--}}
                                    {{--                                            <i class="lastudioicon-down-arrow"></i>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="mgana-dropdown dropdown-hover">--}}
                                    {{--                                            <li><a href="shop-collection-1.html">Home One</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Home Two</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}

                                    {{--                                    <li>--}}
                                    {{--                                        <a href="contact.html">--}}
                                    {{--                                            <span class="menu-text">Our Blogs</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="contact.html">--}}
                                    {{--                                            <span class="menu-text">Our Portfolio</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="gone">--}}
                                    {{--                                        <a href="contact.html">--}}
                                    {{--                                            <span class="menu-text">Contact Us</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    @if (Auth::check())
                                        <li class="gone">
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            ><i class="fa fa-icon-dashboard"></i>Logout</a
                                            >
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </li>

                                    @else
                                        <li class="gone">
                                            <a href="{{ route('login') }}">
                                                <span class="menu-text">{{ __('Login') }}</span>
                                            </a>
                                        </li>
                                        <li class="gone">
                                            <a href="{{ route('register') }}">
                                                <span class="menu-text">{{ __('Register') }}</span>
                                            </a>
                                        </li>
                                    @endif


                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="header-right-area">
                                <ul>
                                    <li>
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="lastudioicon-zoom-1"></i>
                                        </a>
                                    </li>

                                    <li class="mobile-menu_wrap d-inline-block d-xl-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                            <i class="lastudioicon-menu-4-1"></i>
                                        </a>
                                    </li>
                                    <!-- <li class="menu-wrap">
                                        <a href="#offcanvasMenu" class="menu-btn toolbar-btn d-none d-xl-block">
                                            <div class="minicart-count_area">
                                                <i class="lastudioicon-menu-4-1"></i>
                                            </div>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
    <!-- Sticky Header Start Here-->
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-sm-6">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="img-full"
                                         src="{{ url('storage') . '/' . getConfiguration('site_logo') }}"
                                         alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 position-static d-none d-xl-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul class="nav">
                                    <li>
                                        <a href="index.html">
                                            <span class="menu-text"> All Categories</span>
                                            <i class="lastudioicon-down-arrow"></i>
                                        </a>
                                        <ul class="mgana-dropdown dropdown-hover">
                                            <li><a href="shop-collection-1.html">Aerospace and Defense</a></li>
                                            <li><a href="shop-collection-2.html">Chemicals</a></li>
                                            <li><a href="shop-collection-2.html">Financial Services</a></li>
                                            <li><a href="shop-collection-2.html">Foods and Agriculture</a></li>
                                            <li><a href="shop-collection-2.html">Furniture, Furnishing and Fittings</a>
                                            </li>
                                            <li><a href="shop-collection-2.html">General Engineering</a></li>
                                            <li><a href="shop-collection-2.html">Heavy Engineering</a></li>
                                            <li><a href="shop-collection-2.html">Home and Personal Care</a></li>
                                            <li><a href="shop-collection-2.html">Information Technology</a></li>
                                            <li><a href="shop-collection-2.html">Intra-Logistics</a></li>
                                            <li><a href="shop-collection-2.html">Locks and Security</a></li>
                                            <li><a href="shop-collection-2.html">Solutions</a></li>
                                            <li><a href="shop-collection-2.html">Power and Energy</a></li>
                                            <li><a href="shop-collection-2.html">Real Estate</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth.html">
                                            <span class="menu-text">Know About Us</span>
                                            <i class="lastudioicon-down-arrow"></i>
                                        </a>
                                        <ul class="mgana-dropdown dropdown-hover">
                                            <li><a href="shop-collection-1.html">Aerospace and Defense</a></li>
                                            <li><a href="shop-collection-2.html">Chemicals</a></li>
                                            <li><a href="shop-collection-2.html">Financial Services</a></li>
                                            <li><a href="shop-collection-2.html">Foods and Agriculture</a></li>
                                            <li><a href="shop-collection-2.html">Furniture, Furnishing and Fittings</a>
                                            </li>
                                            <li><a href="shop-collection-2.html">General Engineering</a></li>
                                            <li><a href="shop-collection-2.html">Heavy Engineering</a></li>
                                            <li><a href="shop-collection-2.html">Home and Personal Care</a></li>
                                            <li><a href="shop-collection-2.html">Information Technology</a></li>
                                            <li><a href="shop-collection-2.html">Intra-Logistics</a></li>
                                            <li><a href="shop-collection-2.html">Locks and Security</a></li>
                                            <li><a href="shop-collection-2.html">Solutions</a></li>
                                            <li><a href="shop-collection-2.html">Power and Energy</a></li>
                                            <li><a href="shop-collection-2.html">Real Estate</a></li>
                                        </ul>
                                    </li>
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="blog-details-fullwidth.html">--}}
                                    {{--                                            <span class="menu-text"> Brighter Living</span>--}}
                                    {{--                                            <i class="lastudioicon-down-arrow"></i>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="mgana-dropdown dropdown-hover">--}}
                                    {{--                                            <li><a href="shop-collection-1.html">Aerospace and Defense</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Chemicals</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Financial Services</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Foods and Agriculture</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Furniture, Furnishing and Fittings</a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">General Engineering</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Heavy Engineering</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Home and Personal Care</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Information Technology</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Intra-Logistics</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Locks and Security</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Solutions</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Power and Energy</a></li>--}}
                                    {{--                                            <li><a href="shop-collection-2.html">Real Estate</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    <li>
                                        <a href="#">
                                            <span class="menu-text"> Careers</span>
                                            <i class="lastudioicon-down-arrow"></i>
                                        </a>
                                        <ul class="mgana-dropdown dropdown-hover">
                                            <li><a href="shop-collection-1.html"> One</a></li>
                                            <li><a href="shop-collection-2.html"> Two</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="contact.html">
                                            <span class="menu-text">Our Blogs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="menu-text">Our Portfolio</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="menu-text">Contact Us</span>
                                        </a>
                                    </li>
                                    @if (Auth::check())
                                        <li class="gone">
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            ><i class="fa fa-icon-dashboard"></i>Logout</a
                                            >
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </li>

                                    @else
                                        <li class="gone">
                                            <a href="{{ route('login') }}">
                                                <span class="menu-text">{{ __('Login') }}</span>
                                            </a>
                                        </li>
                                        <li class="gone">
                                            <a href="{{ route('register') }}">
                                                <span class="menu-text">{{ __('Register') }}</span>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="header-right-area">
                                <ul>
                                    <li>
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="lastudioicon-zoom-1"></i>
                                        </a>
                                    </li>

                                    <li class="mobile-menu_wrap d-inline-block d-xl-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                            <i class="lastudioicon-menu-4-1"></i>
                                        </a>
                                    </li>
                                    <li class="menu-wrap">
                                        <a href="#offcanvasMenu" class="menu-btn toolbar-btn d-none d-xl-block">
                                            <div class="minicart-count_area">
                                                <i class="lastudioicon-menu-4-1"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky Header End Here -->
    <!-- Off-Canvas Search Start -->
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="offcanvas-menu-inner">
            <div class="container h-100">
                <a href="#" class="btn-close"><i class="lastudioicon-e-remove"></i></a>
                <!-- Begin Offcanvas Search Area -->
                <div class="offcanvas-search">
                    <span class="searchbox-info">Start typing and press Enter to search</span>
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search">
                        <button class="search_btn" type="submit"><i class="lastudioicon-zoom-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas Search Area End Here -->
    <!-- Offcanvas Minicar Start -->

    <!-- Offcanvas Menu End -->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close-2"><i class="lastudioicon-e-remove"></i></a>
            <nav class="offcanvas-navigation">
                <ul class="mobile-menu">
                    <li class="menu-item-has-children active"><a href="#"><span
                                class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span></a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home1 <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                    <li><a href="index-5.html">Home 05</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Furniture <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="index-6.html">Home 01</a></li>
                                    <li><a href="index-7.html">Home 02</a></li>
                                    <li><a href="index-8.html">Home 03</a></li>
                                    <li><a href="index-9.html">Home 04</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Others<i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="index-10.html">Home</a></li>
                                    <li><a href="index-11.html">Home</a></li>
                                    <li><a href="index-12.html">Home</a></li>
                                    <li><a href="index-13.html">Home</a></li>
                                    <li><a href="index-14.html">Home</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home<i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="shop-fullwidth.html">Home</a></li>
                                    <li><a href="shop-3-columns.html">Home</a></li>
                                    <li><a href="shop-4-columns.html">Home</a></li>
                                    <li><a href="shop-grid-left-sidebar.html">Home</a></li>
                                    <li><a href="shop-grid-right-sidebar.html">Home</a></li>
                                    <li><a href="shop-list.html">Home</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Home</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Home</a></li>
                                    <li><a href="shop-masonry.html">Home</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Home</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home<i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Home</a></li>
                                    <li><a href="checkout.html">Home</a></li>
                                    <li><a href="wishlist.html">Home</a></li>
                                    <li><a href="compare.html">Home</a></li>
                                    <li><a href="coming-soon.html">Home</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home<i class="lastudioicon-down-arrow"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="blog-2-column.html">Home</a></li>
                                    <li><a href="blog-3-column.html">Home</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-right-sidebar.html">Home</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Home <i class="lastudioicon-down-arrow"></i></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="shop-collection-1.html">Home</a></li>
                            <li><a href="shop-collection-2.html">Home</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Pages <i class="lastudioicon-down-arrow"></i></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- Mobile Menu End -->
    <div class="global-overlay"></div>
</header>
