@extends('layouts.app')

@section('content')
	<div class="col-4 mt-3 m-auto">
		<div class="card p-0 h-100">
			<div class="col-4">
				<img src="{{ asset('storage/' . $restaurants->img) }}" class="w-100 rounded-start" alt="immagine-ristorante">
			</div>
			<div class="row g-0 m-0">
				<div class="col-12">
					<div class="card-body">
						<p class="card-text"><b>Nome Ristorante:</b> {{ $restaurants->name }}</p>
						<p class="card-text"><b>Indirizzo Ristorante:</b> {{ $restaurants->address }}</p>
						<p class="card-text"><b>Categorie</b>
							@foreach ($restaurants->categories as $category)
								{{ $category->name }}
							@endforeach
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
