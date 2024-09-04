<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $data = [
            'categories' => Category::all()
        ];
        return view('auth.register', $data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // valido i dati del ristorante
            'restaurant_name' => ['required', 'string', 'max:255'],
            'restaurant_address' => ['required', 'string', 'max:255'],
            'restaurant_tax_id' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'array'],
            'category_id.*' => ['required', 'numeric', 'integer', 'exists:categories,id'],
            'restaurant_img' => ['image']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        Auth::login($user);

        // Creo un nuovo ristorante dopo che l'utente e' loggato
        $img = Storage::put('uploads', $request['restaurant_img']);
        $request['restaurant_img'] = $img;  //salvo il percorso

        $newRestaurant = new Restaurant();
        $newRestaurant->name = $request->restaurant_name;
        $newRestaurant->address = $request->restaurant_address;
        $newRestaurant->tax_id = $request->restaurant_tax_id;
        $newRestaurant->img = $request['restaurant_img'];
        $newRestaurant->user_id = Auth::user()->id;
        $newRestaurant->save();
        $newRestaurant->categories()->sync($request->category_id);



        return redirect(RouteServiceProvider::HOME);
    }
}
