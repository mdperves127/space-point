@extends('layouts.frontend_app')
@section('car')
active
@endsection
@section('frontend_content')

<!-- car-details start -->
<section id="car-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="car-details-heading">Car Details</h2>
            </div>
            <div class="col-lg-8">
                <div class="img-part">
                    <div class="big-image">
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars-2.jpg" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars-2.jpg" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>


                    </div>
                    <div class="small-images">
                        <div class="item"> <img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars-2.jpg" alt="cars.png"></div>
                        <div class="item"> <img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>
                        <div class="item"><img src="{{ asset('frontend_asset') }}/images/cars-2.jpg" alt="cars.png"></div>
                        <div class="item"> <img src="{{ asset('frontend_asset') }}/images/cars.png" alt="cars.png"></div>
                    </div>
                    <i class="fa-solid fa-arrow-left left"></i>
                    <i class="fa-solid fa-arrow-right right"></i>
                </div>

                <div class="content-part">
                    <h2 class="heading">
                        Ford Exploer (2018)
                    </h2>
                    <h4 class="section-heading">Description</h4>
                    <p class="description">Tempus viverra orci in felis arcu lacus. Faucibus feugiat tempus, sed
                        aliquam mauris. Cursus donec vitae pellentesque nisl aliquet sed vel nascetur quam. Lacus,
                        sit dolor donec netus id tellus. Nisi, ullamcorper mauris arcu aliquam. In in blandit in in
                        sapien vivamus. Est est diam eget tortor. Amet, lacinia lectus vitae tristique. Platea mi
                        viverra elementum sapien at ullamcorper risus nulla. Ultrices lacus a, pharetra phasellus a
                        ipsum sit orci enim. Interdum quam ullamcorper vivamus nulla vitae nulla. Arcu in et auctor
                        diam volutpat, posuere. Tincidunt volutpat ut nulla egestas. Nec et mauris consequat lectus
                        libero viverra aliquet ullamcorper. Amet at quis velit ornare tristique vestibulum id
                        dictum. Sagittis porta malesuada urna odio eu orci vestibulum, in. Facilisi malesuada lacus
                        nulla pellentesque vitae nisl. Praesent mattis nisl leo nam leo viverra commodo. Sed sit
                        ultricies placerat amet mauris. Sit gravida id aliquam nunc.</p>
                    <a href="#" class="read-more-btn">Read More <i class="fa-solid fa-arrow-right"></i> </a>
                    <div class="features-part">
                        <h4 class="features-title">Features</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="row short-features">
                                    <div class="col-lg-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <p>Have a deep understanding of typography, color theory, photos,
                                            layout,and
                                            skills</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="row short-features">
                                    <div class="col-lg-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <p>Have a deep understanding of typography, color theory, photos,
                                            layout,and
                                            skills</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="row short-features">
                                    <div class="col-lg-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <p>Have a deep understanding of typography, color theory, photos,
                                            layout,and
                                            skills</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="row short-features">
                                    <div class="col-lg-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-lg-11">
                                        <p>Have a deep understanding of typography, color theory, photos,
                                            layout,and
                                            skills</p>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-part">
                    <div class="row price-heading">
                        <div class="col-lg-12">
                            <h3 class="title">$ 2400.00</h3>
                        </div>
                    </div>
                    <div class="row middle-part">
                        <div class="col-lg-12">
                            <h2 class="heading">Information:</h2>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="left-text"><i class="fa-solid fa-calendar"></i> Year/Årgang</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="right-text">2020</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="left-text"><i class="fa-solid fa-map"></i> Kilometer</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="right-text">24000Km</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="left-text"><i class="fa-solid fa-gauge"></i> KM//L</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="right-text">24000Km</p>
                        </div>
                        <div class="col-lg-8 box">
                            <p class="left-text"><i class="fa-solid fa-gas-pump"></i> Fuel type (Brændstof)</p>
                        </div>
                        <div class="col-lg-4 box">
                            <p class="right-text">24000Km</p>
                        </div>
                        <div class="col-lg-6 box last-box">
                            <p class="left-text"><i class="fa-solid fa-note-sticky"></i>Gron Ejerafgift</p>
                        </div>
                        <div class="col-lg-6 box">
                            <p class="right-text">24000Km</p>
                        </div>

                        <div class="col-lg-12">
                            <a href="#" class="contact-btn">Kontakt os</a>
                        </div>
                    </div>
                    <div class="row contact-info">
                        <h2 class="heading">Contact Info:</h2>
                        <ul class="text-content">
                            <li><a href="tel:+880"> <span><i class="fa-solid fa-phone"></i></span>
                                    1-567-124-44227</a></li>
                            <li> <a href="#"><span><i class="fa-solid fa-location-dot"></i></span> 184 Main Street
                                    East Perl
                                    Habour 8007</a> </li>
                            <li> <a href="#"><span><i class="fa-solid fa-clock"></i></span> Mon - Sat 8.00 - 18.00
                                    Sunday <span class="close">CLOSED</span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- car-details ends -->
@endsection