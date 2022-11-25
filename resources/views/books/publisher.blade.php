@extends('layouts.master')

@section('content')
<div class="text-header mt-4">
	<h4>{{$publisher->name}}</h4>
	<h5>Address - {{$publisher->address}}</h5>
	<h5>Phone - {{$publisher->phone}}</h5>
	<h5>Email - {{$publisher->email}}</h5>
</div>
<div class="row mt-5">
	@foreach ( $books as $book )
	<div class="col-lg-3 col-md-3 col-sm-12 mb-3">
		<div class="card shadow-lg h-100">
			<img src="{{$book->image}}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{$book->title}}</h5>
				<p>by</p>
				<p class="card-text">{{$book->author}}</p>
				<a href="{{ route('book.show', $book->id) }}" class="btn btn-primary">Detail</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection