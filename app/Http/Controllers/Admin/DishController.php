<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (isset(auth()->user()->restaurant->dish)) {
            $dishList = auth()->user()->restaurant->dish;
            $data = [
                "dishes" => $dishList,
            ];
            return view('admin.dishes.index', $data);
        } else {
            abort(403, 'Non hai un ristorante!');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (isset(auth()->user()->restaurant)) {
            return view('admin.dishes.create');
        } else {
            abort(403, 'Non hai un ristorante!');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset(auth()->user()->restaurant)) {
            $data = $request->validate([
                'name' => "required|min:1|max:255",
                'price' => "required",
                'description' => "required|min:1|max:255",
                'img' => "required|image",
                // 'visibility' => "required",
            ]);

            if ($request->has('img')) {
                $img_path = Storage::put('uploads', $request->img);
                $data['img'] = $img_path;
            }


            $newDish = new Dish();
            $newDish->fill($data);
            $newDish->restaurant_id = Auth::user()->restaurant->id;
            $newDish->visibility = true;
            $newDish->save();

            return redirect()->route('admin.dishes.show', $newDish);
        }else{
            abort(403, 'come ci sei arrivato?');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        $restaurant = auth()->user()->restaurant;

        if (!$restaurant || $restaurant->id != $dish->restaurant_id) {
            abort(403, 'Accesso non autorizzato');
        } else {
            $data = [
                "dish" => $dish
            ];

            return view('admin.dishes.show', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {

        $restaurant = auth()->user()->restaurant;

        if (!$restaurant || $restaurant->id != $dish->restaurant_id) {
            abort(403, 'Accesso non autorizzato');
        } else {
            $data = [
                "dish" => $dish
            ];

            return view('admin.dishes.edit', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate([
            'name' => "required|min:1|max:255",
            'price' => "required",
            'description' => "required|min:1|max:255",
            'img' => "required|image",
            'visibility' => "required",
        ]);

        if ($request->has('img')) {
            $img_path = Storage::put('uploads', $request->img);
            $data['img'] = $img_path;
            Storage::delete($dish->img);
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
        if(isset(auth()->user()->restaurant->dish)){
            return redirect()->route('admin.dishes.index');
        }else{
            return redirect()->route('admin.dashboard');
        }
        
    }
}
