<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

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

        // Restituisci il ristorante come risposta JSON
        return response()->json($restaurant);
    }
}
