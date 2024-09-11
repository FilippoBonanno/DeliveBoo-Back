@extends('layouts.admin')

@section('content')
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Ordini finalizzati negli ultimi 12 mesi</h3>
				<canvas id="ordersChart" width="400" height="200"></canvas>
			</div>
		</div>
	</div>

	<script>
		const ctx = document.getElementById('ordersChart').getContext('2d');
		const ordersChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: {!! json_encode(array_keys($monthlyOrders)) !!}, // I mesi
				datasets: [{
					label: 'Ordini ricevuti',
					data: {!! json_encode(array_values($monthlyOrders)) !!}, // Numero ordini
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
							stepSize: 1
						}
					}
				}
			},
		});
	</script>
@endsection
