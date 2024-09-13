@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
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

                        @if (isset(Auth::user()->restaurant))
                            <h1>{{ Auth::user()->restaurant->name }}</h1>
                            <div class="card p-0 h-100">

                                @if (Str::startsWith($restaurant->img, 'http'))
                                    <div class="d-flex justify-content-center p-3">
                                        <div class="col-xl-8 col-xs-12">
                                            <img src="{{ $restaurant->img }}" alt="immagine-ristorante"
                                                class="card-img">
                                        </div>
									</div>
                                @else
									<div class="d-flex justify-content-center p-3">
                                        <div class="col-xl-8 col-xs-12">
                                            <img src="{{ asset('storage/' . $restaurant->img) }}" class="card-img"
                                                alt="immagine-ristorante">
                                        </div>
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
                                                    @if ($loop->index + 1 != count($restaurant->categories))
                                                        -
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (empty($dishes))
                                <div class="alert alert-danger mt-3" role="alert">
                                    Non hai nessun piatto!
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
