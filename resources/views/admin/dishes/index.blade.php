@extends('layouts.app')

@section('content')
    <div class="text-center px-2 row m-0">
        @foreach ($dishes as $dish)
            <div class="col-4 mt-3 border border-primary">
                <h4>Name</h4>
                <div>
                    <a href="{{ route('admin.dishes.show', $dish) }}">{{ $dish->name }}</a>
                </div>
                <h4>Address</h4>
                <div>
                    {{ $dish->price }}
                </div>
                <h4>Img</h4>
                @if (Str::startsWith($dish->img, 'http'))
                    <div class="w-100">
                        <img src="{{ $dish->img }}" alt="" class="w-50">
                    </div>
                @else
                    <div>
                        <img src="{{ asset('storage/' . $dish->img) }}" alt="img" class="w-50">
                    </div>
                @endif
                <h4>Tax Id</h4>
                <div>
                    {{ $dish->description }}
                </div>
                <h4>Restaurant</h4>
                <div>
                    {{ $dish->restaurant->name }}
                </div>
                <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary">Edit</a>
            </div>
        @endforeach
    </div>
@endsection
