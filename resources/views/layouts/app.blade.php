<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    @include('layouts.partials.init_meta')
    @include('layouts.partials.init_styles')

    @stack('styles')
</head>
<body>

<!--===== Pre-Loading area Start =====-->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!--==== Pre-Loading Area End ====-->


<!-- Header Area Start -->
@include('frontend.header')
<!-- Header Area End -->
<!-- Begin Slider Area One -->


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide swipe1" style="
            background-image:url({{asset('assets/images/godrejbanner.jpg')}});
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            "></div>
        <div class="swiper-slide swipe2" style="
            background-image:url({{asset('assets/images/nextbanner1.jpeg')}});
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            "></div>
        <div class="swiper-slide swipe3" style="
            background-image:url({{asset('assets/images/nextbanner.jpeg')}});
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            "></div>


    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<!-- Slider Area End Here -->
<!-- Banner Area Start Here -->

<!-- Banner Area End Here -->
<!-- New Banner Area Start -->

<div class="about_area container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <h3>About <span class="godrej">Godrej</span></h3>
            <p>
                Established in 1897, the Godrej Group has its roots in India's Independence and Swadeshi movement. Our
                founder, Ardeshir Godrej, lawyer-turned-serial entrepreneur failed with a few ventures, before he struck
                gold with a locks business.

                Today, we enjoy the patronage of 1.1 billion consumers globally across consumer goods, real estate,
                appliances, agriculture and many other businesses. <br><br> In fact, our geographical footprint extends
                beyond Earth, with our engines now powering many of India's space missions.

                With a revenue of over USD 4.1 billion we are growing fast, and have exciting, ambitious aspirations.

                But for us, it is most important that besides our strong financial performance and innovative,
                much-loved products, we remain a good company. Approximately 23 per cent of the promoter holding in the
                Godrej Group is held in trusts that invest in the environment, health and education. <br><br> We are
                also bringing together our passion and purpose to make a difference through our Good & Green strategy of
                'shared value' to create a more inclusive and greener India.

                At the heart of all of this, is our people. We take much pride in fostering an inspiring workplace, with
                an agile and high-performance culture. We are also deeply committed to recognising and valuing diversity
                across our teams.


            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="{{asset('assets/images/maingodrej.jpg')}}">
        </div>
    </div>
</div>

<div class="viewed">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Our Top Products & Services</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme viewed_slider">

                        <!-- Recently Viewed Item -->

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone">
                                    <img src="{{asset('assets/images/top1.jpg')}}">
                                    <div class="toponedetails">
                                        <h4>WF Eon 7010 PASC Silver.</h4>
                                        <p>With our range of Godrej Eon Pasc Silver washing machine not only will your
                                            clothes be rid from visible stains, but will also clear up the germs.</p>
                                        <a href="product.html" class="viewalls">View All</a>
                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone">
                                    <img src="{{asset('assets/images/top2.jpg')}}">
                                    <div class="toponedetails">
                                        <h4>WF Eon 7010 PASC Silver.</h4>
                                        <p>With our range of Godrej Eon Pasc Silver washing machine not only will your
                                            clothes be rid from visible stains, but will also clear up the germs.</p>
                                        <a href="product.html" class="viewalls">View All</a>
                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone">
                                    <img src="{{asset('assets/images/top1.jpg')}}">
                                    <div class="toponedetails">
                                        <h4>WF Eon 7010 PASC Silver.</h4>
                                        <p>With our range of Godrej Eon Pasc Silver washing machine not only will your
                                            clothes be rid from visible stains, but will also clear up the germs.</p>
                                        <a href="product.html" class="viewalls">View All</a>
                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone">
                                    <img src="{{asset('assets/images/top1.jpg')}}">
                                    <div class="toponedetails">
                                        <h4>WF Eon 7010 PASC Silver.</h4>
                                        <p>With our range of Godrej Eon Pasc Silver washing machine not only will your
                                            clothes be rid from visible stains, but will also clear up the germs.</p>
                                        <a href="product.html" class="viewalls">View All</a>
                                    </div>
                                </div>

                            </a>
                        </div>


                        <!-- Recently Viewed Item -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="offerings container-fluid">
    <div class="offerings_tit">
        <h3>Our Offerings</h3>
    </div>

    <div class="offering_secs">
        <div class="rows">
            <div class="firstoffer">
                <img src="assets/images/offer1.jpg">
                <div class="offer_paras">
                    <h3>Home Appliances</h3>
                </div>
                <a href="product.html" class="viewalls">View All</a>
            </div>
            <div class="firstoffer">
                <img src="assets/images/comm.jpeg">
                <div class="offer_paras">
                    <h3>Commercial Appliances</h3>
                </div>
                <a href="product.html" class="viewalls">View All</a>
            </div>
            <div class="firstoffer">
                <img src="assets/images/ven.jpg" class="firstofferimg">
                <div class="offer_paras">
                    <h3>Vending Machine</h3>
                </div>
                <a href="product.html" class="viewalls">View All</a>
            </div>
        </div>
    </div>


</div>

<div class="viewed">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Home Appliances</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme  homesliders">

                        <!-- Recently Viewed Item -->

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/refri.jpg">
                                    <div class="toponedetails">
                                        <h4>Refrigerators.</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/refri.jpg">
                                    <div class="toponedetails">
                                        <h4>Refrigerators.</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/top1.jpg">
                                    <div class="toponedetails">
                                        <h4>Washing Machine.</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/refri.jpg">
                                    <div class="toponedetails">
                                        <h4>Refrigerators.</h4>

                                    </div>
                                </div>

                            </a>
                        </div>


                        <!-- Recently Viewed Item -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="viewed">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Commercial Appliances</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme  homesliders">

                        <!-- Recently Viewed Item -->

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/medref.jpg">
                                    <div class="toponedetails">
                                        <h4>Medical Refrigerators</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/deep.jpg">
                                    <div class="toponedetails">
                                        <h4>Deep Freezers</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/dis.jpg">
                                    <div class="toponedetails">
                                        <h4>Disinfecting Appliances</h4>

                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="owl-item">
                            <a href="category.html">
                                <div class="topone hometopone">
                                    <img src="assets/images/top1.jpg">
                                    <div class="toponedetails">
                                        <h4>Washing Machine</h4>

                                    </div>
                                </div>

                            </a>
                        </div>


                        <!-- Recently Viewed Item -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@include('frontend.footer')
@include('layouts.partials.init_script')

</body>

