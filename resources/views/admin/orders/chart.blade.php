@extends('layouts.admin')

@section('content')
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	<canvas id="combinedChart" width="400" height="200"></canvas>

	<script>
		const ctx = document.getElementById('combinedChart').getContext('2d');
		const combinedChart = new Chart(ctx, {
			type: 'bar', // Tipo principale di grafico
			data: {
				labels: {!! json_encode(array_keys($income)) !!}, // I mesi
				datasets: [{
						label: 'Introito totale in €',
						data: {!! json_encode(array_values($income)) !!}, // Introito totale per mese
						backgroundColor: 'rgba(75, 192, 192, 0.2)',
						borderColor: 'rgba(75, 192, 192, 1)',
						borderWidth: 1,
						type: 'line', // Tipo di grafico per l'introito mensile
						yAxisID: 'y1'
					},
					{
						label: 'Numero di ordini',
						data: {!! json_encode(array_values($orders)) !!}, // Numero ordini per mese
						backgroundColor: 'rgba(153, 102, 255, 0.2)',
						borderColor: 'rgba(153, 102, 255, 1)',
						borderWidth: 1,
						type: 'bar', // Tipo di grafico per il numero di ordini
						yAxisID: 'y'
					}
				]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true,
						ticks: {
							// stepSize: 1,
							// Includo il simbolo €
							callback: function(value) {
								return 'N.Ordini: ' + value;
							}
						}
					},
					y1: {
						beginAtZero: true,
						ticks: {
							// Includo il simbolo €
							callback: function(value) {
								return '€' + value;
							}
						},
						position: 'right',

					}
				}
			}
		});
	</script>
@endsection
