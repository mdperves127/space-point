@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Car</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control input-default " name="name" placeholder="Enter Car Name" value="{{ $car->name }}">
                    </div>
                    @error('name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control input-default " name="price"
                            placeholder="Enter Car Price" value="{{ $car->price }}">
                    </div>
                    @error('price')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="4" placeholder="Enter Car Description"
                            class="form-control input-default">{{ $car->description }}</textarea>
                    </div>
                    @error('description')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control input-default " name="year" placeholder="Enter year" value="{{ $car->year }}">
                    </div>
                    <div class="form-group">
                        <label for="kilometer">Kilometer</label>
                        <input type="text" class="form-control input-default " name="kilometer"
                            placeholder="Enter kilometer" value="{{ $car->kilometer }}">
                    </div>
                    <div class="form-group">
                        <label for="kilometer_liter">kilometer/Liter</label>
                        <input type="text" class="form-control input-default " name="kilometer_liter"
                            placeholder="Enter kilometer/liter" value="{{ $car->kilometer_liter }}">
                    </div>
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <input type="text" class="form-control input-default " name="fuel_type"
                            placeholder="Enter Fuel Type" value="{{ $car->fuel_type }}">
                    </div>
                    <div class="form-group">
                        <label for="gron_ejerafgift">Gron Ejerafgift</label>
                        <input type="text" class="form-control input-default " name="gron_ejerafgift"
                            placeholder="Enter Gron Ejerafgift" value="{{ $car->gron_ejerafgift }}">
                    </div>
                    <div class="form-group">
                        <label>Features</label>
                        <div id="features">
                            @forelse($features as  $feature)
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            name="features[]"
                                            placeholder="{{ __('Features') }}" value="{{$feature}}">
                                        </div>
                                </div>
                                <div class="flex-btn">
                                    @if($loop->first)
                                    <button type="button" class="btn btn-success add-features" data-text="{{ __('Feature') }}"> <i class="fa fa-plus"></i> </button>
                                    @else
                                    <button type="button" class="btn btn-danger remove-features" data-text="{{ __('Features') }}"> <i class="fa fa-minus"></i> </button>
                                    @endif
                                </div>
                            </div>
    
                            @empty
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            name="features[]"
                                            placeholder="{{ __('Features') }}" value="">
                                        </div>
                                </div>
                                <div class="flex-btn">
                                    <button type="button" class="btn btn-success add-features" data-text="{{ __('Features') }}"> <i class="fa fa-plus"></i> </button>
                                </div>
                            </div>
                            @endforelse
    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo">Car Photo</label>
                        <input type="file" class="form-control input-default " name="photo">
                    </div>
                    <img width="50px;" src="{{ asset('assets/images') }}/{{ $car->photo }}" alt="{{ $car->photo }}">
                    <br>
                    <br>
                    @error('photo')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    
                    <div class="form-group position-relative ">
                        <label class="file">
                            <input type="file" accept="image/*" name="galleries[]" id="file"
                                aria-label="File browser example" accept="image/*" multiple>
                            <span class="file-custom text-left">{{ __('Upload Gallery Image...') }}</span>
                        </label>
                    </div>

                    
                <div class="d-block">
                                                
                    {{-- @if (is_array($car->galleries) || is_object($car->galleries)) --}}
                    @forelse($car->galleries as $gallery)
                    <div class="single-g-item d-inline-block m-2">
                            <a href="{{ route('car.gallery.delete',$gallery->id) }}" class="remove-gallery-img">
                                <i  class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <a class="popup-link" href="{{ $gallery->photo ? asset('assets/images/'.$gallery->photo) : asset('assets/images/placeholder.png') }}">
                                <img width="50px;" class="admin-gallery-img" src="{{ $gallery->photo ? asset('assets/images/'.$gallery->photo) : asset('assets/images/placeholder.png') }}"
                                    alt="No Image Found">
                            </a>
                    </div>
                @empty

                    <h6><b>{{ __('No Images Added') }}</b></h6>

                @endforelse
                {{-- @endif --}}

                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection