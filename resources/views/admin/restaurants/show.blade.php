@extends('layouts.admin')

@section('content')
    <div class="col-4 mt-3 m-auto">
        <div class="card p-0 h-100">
            @if (Str::startsWith($restaurant->img, 'http'))
                <div class="col-4">
                    <img src="{{ $restaurant->img }}" alt="immagine-ristorante" class="w-100 rounded-start">
                </div>
            @else
                <div class="col-4">
                    <img src="{{ asset('storage/' . $restaurant->img) }}" class="w-100 rounded-start" alt="immagine-ristorante">
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
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
