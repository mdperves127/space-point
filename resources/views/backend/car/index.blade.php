@extends('layouts.backend_app')
@section('backend_content')
<a  href="{{ route('car.create') }}" class="btn btn-square btn-outline-info ml-5">Create</a>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Cars</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->price }}</td>
                            <td>
                                <img width="70px;" src="{{ asset('assets/images') }}/{{ $car->photo }}"
                                    alt="{{ $car->photo }}">
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('car.edit', $car->id) }}"
                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('car.destroy', $car->id) }}"
                                        class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash" onclick="event.preventDefault();
                                            document.getElementById('car-delete').submit();"></i></a>
                                </div>

                                <form id="car-delete" action="{{ route('car.destroy', $car->id) }}"
                                    method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
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
@endsection