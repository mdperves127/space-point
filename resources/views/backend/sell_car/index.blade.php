@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Sell Car</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>Email</th>
                            <th>PLATE NUMBER</th>
                            <th>Attached File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->phone }}</td>
                            <td>{{ $car->email }}</td>
                            <td>{{ $car->plate_number }}</td>
                            <td>{{ $car->message }}</td>
                            <td>
                                @if ($car->attach)
                                <a href="{{ route('dashboard.sell.car.download', $car->id) }}">
                                    <i class="fa fa-solid fa-download"></i>
                                </a>
                                |
                                <a target="_blank" href="{{ asset('storage') }}/{{ $car->attach }}">
                                    <i class="fa fa-solid fa-file"></i>
                                </a>
                                @endif
                            </td>
                            
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('dashboard.sell.car.delete', $car->id) }}" class="btn btn-danger shadow btn-xs sharp"><i
                                            class="fa fa-trash"></i></a>
                                </div>
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