@extends('layouts.admin')

@section('content')
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	{{-- Container for Chart --}}
	<div class="container py-5 h-100">
		<h2>Grafico Ordini - Mese</h2>
		<canvas id="ordersChart" width="400" height="200"></canvas>
		<hr>
		<h2>Grafico Profitto - Mese</h2>
		<canvas id="incomeChart" width="400" height="200"></canvas>

		<script>
			// Grafico degli ordini per mese
			const ordersCtx = document.getElementById('ordersChart').getContext('2d');
			const ordersChart = new Chart(ordersCtx, {
				type: 'bar', // Grafico a barre per gli ordini
				data: {
					labels: {!! json_encode(array_keys($orders)) !!}, // I mesi
					datasets: [{
						label: 'Numero di ordini',
						data: {!! json_encode(array_values($orders)) !!}, // Numero di ordini per mese
						backgroundColor: 'rgba(153, 102, 255, 0.2)',
						borderColor: 'rgba(153, 102, 255, 1)',
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true,


						}
					}
				}
			});

			// Grafico del profitto per mese
			const incomeCtx = document.getElementById('incomeChart').getContext('2d');
			const incomeChart = new Chart(incomeCtx, {
				type: 'bar', // Grafico a barre per il profitto
				data: {
					labels: {!! json_encode(array_keys($income)) !!}, // I mesi
					datasets: [{
						label: 'Introito totale',
						data: {!! json_encode(array_values($income)) !!}, // Profitto per mese
						backgroundColor: 'rgba(75, 192, 192, 0.2)',
						borderColor: 'rgba(75, 192, 192, 1)',
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true,
							ticks: {
								callback: function(value) {
									return '€' + value;
								},
							}
						}
					}
				}
			});
		</script>
	@endsection
