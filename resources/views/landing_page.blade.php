@extends('layouts.app')
@section('content')

<!-- Preloader -->
<div id="preloader">
    <div class="dorne-load"></div>
</div>
<!-- ***** Header Area Start ***** -->
@include('layouts.navbar')
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url('<?php echo asset('temp/img/bg-img/hero-1.jpg'); ?>')">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-12">
                <div class="hero-content">
                    <h2>Let us take you there</h2>
                    <h4>Discover your next adventure with us</h4>
                </div>
                @include('landing_page.search_flight')
            </div>
        </div>
    </div>
    <!-- Hero Social Btn -->
    <!-- <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <h6>Follow us on Social Media</h6>
            <span></span>
        </div>
        <div class="social-btns">
            <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
        </div>
    </div> -->
</section>
<!-- <section>
    <div id="search-results">
    </div>
</section> -->
<!-- ***** Welcome Area End ***** -->

<!-- ***** Catagory Area Start ***** -->
<!-- <section class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-catagories">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                <div class="catagory-content">
                                    <img src="{{asset('temp/img/core-img/icon-1.png')}}" alt="">
                                    <a href="#">
                                        <h6>Hotels</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <img src="{{asset('temp/img/core-img/icon-2.png')}}" alt="">
                                    <a href="#">
                                        <h6>Restaurants</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <img src="{{asset('temp/img/core-img/icon-3.png')}}" alt="">
                                    <a href="#">
                                        <h6>Shopping</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                    <img src="{{asset('temp/img/core-img/icon-4.png')}}" alt="">
                                    <a href="#">
                                        <h6>Beauty &amp; Spa</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                <div class="catagory-content">
                                    <img src="{{asset('temp/img/core-img/icon-5.png')}}" alt="">
                                    <a href="#">
                                        <h6>Cinema</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Catagory Area End ***** -->

<!-- ***** About Area Start ***** -->
<section class="dorne-about-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center" id="search-results">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->

<!-- ***** Editor Pick Area Start ***** -->
<!-- <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Cities you must see</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset('temp/img/bg-img/editor-1.jpg')}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">New York</a>
                            <a href="#">1643 Destinations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                    <img src="{{asset('temp/img/bg-img/editor-2.jpg')}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">Barcelona</a>
                            <a href="#">943 Destinations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{asset('temp/img/bg-img/editor-3.jpg')}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">paris</a>
                            <a href="#">243 Destinations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Editor Pick Area End ***** -->

<!-- ***** Features Destinations Area Start ***** -->
<!-- <section class="dorne-features-destinations-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Featured destinations</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-1.jpg')}}" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Ibiza</h5>
                                <p>Party</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-2.jpg')}}" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Paris</h5>
                                <p>Luxury</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-3.jpg')}}" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Lake Como</h5>
                                <p>Spectacular</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-4.jpg')}}" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Greece</h5>
                                <p>Sunny</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-5.jpg')}}" alt="">
                        
                        <div class="price-start">
                            <p>FROM $59/night</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Norway</h5>
                                <p>All Year round</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Destinations Area End ***** -->

<!-- ***** Features Restaurant Area Start ***** -->
<!-- <section class="dorne-features-restaurant-area bg-default">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Featured Restaurants</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-6.jpg')}}" alt="">
                        
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.5</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Martha’s bar</h5>
                                <p>Manhathan</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-7.jpg')}}" alt="">
                        
                        <div class="ratings-map-area d-flex">
                            <a href="#">9.5</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Delux Restaurant</h5>
                                <p>Paris</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-8.jpg')}}" alt="">
                        
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.2</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Jim’s corner Pub</h5>
                                <p>Madrid</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-9.jpg')}}" alt="">
                        
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.7</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>tower Risto bar</h5>
                                <p>Sydney</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-features-area">
                        <img src="{{asset('temp/img/bg-img/feature-10.jpg')}}" alt="">
                        
                        <div class="ratings-map-area d-flex">
                            <a href="#">9.8</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Pizzeria venezia</h5>
                                <p>Hong Kong</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Restaurant Area End ***** -->

<!-- ***** Features Events Area Start ***** -->
<!-- <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Featured events</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-1.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Jazz Concert</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-2.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>DeeJay in the house</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-3.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Theatre Night outside</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-4.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Wine tasting</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-5.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>New Moon Party</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                    <div class="feature-events-thumb">
                        <img src="{{asset('temp/img/bg-img/event-6.jpg')}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset('temp/img/core-img/map.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Happy hour at pub</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Events Area End ***** -->

<!-- ***** Clients Area Start ***** -->
<!-- <div class="dorne-clients-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients-logo d-md-flex align-items-center justify-content-around">
                    <img src="{{asset('temp/img/clients-img/1.png')}}" alt="">
                    <img src="{{asset('temp/img/clients-img/2.png')}}" alt="">
                    <img src="{{asset('temp/img/clients-img/3.png')}}" alt="">
                    <img src="{{asset('temp/img/clients-img/4.png')}}" alt="">
                    <img src="{{asset('temp/img/clients-img/5.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- ***** Clients Area End ***** -->

<!-- ****** Footer Area Start ****** -->

<footer class="dorne-footer-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-md-flex align-items-center justify-content-between">
                <div class="footer-text">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | FairTravels
                        <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="footer-social-btns">
                    <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ****** Footer Area End ****** -->

@endsection