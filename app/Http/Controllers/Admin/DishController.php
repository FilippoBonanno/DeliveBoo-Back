<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishList = Dish::all();

        $data = [
            "dishes" => $dishList,
        ];

        return view('admin.dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|min:1|max:255", 
            'price' => "required", 
            'restaurant_id' => "required", 
            'description' => "required|min:1|max:255", 
            'img' => "required|image", 
            'visibility' => "required",
        ]);

        if($request->has('img')) {
            $img_path = Storage::put('uploads', $request->img);
            $data['img'] = $img_path;
        }

        $newDish = new Dish();
        $newDish->fill($data);
        $newDish->save();

        return redirect()->route('admin.dishes.show', $newDish);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        $data = [
            "dish" => $dish
        ];

        return view('admin.dishes.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {


        $data = [
            'dish' => $dish,
            
        ];

        return view('admin.dishes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate([
            'name' => "required|min:1|max:255", 
            'price' => "required", 
            'restaurant_id' => "required", 
            'description' => "required|min:1|max:255", 
            'img' => "required|image", 
            'visibility' => "required",
        ]);

        if($request->has('img')) {
            $img_path = Storage::put('uploads', $request->img);
            $data['img'] = $img_path;  

        }

        $dish->update($data);

        return redirect()->route('admin.dishes.show', $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        Storage::delete($dish->img);
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}
