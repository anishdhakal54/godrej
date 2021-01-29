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
            <h3>About <span class="godrej">{{getConfiguration('site_title')}}</span></h3>
            <p>
               {{getConfiguration('who_we_are')}}


            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="{{ url('storage') . '/' . getConfiguration('about_image') }}">
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

