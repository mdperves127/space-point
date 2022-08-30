@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Banner Photos</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                <img width="70px;" src="{{ asset('assets/images') }}/{{ $banner->photo }}"
                                    alt="{{ $banner->photo }}">
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('banner.update', $banner->id) }}"
                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('banner.destroy', $banner->id) }}"
                                        class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash" onclick="event.preventDefault();
                                            document.getElementById('banner-delete').submit();"></i></a>
                                </div>

                                <form id="banner-delete" action="{{ route('banner.destroy', $banner->id) }}"
                                    method="POST" class="d-none">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-warning text-center" colspan="50">No data found!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Banner</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="photo">Banner Photo</label>
                        <input type="file" class="form-control input-default " name="photo">
                    </div>
                    @error('photo')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection