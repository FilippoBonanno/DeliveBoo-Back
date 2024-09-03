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
        $data = [
            'restaurants' => Restaurant::orderByDesc('id')->get()
        ];
        return view('admin.restaurants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => Category::all()
        ];
        if (auth()->user()->restaurant) {
            $data = [
                'status' => 'You can create only 1 restaurant!',
            ];
            return view('admin.errorPage', $data);
        } else {
            return view('admin.restaurants.create', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tax_id' => 'required|string|max:255',
            'category_id' => 'required|array',
            'category_id.*' => 'required|numeric|integer|exists:categories,id',
            'img' => 'required|image',
        ]);


        $img = Storage::put('uploads', $data['img']);
        $data['img'] = $img;  //salva il percorso


        $newRestaurant = new Restaurant();
        $newRestaurant->fill($data);
        $newRestaurant->user_id = Auth::user()->id;
        $newRestaurant->save();
        $newRestaurant->categories()->sync($data['category_id']);
        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $data = [
            'restaurants' => $restaurant
        ];
        return view('admin.restaurants.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
