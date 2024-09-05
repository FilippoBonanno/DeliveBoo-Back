@extends('layouts.admin')

@section('content')
	<div class="container">
		<h1 class="text-center py-2">Aggiungi un Nuovo Piatto</h1>

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

		<form method="POST" action="{{ route('admin.dishes.store') }}" enctype="multipart/form-data">
			@csrf

			<div class="mb-3">
				<label for="name" class="form-label">Nome del Piatto</label>
				<input type="text" class="form-control" name="name" value="{{ old('name') }}" min="4" max="255"
					required>
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="price" class="form-label">Prezzo</label>
				<input type="number" class="form-control" name="price" value="{{ old('price') }}" required step='0.01' min="0.1" max="999.99">
				@error('price')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Descrizione</label>
				<textarea class="form-control" name="description" rows="3" required minlength="20" maxlength="1000">{{ old('description')}}</textarea>
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="img" class="form-label"></label>
				<input type="file" class="form-control" name="img" value="{{ old('img') }}" required accept=".png, .jpg, .jpeg">
				@error('img')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-primary">Invia Nuovo Piatto</button>
		</form>
	</div>
@endsection
