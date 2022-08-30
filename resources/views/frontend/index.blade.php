@extends('layouts.frontend_app')
@section('index')
  active
@endsection
@section('frontend_content')

<!-- banner start -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-part">
                    <h2>Buy Your <span>Dream Car</span>
                        From Here</h2>
                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard
                        dummy text ever</p>
                    <a href="{{ route('car') }}" class="sell-btn">Sælg din bil</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-part">
                    <div class="images">
                        @foreach ($banners as $banner)
                        <img src="{{ asset('assets/images') }}/{{ $banner->photo }}" alt="{{ $banner->photo }}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner ends -->

<!-- car-cart start -->
<section id="car-cart">
    <div class="container">
        <div class="row car-cart-header">
            <div class="col-lg-6"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="search-bar">
                    <form action="">
                        <input type="search" id="search" name="" class="search-filed" placeholder="Search Here">
                        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($cars as $car)
            <div class="col-lg-3">
                <div class="cart">
                    <div class="img-part">
                        <img src="{{ asset('assets/images') }}/{{ $car->photo }}" alt="{{ $car->photo }}">
                        <div class="price">
                            <p>Pris: <span>{{ $car->price }}$</span></p>
                        </div>
                    </div>
                    <div class="text-part">
                        <h4>{{ $car->name }}</h4>
                        <div class="row">
                            <div class="col-lg-7 text-start">
                                <p class="details">KM: <span>{{ $car->kilometer }}</span></p>
                            </div>
                            <div class="col-lg-5 text-end">
                                <p class="details">Year: <span>{{ $car->year }}</span></p>
                            </div>
                            <div class="col-lg-7">
                                <p class="details">Fuel Type: <span>{{ $car->fuel_type }}</span></p>
                            </div>
                            <div class="col-lg-5">

                            </div>
                            <div class="col-lg-6">
                                <p class="know-btn-p"><a href="{{ route('car.detail', $car->slug) }}" class="know-btn">Se bilen</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <span class="text-center text-danger">No data found</span>
            @endforelse
        </div>
    </div>
</section>
<!-- car-cart ends -->

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