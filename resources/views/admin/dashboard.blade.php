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
						{{-- @else
							<h2>
								<a href="{{ route('admin.restaurants.create') }}">
									Crea ristorante!
								</a>
							</h2> --}}
						@endif

						{{-- lista piatti --}}
						<div class="text-center px-2 row m-0">
							@foreach ($dishes as $dish)
								<div class="col-4 mt-3 border border-primary">
									<h4>Name</h4>
									<div>
										<a href="{{ route('admin.dishes.show', $dish) }}">{{ $dish->name }}</a>
									</div>
									<h4>Price</h4>
									<div>
										{{ $dish->price }}
									</div>
									<h4>Img</h4>
									@if (Str::startsWith($dish->img, 'http'))
										<div class="w-100">
											<img src="{{ $dish->img }}" alt="" class="w-50">
										</div>
									@else
										<div>
											<img src="{{ asset('storage/' . $dish->img) }}" alt="img" class="w-50">
										</div>
									@endif
									<h4>Description</h4>
									<div>
										{{ $dish->description }}
									</div>
									<h4>Restaurant</h4>
									<div>
										{{ $dish->restaurant->name }}
									</div>
									<a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary">Edit</a>
									<button type="button" class="btn btn-outline-danger my-3" data-toggle="modal" data-target="#confirmModal" data-action="{{ route('admin.dishes.destroy', $dish) }}">Elimina Piatto</button>
								</div>
							@endforeach
						</div>
					
						<!-- Modale di conferma -->
						<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="confirmModalLabel">Conferma Eliminazione</h5>
									</div>
									<div class="modal-body">
										Sei sicuro di voler eliminare questo piatto?
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
										<form id="confirmDeleteForm" method="POST" action="">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">Elimina</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					
						<script>
							document.addEventListener('DOMContentLoaded', function () {
								// Seleziona tutti i bottoni di eliminazione
								const deleteButtons = document.querySelectorAll('button[data-action]');
								
								deleteButtons.forEach(button => {
									button.addEventListener('click', function () {
										// Ottieni l'azione del form dalla proprietà data-action del bottone
										const action = this.getAttribute('data-action');
										// Imposta l'azione del form nella modale
										document.getElementById('confirmDeleteForm').action = action;
										// Mostra la modale
										$('#confirmModal').modal('show');
									});
								});
					
								// Gestisce la chiusura della modale quando clicchi su "Annulla"
								const cancelButton = document.querySelector('.btn-secondary');
								cancelButton.addEventListener('click', function () {
									$('#confirmModal').modal('hide');
								});
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
