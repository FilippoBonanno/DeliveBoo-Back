@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id Transazione</th>
				<th scope="col">Nome</th>
				<th scope="col">Indirizzo</th>
				<th scope="col">Codice Postale</th>
				<th scope="col">Citta'</th>
				<th scope="col">Provincia</th>
				<th scope="col">N. Telefono</th>
				<th scope="col">E-mail</th>
				<th scope="col">Prezzo Totale</th>
				<th scope="col">Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orders as $order)
				<tr>
					<th scope="row">{{ $order->transaction_id }}</th>
					<td>{{ $order->name }}</td>
					<td>{{ $order->address }}</td>
					<td> {{ $order->postalcode }}</td>
					<td>{{ $order->city }}</td>
					<td>{{ $order->province }}</td>
					<td> {{ $order->phone }} </td>
					<td> {{ $order->email }} </td>
					<td>€{{ $order->total_price }}</td>
					<td>{{ $order->created_at }}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection
