@extends('layouts.backend_app')
@section('backend_content')
<div class="col-lg-12">
	<h1>Welcome {{ Auth::user()->name }}</h1>
</div>
@endsection
		

  