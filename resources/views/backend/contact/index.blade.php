@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Contact Form Data</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>NAME</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('contact.delete', $message->id) }}" class="btn btn-danger shadow btn-xs sharp"><i
                                            class="fa fa-trash" onclick="event.preventDefault();
                                            document.getElementById('contact-delete').submit();"></i></a>
                                </div>
                                
                                <form id="contact-delete" action="{{ route('contact.delete', $message->id) }}" method="POST" class="d-none">
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
@endsection