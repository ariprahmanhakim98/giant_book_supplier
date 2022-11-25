@extends('layouts.master')

@section('content')
<div class="container">
	<div class="text-header mt-4">
		<h1>Book List</h1>
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
</div>
@endsection