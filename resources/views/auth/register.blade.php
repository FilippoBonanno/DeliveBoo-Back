@extends('layouts.app')

@section('content')
	@vite(['resources/js/formValidator.js'])
	<div class="container mt-4">
		<div class="row justify-content-center mb-3">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Registrati') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" id="user_register_form" enctype="multipart/form-data">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}<span
										class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" required autocomplete="name">

									@error('name')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}<span
										class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email">

									@error('email')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span
										class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
										autocomplete="new-password" value="{{ old('password') }}">

									@error('password')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password_confirmation"
									class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}<span
										class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
										value="{{ old('password_confirmation') }}">
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_name" class="col-md-4 col-form-label text-md-right">Nome
									Ristorante<span class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name"
										value="{{ old('restaurant_name') }}" required>

									@error('restaurant_name')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_address" class="col-md-4 col-form-label text-md-right">Indirizzo
									Ristorante<span class="text-danger">*</span>
								</label>

								<div class="col-md-6">
									<input type="text" class="form-control @error('restaurant_address') is-invalid @enderror"
										name="restaurant_address" value="{{ old('restaurant_address') }}" required>

									@error('restaurant_address')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_tax_id" class="col-md-4 col-form-label text-md-right">Partita
									Iva<span class="text-danger">*</span></label>

								<div class="col-md-6">
									<input type="text" class="form-control @error('restaurant_tax_id') is-invalid @enderror"
										name="restaurant_tax_id" value="{{ old('restaurant_tax_id') }}" required>

									@error('restaurant_tax_id')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="category_id" class="col-md-4 col-form-label text-md-right">Categorie<span
										class="text-danger">*</span></label>

								<div class="col-md-6">
									@foreach ($categories as $item)
										<label for="category_id" class="form-label">{{ $item->name }}</label>
										<input type="checkbox" class="form-check-input @error('restaurant_tax_id') is-invalid @enderror"
											name="category_id[]" value="{{ $item->id }}">
									@endforeach
									@error('category_id')
										<div class="text-danger" role="alert">
											{{ $message }}
										</div>
									@enderror
								</div>

							</div>

							<div class="mb-4 row">
								<label for="restaurant_img" class="col-md-4 col-form-label text-md-right">Immagine
									Ristorante</label>
								<div class="col-md-6">
									<input type="file" class="form-control @error('restaurant_img') is-invalid @enderror"
										name="restaurant_img" accept=".png, .jpg, .jpeg">
									@error('restaurant_img')
										<div class="form-text text-danger">{{ $message }}</div>
									@enderror
								</div>

							</div>

							<div class="row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary" id="registrati_cta">
										{{ __('Registrati') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
