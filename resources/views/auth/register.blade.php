@extends('layouts.app')

@section('content')
	@vite(['resources/js/formValidator.js'])
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Register') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" id="user_register_form">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}*</label>

								<div class="col-md-6">
									<input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" required autocomplete="name" autofocus>
										
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}*</label>

								<div class="col-md-6">
									<input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}*</label>

								<div class="col-md-6">
									<input type="password" class="form-control @error('password') is-invalid @enderror"
										name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password_confirmation"
									class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}*</label>

								<div class="col-md-6">
									<input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required
										autocomplete="new-password">
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_name" class="col-md-4 col-form-label text-md-right">Restaurant Name*</label>

								<div class="col-md-6">
									<input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror"
										name="restaurant_name" value="{{ old('restaurant_name') }}" required>

									@error('restaurant_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_address" class="col-md-4 col-form-label text-md-right">Restaurant Address*
								</label>

								<div class="col-md-6">
									<input id="restaurant_address" type="text"
										class="form-control @error('restaurant_address') is-invalid @enderror" name="restaurant_address"
										value="{{ old('restaurant_address') }}" required>

									@error('restaurant_address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="restaurant_tax_id" class="col-md-4 col-form-label text-md-right">Restaurant TAX ID*</label>

								<div class="col-md-6">
									<input id="restaurant_tax_id" type="text"
										class="form-control @error('restaurant_tax_id') is-invalid @enderror" name="restaurant_tax_id"
										value="{{ old('restaurant_tax_id') }}" required>

									@error('restaurant_tax_id')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div>
								@foreach ($categories as $item)
									<label for="category_id" class="form-label">{{ $item->name }}</label>
									<input type="checkbox" class="form-check-input" name="category_id[]" value="{{ $item->id }}">
								@endforeach
							</div>

							<div class="mb-3">
								<label for="restaurant_img" class="form-label mt-3">Select Image</label>
								<input type="file" class="form-control" name="restaurant_img" required accept=".png, .jpg, .jpeg">
								@error('restaurant_img')
									<div class="form-text text-danger">{{ $message }}</div>
								@enderror
							</div>



							<div class="mb-4 row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary" id="registrati_cta">
										{{ __('Register') }}
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
