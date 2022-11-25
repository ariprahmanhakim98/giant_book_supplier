@extends('layouts.master')

@section('content')
<div class="container">
	<div class="text-header mt-4">
		<h1>Publisher</h1>
	</div>
	<div class="row mt-5">
		@foreach($publishers as $publisher)
		<div class="col-lg-3 col-md-3 col-sm-12 mb-3">
			<div class="card shadow-lg h-100">
				<img src="{{$publisher->image}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">{{$publisher->name}}</h5>
					<p>Address</p>
					<p class="card-text">{{$publisher->address}}</p>
					<a href="{{ route('publisher.detail', $publisher->id) }}" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection