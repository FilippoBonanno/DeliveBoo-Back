@extends('layouts.admin')

@section('content')
	<div class="col-4 mt-3 m-auto">
		<div class="card p-0 h-100">
			@if (Str::startsWith($dish->img, 'http'))
				<div class="col-4">
					<img src="{{ $dish->img }}" alt="immagine-piatto" class="w-100 rounded">
				</div>
			@else
				<div class="col-4">
					<img src="{{ asset('storage/' . $dish->img) }}" class="w-100 rounded" alt="immagine-piatto">
				</div>
			@endif

			<div class="row g-0 m-0">
				<div class="col-12">
					<div class="card-body">
						<p class="card-text"><b>Nome Ristorante:</b> {{ $dish->name }}</p>
						<p class="card-text"><b>Prezzo del piatto:</b> {{ $dish->price }}</p>
						<p class="card-text"><b>Ristorante:</b> {{ $dish->restaurant->name }}</p>
						<p class="card-text"><b>Desrizione:</b> {{ $dish->description }}</p>
						<p class="card-text"><b>Visibilita':</b>
							@if ($dish->visibility == 1)
								Visibile
							@else
								Nascosto
							@endif
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
