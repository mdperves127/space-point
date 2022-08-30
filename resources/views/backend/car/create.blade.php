@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Car</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control input-default " name="name" placeholder="Enter Car Name">
                    </div>
                    @error('name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control input-default " name="price"
                            placeholder="Enter Car Price">
                    </div>
                    @error('price')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="4" placeholder="Enter Car Description"
                            class="form-control input-default"></textarea>
                    </div>
                    @error('description')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control input-default " name="year" placeholder="Enter year">
                    </div>
                    <div class="form-group">
                        <label for="kilometer">Kilometer</label>
                        <input type="text" class="form-control input-default " name="kilometer"
                            placeholder="Enter kilometer">
                    </div>
                    <div class="form-group">
                        <label for="kilometer_liter">kilometer/Liter</label>
                        <input type="text" class="form-control input-default " name="kilometer_liter"
                            placeholder="Enter kilometer/liter">
                    </div>
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <input type="text" class="form-control input-default " name="fuel_type"
                            placeholder="Enter Fuel Type">
                    </div>
                    <div class="form-group">
                        <label for="gron_ejerafgift">Gron Ejerafgift</label>
                        <input type="text" class="form-control input-default " name="gron_ejerafgift"
                            placeholder="Enter Gron Ejerafgift">
                    </div>
                    <div class="form-group">
                        <label>Extra Features</label>
                        <div id="features">
                            <div class="d-flex">

                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="features[]" placeholder="Features"
                                            value="">
                                    </div>
                                </div>
                                <div class="flex-btn">
                                    <button type="button" class="btn btn-success add-features" data-text="Features"> <i
                                            class="fa fa-plus"></i> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo">Car Photo</label>
                        <input type="file" class="form-control input-default " name="photo">
                    </div>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection