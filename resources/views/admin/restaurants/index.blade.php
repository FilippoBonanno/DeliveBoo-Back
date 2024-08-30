@extends('layouts.app')

@section('content')
    @foreach ($restaurants as $restaurant)
        <ul>
            <h4>Name</h4>
            <li>
                {{$restaurant->name}}
            </li>
            <h4>Address</h4>
            <li>
                {{$restaurant->address}}
            </li>
            <h4>Img</h4>
            <li>
                {{$restaurant->img}}
            </li>
            <h4>Tax Id</h4>
            <li>
                {{$restaurant->tax_id}}
            </li>
            <h4>User Id</h4> 
            <li>
                {{$restaurant->user_id}}
            </li>
        </ul>
        <hr>
    @endforeach
@endsection
