@extends('layouts.admin')

@section('content')
	<div class="container">
		<h1 class="text-center py-2">Modifica il piatto</h1>

		{{-- MESSAGGIO DI ERRORE SE NON SI COMPLETANO I CAMPI CHE SONO OBBLIGATORI --}}
		<div>
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>

		<form method="POST" action="{{ route('admin.dishes.update', $dish) }}" enctype="multipart/form-data">
			@method('PUT')
			@csrf

			<div class="mb-3">
				<label for="name" class="form-label">Nome del Piatto</label>
				<input type="text" class="form-control" name="name" value="{{ $dish->name }}" min="4" max="255"
					required>
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="price" class="form-label">Prezzo</label>
				<input type="number" class="form-control" name="price" value="{{ $dish->price }}" required>
				@error('price')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Descrizione</label>
				<input type="text" class="form-control" name="description" value="{{ $dish->description }}" min="4"
					max="255" required>
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="img" class="form-label">Immagine</label>
				<input type="file" class="form-control" name="img" value="{{ $dish->img }}" required>
				@error('img')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="visibility" class="form-label">Visibilità</label>
				<select name="visibility">
					<option value="1">Sì</option>
					<option value="0">No</option>
				</select>
				@error('visibility')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-primary">Invia Nuovo Piatto</button>
		</form>
	</div>
@endsection
