@extends('layouts.master')

@section('content')
<div class="container detail">
	<div class="text-header mt-4">
		<h1>Book Detail</h1>
	</div>
	<div class="mt-5">
		<div class="book-detail">
			<div class="card shadow-lg h-100">
				<img src="{{$books->image}}" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-title">Title : {{$books->title}}</p>
					<p class="card-text">Author : {{$books->author}}</p>
					<p class="card-text">Publisher : {{$books->publish->name}}</p>
					<p class="card-text">Year : {{$books->year}}</p>
					<p class="card-text">Synopsis :</p>
					<p class="card-text">
						{{$books->synopsis}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection