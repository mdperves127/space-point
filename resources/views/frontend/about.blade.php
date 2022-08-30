@extends('layouts.frontend_app')
@section('about')
    active
@endsection
@section('frontend_content')


    <!-- about-banner start -->
    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="about-banner-heading">About Us</h2>
                </div>
                <div class="col-lg-6">
                    <div class="img-part">
                        <img src="{{ asset('frontend_asset') }}/images/about-banner.png" alt="about-banner.png">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-part">
                        <h2 class="section-title">About our company info.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea</p>
                        <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <h6> <a href="#" class="sell-btn">Read More</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-banner ends -->

    <!-- map start -->
    <section id="map">
        <div class="map-box">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.723204850687!2d103.83637461475395!3d1.3424587990208872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1746d15775d9%3A0xf784d8a2fc2bbe2a!2s832%20Thomson%20Rd%2C%20Singapore%20574248!5e0!3m2!1sen!2sbd!4v1660992026173!5m2!1sen!2sbd"
                width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="text-box">
                <div class="row box-one">
                    <div class="col-lg-3">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon1.png" alt="c-icon1.png">
                    </div>
                    <div class="col-lg-9">
                        <p>832, Thompson Drive,
                            San Fransisco CA 9410 7,US </p>
                    </div>
                </div>
                <div class="row box-two">
                    <div class="col-lg-3">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon2.png" alt="c-icon2.png">
                    </div>
                    <div class="col-lg-9">

                        <ul>
                            <li><a href="#">
                                    <p>+123 345123 556</p>
                                </a></li>
                            <li><a href="#">
                                    <p>+123 345123 556</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row box-three">
                    <div class="col-lg-3">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon3.png" alt="c-icon3.png">
                    </div>
                    <div class="col-lg-9">

                        <ul>
                            <li><a href="#">
                                    <p>support@bookland.id</p>
                                </a></li>
                            <li><a href="#">
                                    <p>info@bookland.id</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map ends -->
@endsection