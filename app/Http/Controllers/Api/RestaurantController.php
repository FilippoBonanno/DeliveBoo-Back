<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        // Recupero la categoria dalla query
        $categories = $request->query('categories');

        // Recupero tutti i ristoranti con le relazioni necessarie
        $restaurants = Restaurant::with(['dishes', 'user', 'categories']);



        // Filtra per categorie, se presente
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $restaurants->whereHas('categories', function ($q) use ($category) {
                    $q->where('name', $category);
                });
            }
        }

        // Esegui la query per ottenere i ristoranti filtrati
        $restaurants = $restaurants->get();

        foreach ($restaurants as $restaurant) {
            if (str_starts_with($restaurant->img, 'http')) {
                $restaurant['img'] = $restaurant->img;
            } else {
                $restaurant['img'] = Storage::url($restaurant->img);
            }
        }

        // Restituisci il conteggio totale dei ristoranti filtrati insieme ai ristoranti
        $restaurantCount = $restaurants->count();

        return response()->json([
            'restaurants' => $restaurants,
            'total' => $restaurantCount
        ]);
    }

    public function show($slug)
    {
        // Cerca il ristorante utilizzando lo slug
        $restaurant = Restaurant::with('categories', 'dishes', 'user')->where('slug', $slug)->firstOrFail();

        if (str_starts_with($restaurant->img, 'http')) {
            $restaurant['img'] = $restaurant->img;
        } else {
            $restaurant['img'] = Storage::url($restaurant->img);
        }

        foreach ($restaurant->dishes as  $dish) {
            if (str_starts_with($dish->img, 'http')) {
                $dish['img'] = $dish->img;
            } else {
                $dish['img'] = Storage::url($dish->img);
            }
        }


        // Restituisci il ristorante come risposta JSON
        return response()->json($restaurant);
    }

    public function showid($id)
    {
        // Cerca il ristorante utilizzando l'id
        $restaurant = Restaurant::where('id', $id)->first();

        // Restituisci il ristorante come risposta JSON
        return response()->json($restaurant);
    }
}
