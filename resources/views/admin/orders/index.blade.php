@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id Ordine</th>
				<th scope="col">Nome</th>
				<th scope="col">N. Telefono</th>
				<th scope="col">E-mail</th>
				<th scope="col">Prezzo Totale</th>
				<th scope="col">Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orders as $order)
				<tr>
					<th scope="row"><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->id }}</a></th>
					<td>{{ $order->name }}</td>
					<td> {{ $order->phone }} </td>
					<td> {{ $order->email }} </td>
					<td>€{{ $order->total_price }}</td>
					<td>{{ $order->created_at }}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection
