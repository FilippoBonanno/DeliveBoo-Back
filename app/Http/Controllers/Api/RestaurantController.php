<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants =  Restaurant::with('categories')->get();
        return response()->json($restaurants);
    }

    public function show($id)
    {
        $restaurant = Restaurant::with('categories', 'dishes', 'user')->findOrFail($id);
        return response()->json($restaurant);
    }
}
