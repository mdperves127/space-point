@extends('layouts.frontend_app')
@section('car')
active
@endsection

@section('title')
    Search Result | Solystnbiler
@endsection
@section('frontend_content')

<!-- car-cart start -->
<section id="car-page-cart">
    <div class="container">
        <div class="row car-cart-header">
            <div class="col-lg-12">
                <h2 class="car-heading">Search Result</h2>
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
                                <p class="details">KM: <span>{{ $car->kilometer }} KM</span></p>
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
                                <p class="know-btn-p"><a href="{{ route('car.detail', $car->slug) }}"
                                        class="know-btn">Se bilen</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <span class="text-center text-warning">No data found</span>
            @endforelse
        </div>
        {{-- <div class="row pagination text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                {{ $cars->links() }}
            </nav>
        </div> --}}
    </div>
</section>
<!-- car-cart ends -->
@endsection