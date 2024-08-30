<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Trattoria da Mario';
        $newRestaurant->address = 'Via Roma 10, Milano';
        $newRestaurant->img = 'trattoria_mario.jpg';
        $newRestaurant->tax_id = 1001;
        $newRestaurant->user_id = 1;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Osteria del Gusto';
        $newRestaurant->address = 'Piazza della Libertà 5, Firenze';
        $newRestaurant->img = 'osteria_gusto.jpg';
        $newRestaurant->tax_id = 1002;
        $newRestaurant->user_id = 2;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Il Vecchio Mulino';
        $newRestaurant->address = 'Corso Vittorio Emanuele 22, Napoli';
        $newRestaurant->img = 'vecchio_mulino.jpg';
        $newRestaurant->tax_id = 1003;
        $newRestaurant->user_id = 3;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Bella Napoli';
        $newRestaurant->address = 'Via Partenope 15, Napoli';
        $newRestaurant->img = 'bella_napoli.jpg';
        $newRestaurant->tax_id = 1004;
        $newRestaurant->user_id = 4;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Cucina Mediterranea';
        $newRestaurant->address = 'Lungomare 8, Bari';
        $newRestaurant->img = 'cucina_mediterranea.jpg';
        $newRestaurant->tax_id = 1005;
        $newRestaurant->user_id = 5;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Pergola';
        $newRestaurant->address = 'Via Veneto 20, Roma';
        $newRestaurant->img = 'la_pergola.jpg';
        $newRestaurant->tax_id = 1006;
        $newRestaurant->user_id = 6;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Girasole';
        $newRestaurant->address = 'Via Garibaldi 14, Torino';
        $newRestaurant->img = 'il_girasole.jpg';
        $newRestaurant->tax_id = 1007;
        $newRestaurant->user_id = 7;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Pizzeria da Luigi';
        $newRestaurant->address = 'Via Napoli 7, Bologna';
        $newRestaurant->img = 'pizzeria_luigi.jpg';
        $newRestaurant->tax_id = 1008;
        $newRestaurant->user_id = 8;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Fenice';
        $newRestaurant->address = 'Via Dante 30, Venezia';
        $newRestaurant->img = 'la_fenice.jpg';
        $newRestaurant->tax_id = 1009;
        $newRestaurant->user_id = 9;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Al Forno';
        $newRestaurant->address = 'Via Montenapoleone 18, Milano';
        $newRestaurant->img = 'al_forno.jpg';
        $newRestaurant->tax_id = 1010;
        $newRestaurant->user_id = 10;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Dolce Vita';
        $newRestaurant->address = 'Via Condotti 5, Roma';
        $newRestaurant->img = 'la_dolce_vita.jpg';
        $newRestaurant->tax_id = 1011;
        $newRestaurant->user_id = 11;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Taverna di Bacco';
        $newRestaurant->address = 'Via Toledo 12, Napoli';
        $newRestaurant->img = 'taverna_bacco.jpg';
        $newRestaurant->tax_id = 1012;
        $newRestaurant->user_id = 12;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Mare';
        $newRestaurant->address = 'Via Lungomare 21, Genova';
        $newRestaurant->img = 'il_mare.jpg';
        $newRestaurant->tax_id = 1013;
        $newRestaurant->user_id = 13;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Lanterna';
        $newRestaurant->address = 'Via Milano 9, Torino';
        $newRestaurant->img = 'la_lanterna.jpg';
        $newRestaurant->tax_id = 1014;
        $newRestaurant->user_id = 14;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Il Cortile';
        $newRestaurant->address = 'Via Verdi 16, Firenze';
        $newRestaurant->img = 'il_cortile.jpg';
        $newRestaurant->tax_id = 1015;
        $newRestaurant->user_id = 15;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'La Cantina';
        $newRestaurant->address = 'Via Mazzini 4, Pisa';
        $newRestaurant->img = 'la_cantina.jpg';
        $newRestaurant->tax_id = 1016;
        $newRestaurant->user_id = 16;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante L\'Orto';
        $newRestaurant->address = 'Via De Rossi 3, Bari';
        $newRestaurant->img = 'l_orto.jpg';
        $newRestaurant->tax_id = 1017;
        $newRestaurant->user_id = 17;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Sogno';
        $newRestaurant->address = 'Via Duomo 1, 2, Napoli';
        $newRestaurant->img = 'il_sogno.jpg';
        $newRestaurant->tax_id = 1018;
        $newRestaurant->user_id = 18;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante La Conchiglia';
        $newRestaurant->address = 'Via Salaria 17, Roma';
        $newRestaurant->img = 'la_conchiglia.jpg';
        $newRestaurant->tax_id = 1019;
        $newRestaurant->user_id = 19;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = 'Ristorante Il Castello';
        $newRestaurant->address = 'Via Castello 11, Siena';
        $newRestaurant->img = 'il_castello.jpg';
        $newRestaurant->tax_id = 1020;
        $newRestaurant->user_id = 20;
        $newRestaurant->save();
        $newRestaurant->categories()->attach([rand(1,5), rand(6,10)]);
    }
}
