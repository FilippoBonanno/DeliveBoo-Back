<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        // Recupero la categoria dalla Qery
        $categories = $request->query('categories');

        // Recupero tutti i ristoranti dal DB e le relative cateogorie e ristoratori
        $restaurants = Restaurant::with(['dishes', 'user', 'categories']);

        // 2. Filtro per categorie, se presente con funzione di CallBack (la funzione whereHas() si aspetta una funzione callback come secondo argomento)
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $restaurants->whereHas('categories', function ($q) use ($category) {
                    $q->where('name', $category);
                });
            }
        }

        // Esegui la query e restituisci i risultati
        $restaurants = $restaurants->get();

        return response()->json($restaurants);
    }

    public function show($id)
    {
        $restaurant = Restaurant::with('categories', 'dishes', 'user')->findOrFail($id);
        return response()->json($restaurant);
    }
}
