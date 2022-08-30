@extends('layouts.frontend_app')
@section('contact')
    active
@endsection

@section('title')
    Contact | Solystnbiler
@endsection
@section('frontend_content')

<!-- sell-car start -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sell-car-heading">Contact</h2>
            </div>
            <div class="col-lg-3"></div>
            
            <div class="col-lg-6">
                @if (session('contact_message'))
                <p class="text-success">{{ session('contact_message') }}</p>
                @endif
                <form action="{{ route('contact.post') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="name" id="" placeholder="Navn" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <textarea name="message" id="" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="submit-group">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- sell-car ends -->

    <!-- contact-text start -->
    <section id="contact-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center box-one">
                    <div class="img-box">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon1.png" alt="c-icon1.png">
                    </div>
                    <div class="text-box">
                        <p>832, Thompson Drive,
                            San Fransisco CA 9410 7,US </p>
                    </div>
                </div>
                <div class="col-lg-3 text-center box-two">
                    <div class="img-box">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon2.png" alt="c-icon2.png">
                    </div>
                    <div class="text-box">

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
                <div class="col-lg-3 text-center box-three">
                    <div class="img-box">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon3.png" alt="c-icon3.png">
                    </div>
                    <div class="text-box">

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
                <div class="col-lg-3 text-center box-four">
                    <div class="img-box">
                        <img src="{{ asset('frontend_asset') }}/images/c-icon4.png" alt="c-icon3.png">
                    </div>
                    <div class="text-box">
                        <p>Opening hour is 9 o’clock</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-text ends -->


<!-- map start -->
<section id="map">
    <div class="map-box">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.723204850687!2d103.83637461475395!3d1.3424587990208872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1746d15775d9%3A0xf784d8a2fc2bbe2a!2s832%20Thomson%20Rd%2C%20Singapore%20574248!5e0!3m2!1sen!2sbd!4v1660992026173!5m2!1sen!2sbd"
            width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!-- <div class="text-box">
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
      </div> -->
    </div>
</section>
<!-- map ends -->
@endsection