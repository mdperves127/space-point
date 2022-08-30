@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-4 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Banner</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="photo">Banner Photo</label>
                        <input type="file" class="form-control input-default " name="photo">
                    </div>
                    <img width="50px;" src="{{ asset('assets/images') }}/{{ $banner->photo }}" alt="{{ $banner->photo }}">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection