@extends('layouts.admin')

@section('content')
    <div class="text-center px-2 row m-0">
        @foreach ($restaurants as $restaurant)
            <div class="col-4 mt-3 border border-primary">
                <h4>Name</h4>
                <div>
                    <a href="{{ route('admin.restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
                </div>
                <h4>Address</h4>
                <div>
                    {{ $restaurant->address }}
                </div>
                <h4>Img</h4>

                @if (Str::startsWith($restaurant->img, 'http'))
                    <div class="w-100">
                        <img src="{{ $restaurant->img }}" alt="" class="w-50">
                    </div>
                @else
                    <div>
                        <img src="{{ asset('storage/' . $restaurant->img) }}" alt="img" class="w-50">
                    </div>
                @endif

                <h4>Tax Id</h4>
                <div>
                    {{ $restaurant->tax_id }}
                </div>
                <h4>Ristoratore</h4>
                <div>
                    {{ $restaurant->user->name }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
