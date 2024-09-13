@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col" class="d-lg-table-cell d-none">Nome</th>
				<th scope="col" class="d-lg-table-cell d-none">N. Telefono</th>
				<th scope="col">E-mail</th>
				<th scope="col">Prezzo Totale</th>
				<th scope="col">Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orders as $order)
				<tr>
					<th scope="row"><a href="{{ route('admin.orders.show', $order->id) }}" class=""><i class="fas fa-eye"></i></a></th>
					<td class="d-lg-table-cell d-none">{{ $order->name }}</td>
					<td class="d-lg-table-cell d-none"> {{ $order->phone }} </td>
					<td> {{ $order->email }} </td>
					<td>€{{ $order->total_price }}</td>
					<td>{{ $order->order_date }}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection
