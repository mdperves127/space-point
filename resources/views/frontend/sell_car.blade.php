@extends('layouts.frontend_app')
@section('frontend_content')


<!-- sell-car start -->
<section id="sell-car">
    <div class="container">
        <form action="{{ route('sell.car.post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sell-car-heading">Sell Your Car</h2>
                </div>
                <div class="col-lg-12">
                    @if (session('contact_message'))
                    <p class="text-success">
                        {{ session('contact_message') }}
                    </p>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" name="name" id="" placeholder="Navn" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <input type="number" name="phone" id="" placeholder="Telefon numme" value="{{ old('phone') }}">
                        @error('phone')
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
                        <input type="number" name="plate_number" id="" placeholder="Nummerplade" value="{{ old('plate_number') }}">
                        @error('plate_number')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <textarea name="message" id="" placeholder="Beskriv din bil, såsom stand, fejl/mangler osv."></textarea>
                        @error('message')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group inputDnD">
                        <input type="file" class="form-control-file " name="attach" id="inputFile"
                            onchange="readUrl(this)" data-title="Drag and drop a file Here" value="{{ old('attach') }}">
                            @error('attach')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                    </div>
                    <div class="submit-group">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- sell-car ends -->


<!-- map start -->
<section id="map">
    <div class="map-box">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.723204850687!2d103.83637461475395!3d1.3424587990208872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1746d15775d9%3A0xf784d8a2fc2bbe2a!2s832%20Thomson%20Rd%2C%20Singapore%20574248!5e0!3m2!1sen!2sbd!4v1660992026173!5m2!1sen!2sbd"
            width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- map ends -->
@endsection