@extends('layouts.app')
@section('content')
	<div class="jumbotron p-5 mb-4 bg-light rounded-3">
		<div class="container py-5">
			<div class="logo_laravel">
				<img src="" alt="w-25">
			</div>
			<h1 class="display-5 fw-bold">
				Benvenuti su Deliveboo
			</h1>

			<p class="col-md-8 fs-4">Gestisci ordini, menù e statistiche di vendita in un unico pannello. Offri ai tuoi clienti la
				migliore esperienza!</p>
			<a href="#" class="btn btn-primary btn-lg" type="button">BOTTONE</a>
		</div>
	</div>

	<div class="content">
		<div class="container mt-4">
			<h2 class="mb-0">La tua Piattaforma di Vendita!</h2>

			<p>Gestisci il tuo ristorante e offri ai tuoi clienti la migliore esperienza di consegna. Qui potrai:</p>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<strong>Gestire il tuo menù</strong>: Aggiungi, modifica o rimuovi piatti in tempo reale.
				</li>
				<li class="list-group-item">
					<strong>Controllare gli ordini</strong>: Ricevi e monitora gli ordini in arrivo, gestisci le consegne e tieni
					traccia delle richieste speciali.
				</li>
				<li class="list-group-item">
					<strong>Statistiche di vendita</strong>: Accedi ai report dettagliati sulle vendite e monitora i guadagni.
				</li>
			</ul>

		</div>
	</div>
	</div>
@endsection
