<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use League\CommonMark\Normalizer\SlugNormalizer;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newRestaurant = new Restaurant();
    $newRestaurant->name = 'Trattoria da Mario';
    $newRestaurant->address = 'Via Roma 10, Milano';
    //immagine locale
    $newRestaurant->img = asset('images/restaurants/trattoria_da_mario.jpg');
    $newRestaurant->slug = Str::slug($newRestaurant->name);  
    $newRestaurant->tax_id = 1001;
    $newRestaurant->user_id = 1;
    $newRestaurant->save();
    $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Osteria del Gusto';
        $newRestaurant->address = 'Piazza della Libertà 5, Firenze';
        $newRestaurant->img = asset('images/restaurants/Osteria_del_Gusto.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1002;
        $newRestaurant->user_id = 2;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Il Vecchio Mulino';
        $newRestaurant->address = 'Corso Vittorio Emanuele 22, Napoli';
        $newRestaurant->img = asset('images/restaurants/Il_Vecchio_Mulino.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1003;
        $newRestaurant->user_id = 3;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Bella Napoli';
        $newRestaurant->address = 'Via Partenope 15, Napoli';
        $newRestaurant->img = asset('images/restaurants/Ristorante_Bella_Napoli.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1004;
        $newRestaurant->user_id = 4;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Cucina Mediterranea';
        $newRestaurant->address = 'Lungomare 8, Bari';
        $newRestaurant->img = asset('images/restaurants/Cucina_Mediterranea.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1005;
        $newRestaurant->user_id = 5;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Pergola';
        $newRestaurant->address = 'Via Veneto 20, Roma';
        $newRestaurant->img = asset('images/restaurants/La_Pergola.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1006;
        $newRestaurant->user_id = 6;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Girasole';
        $newRestaurant->address = 'Via Garibaldi 14, Torino';
        $newRestaurant->img = asset('images/restaurants/Ristorante_Il_Girasole.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1007;
        $newRestaurant->user_id = 7;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Pizzeria da Luigi';
        $newRestaurant->address = 'Via Napoli 7, Bologna';
        $newRestaurant->img = asset('images/restaurants/Pizzeria_da_Luigi.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1008;
        $newRestaurant->user_id = 8;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Fenice';
        $newRestaurant->address = 'Via Dante 30, Venezia';
        $newRestaurant->img = asset('images/restaurants/Ristorante_La_Fenice.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1009;
        $newRestaurant->user_id = 9;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Al Forno';
        $newRestaurant->address = 'Via Montenapoleone 18, Milano';
        $newRestaurant->img = asset('images/restaurants/Al_Forno.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1010;
        $newRestaurant->user_id = 10;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Dolce Vita';
        $newRestaurant->address = 'Via Condotti 5, Roma';
        $newRestaurant->img = asset('images/restaurants/Ristorante_La_Dolce_Vita.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1011;
        $newRestaurant->user_id = 11;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Taverna di Bacco';
        $newRestaurant->address = 'Via Toledo 12, Napoli';
        $newRestaurant->img = asset('images/restaurants/La_Taverna_di_Bacco.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1012;
        $newRestaurant->user_id = 12;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Mare';
        $newRestaurant->address = 'Via Lungomare 21, Genova';
        $newRestaurant->img = asset('images/restaurants/Ristorante_Il_Mare.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1013;
        $newRestaurant->user_id = 13;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Lanterna';
        $newRestaurant->address = 'Via Milano 9, Torino';
        $newRestaurant->img = asset('images/restaurants/Ristorante_La_Lanterna.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1014;
        $newRestaurant->user_id = 14;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Il Cortile';
        $newRestaurant->address = 'Via Verdi 16, Firenze';
        $newRestaurant->img = asset('images/restaurants/Il_Cortile.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1015;
        $newRestaurant->user_id = 15;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Cantina';
        $newRestaurant->address = 'Via Mazzini 4, Pisa';
        $newRestaurant->img = asset('images/restaurants/La_Cantina.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1016;
        $newRestaurant->user_id = 16;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = "Ristorante L'Orto";
        $newRestaurant->address = 'Via De Rossi 3, Bari';
        $newRestaurant->img = asset("images/restaurants/Ristorante_L'Orto.jpg");
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1017;
        $newRestaurant->user_id = 17;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Sogno';
        $newRestaurant->address = 'Via Duomo 1, 2, Napoli';
        $newRestaurant->img = asset('images/restaurants/Ristorante_Il_Sogno.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1018;
        $newRestaurant->user_id = 18;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Conchiglia';
        $newRestaurant->address = 'Via Salaria 17, Roma';
        $newRestaurant->img = asset('images/restaurants/Ristorante_La_Conchiglia.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1019;
        $newRestaurant->user_id = 19;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Castello';
        $newRestaurant->address = 'Via Castello 11, Siena';
        $newRestaurant->img = asset('images/restaurants/Ristorante_Il_Castello.jpg');
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->tax_id = 1020;
        $newRestaurant->user_id = 20;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1, 5), rand(6, 10)]);
    }
}