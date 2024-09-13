<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [
        //     'restaurants' => Restaurant::orderBy('id','asc')->get()
        // ];
        // return view('admin.restaurants.index', $data);
        return abort(404);
    }

    public function show($slug)
    {
        // // Cerca il ristorante utilizzando lo slug
        // $restaurant = Restaurant::where('slug', $slug)->firstOrFail();

        // $currentRestaurant = auth()->user()->restaurant;

        // if (!$currentRestaurant || $currentRestaurant->slug != $restaurant->slug) {
        //     abort(403, 'Accesso non autorizzato');
        // } else {
        //     $data = [
        //         "restaurant" => $restaurant
        //     ];

        //     return view('admin.restaurants.show', $data);
        // }
        return abort(404,'La pagina non esiste');
    }
}
