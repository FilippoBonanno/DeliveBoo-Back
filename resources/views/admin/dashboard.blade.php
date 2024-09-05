@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Dashboard') }}</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						{{ __('You are logged in!') }} <br>

						@if (isset(Auth::user()->restaurant))
							<h2>Il tuo ristorante :</h2>
							<h1>{{ Auth::user()->restaurant->name }}</h1>
							<div class="card p-0 h-100">
								@if (Str::startsWith($restaurant->img, 'http'))
									<div class="col-4">
										<img src="{{ $restaurant->img }}" alt="immagine-ristorante" class="w-100 rounded-start">
									</div>
								@else
									<div class="col-4">
										<img src="{{ asset('storage/' . $restaurant->img) }}" class="w-100 rounded-start" alt="immagine-ristorante">
									</div>
								@endif
								<div class="row g-0 m-0">
									<div class="col-12">
										<div class="card-body">
											<p class="card-text"><b>Nome Ristorante:</b> {{ $restaurant->name }}</p>
											<p class="card-text"><b>Indirizzo Ristorante:</b> {{ $restaurant->address }}</p>
											<p class="card-text"><b>Categorie:</b>
												@foreach ($restaurant->categories as $category)
													{{ $category->name }} 
													@if($loop->index+1 != count($restaurant->categories))
														-
													@endif
												@endforeach
											</p>
										</div>
									</div>
								</div>
							</div>
						@else
							<h2>
								<a href="{{ route('admin.restaurants.create') }}">
									Crea ristorante!
								</a>
							</h2>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
