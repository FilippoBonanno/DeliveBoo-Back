@extends('layouts.app')

@section('content')
	<div class="text-center px-2 row m-0">
		@foreach ($restaurants as $restaurant)
			<div class="col-4 mt-3 border border-primary">
				<h4>Name</h4>
				<div>
					<a href="{{ route('admin.restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
				</div>
				<h4>Address</h4>
				<div>
					{{ $restaurant->address }}
				</div>
				<h4>Img</h4>
				<div>
					<img src="{{ asset('storage/' . $restaurant->img) }}" alt="img" class="w-100">
				</div>
				<h4>Tax Id</h4>
				<div>
					{{ $restaurant->tax_id }}
				</div>
				<h4>Ristoratore</h4>
				<div>
					{{ $restaurant->user->name }}
				</div>
			</div>
		@endforeach
	</div>
@endsection
