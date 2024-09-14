@extends('layouts.admin')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col" class="d-lg-table-cell d-none">N. Telefono</th>
                    <th scope="col" class="d-lg-table-cell d-none">E-mail</th>
                    <th scope="col" class="d-md-table-cell d-none">Prezzo Totale</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row"><a href="{{ route('admin.orders.show', $order->id) }}" class=""><i
                                    class="fas fa-eye"></i></a></th>
                        <td>{{ $order->name }}</td>
                        <td class="d-lg-table-cell d-none"> {{ $order->phone }} </td>
                        <td class="d-lg-table-cell d-none"> {{ $order->email }} </td>
                        <td class="d-md-table-cell d-none">€{{ $order->total_price }}</td>
                        <td>{{ date('d/m/Y H:m', strtotime($order->order_date)) }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
