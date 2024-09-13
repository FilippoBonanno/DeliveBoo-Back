@extends('layouts.admin')

@section('content')
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #f37a27;">Ordine</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Data</p>
                                    <p>{{ date("d/m/Y H:m", strtotime($order->order_date)) }}</p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>{{ $order->id }}</p>
                                </div>
                            </div>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: #f2f2f2;">
                                                    <th style="background-color: #f2f2f2; border:#f2f2f2;" scope="col">Nome Piatto</th>
                                                    <th style="background-color: #f2f2f2; border:#f2f2f2;" scope="col">Qnt</th>
                                                    <th style="background-color: #f2f2f2; border:#f2f2f2;"scope="col">Prezzo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->dishes as $dish)
                                                    <tr>
                                                        <td style="background-color: #f2f2f2; border:#f2f2f2;">{{ $dish->name }}</td>
                                                        <td style="background-color: #f2f2f2; border:#f2f2f2;"> {{ $dish->pivot->quantity }} </td>
                                                        <td style="background-color: #f2f2f2; border:#f2f2f2;"> {{ $dish->price }} </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>

                            <div class="row my-4">
                                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                    <p class="lead fw-bold mb-0" style="color: #f37a27;">€{{ $order->total_price }}</p>
                                </div>
                            </div>

                            <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Indirizzo</p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Indirizzo</th>
                                                <th scope="col">Provincia</th>
                                                <th scope="col">Paese</th>
                                                <th scope="col">Codice postale</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $order->address }}</td>
                                                <td> {{ $order->province }} </td>
                                                <td> {{ $order->country }} </td>
                                                <td>{{ $order->postalcode }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
