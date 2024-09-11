<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 1;
        $newOrder->total_price = '20';
        $newOrder->name = 'michele';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via prova 1';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 12341234';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        //ORDINI FITTIZZI PER IL RISTORANTE OSTERIA DEL GUSTO ID 1 

        $faker = Faker::create();
        $restaurantId = 1; // ID del ristorante fisso
        $now = Carbon::now();

        for ($i = 0; $i < 60; $i++) {
            // Genera una data casuale negli ultimi 12 mesi
            $randomDate = Carbon::now()->subDays(rand(0, 365))->setTime(rand(0, 23), rand(0, 59), 0);

            // Crea un nuovo ordine con dati casuali
            $newOrder = new Order();
            $newOrder->order_date = $randomDate;
            $newOrder->created_at = $newOrder->order_date;
            $newOrder->restaurant_id = $restaurantId;
            $newOrder->total_price = $faker->randomFloat(2, 10, 100); // Prezzo casuale tra 10 e 100
            $newOrder->name = $faker->firstName();
            $newOrder->email = $faker->email;
            $newOrder->address = $faker->streetAddress;
            $newOrder->city = 'Milano';
            $newOrder->province = 'Milano';
            $newOrder->postalcode = $faker->postcode;
            $newOrder->country = 'Italia';
            $newOrder->phone = $faker->phoneNumber;
            $newOrder->transaction_id = rand(1000, 9999); // ID transazione fittizio
            $newOrder->save();
        }


        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 2;
        $newOrder->total_price = '25';
        $newOrder->name = 'luca';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via esempio 2';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 23452345';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        //ORDINI FITTIZZI PER IL RISTORANTE OSTERIA DEL GUSTO ID 2 

        $faker = Faker::create();
        $restaurantId = 2; // ID del ristorante fisso
        $now = Carbon::now();

        for ($i = 0; $i < 90; $i++) {
            // Genera una data casuale negli ultimi 12 mesi
            $randomDate = Carbon::now()->subDays(rand(0, 365))->setTime(rand(0, 23), rand(0, 59), 0);

            // Crea un nuovo ordine con dati casuali
            $newOrder = new Order();
            $newOrder->order_date = $randomDate;
            $newOrder->created_at = $newOrder->order_date;
            $newOrder->restaurant_id = $restaurantId;
            $newOrder->total_price = $faker->randomFloat(2, 10, 100); // Prezzo casuale tra 10 e 100
            $newOrder->name = $faker->firstName();
            $newOrder->email = $faker->email;
            $newOrder->address = $faker->streetAddress;
            $newOrder->city = 'Milano';
            $newOrder->province = 'Milano';
            $newOrder->postalcode = $faker->postcode;
            $newOrder->country = 'Italia';
            $newOrder->phone = $faker->phoneNumber;
            $newOrder->transaction_id = rand(1000, 9999); // ID transazione fittizio
            $newOrder->save();
        }

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 3;
        $newOrder->total_price = '30';
        $newOrder->name = 'giovanna';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via test 3';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 34563456';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        //ORDINI FITTIZZI PER IL RISTORANTE OSTERIA DEL GUSTO ID 3 

        $faker = Faker::create();
        $restaurantId = 3; // ID del ristorante fisso
        $now = Carbon::now();

        for ($i = 0; $i < 70; $i++) {
            // Genera una data casuale negli ultimi 12 mesi
            $randomDate = Carbon::now()->subDays(rand(0, 365))->setTime(rand(0, 23), rand(0, 59), 0);

            // Crea un nuovo ordine con dati casuali
            $newOrder = new Order();
            $newOrder->order_date = $randomDate;
            $newOrder->created_at = $newOrder->order_date;
            $newOrder->restaurant_id = $restaurantId;
            $newOrder->total_price = $faker->randomFloat(2, 10, 100); // Prezzo casuale tra 10 e 100
            $newOrder->name = $faker->firstName();
            $newOrder->email = $faker->email;
            $newOrder->address = $faker->streetAddress;
            $newOrder->city = 'Milano';
            $newOrder->province = 'Milano';
            $newOrder->postalcode = $faker->postcode;
            $newOrder->country = 'Italia';
            $newOrder->phone = $faker->phoneNumber;
            $newOrder->transaction_id = rand(1000, 9999); // ID transazione fittizio
            $newOrder->save();
        }

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 4;
        $newOrder->total_price = '15';
        $newOrder->name = 'alessandro';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via campione 4';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 45674567';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 5;
        $newOrder->total_price = '22';
        $newOrder->name = 'maria';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via demo 5';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 56785678';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 6;
        $newOrder->total_price = '18';
        $newOrder->name = 'roberto';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via prova 6';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 67896789';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 7;
        $newOrder->total_price = '27';
        $newOrder->name = 'francesca';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via esempio 7';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 78907890';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 8;
        $newOrder->total_price = '24';
        $newOrder->name = 'giorgio';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via test 8';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 89018901';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 9;
        $newOrder->total_price = '35';
        $newOrder->name = 'chiara';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via campione 9';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 90129012';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 10;
        $newOrder->total_price = '20';
        $newOrder->name = 'davide';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via demo 10';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 12341235';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 1;
        $newOrder->total_price = '28';
        $newOrder->name = 'eleonora';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via prova 11';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 23452346';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 2;
        $newOrder->total_price = '33';
        $newOrder->name = 'matteo';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via esempio 12';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 34563457';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 3;
        $newOrder->total_price = '26';
        $newOrder->name = 'valentina';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via test 13';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 45674568';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 4;
        $newOrder->total_price = '19';
        $newOrder->name = 'giulio';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via campione 14';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 56785679';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 5;
        $newOrder->total_price = '31';
        $newOrder->name = 'ilaria';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via demo 15';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 67896780';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 6;
        $newOrder->total_price = '29';
        $newOrder->name = 'lorenzo';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via prova 16';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 78907891';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 7;
        $newOrder->total_price = '21';
        $newOrder->name = 'federica';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via esempio 17';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 89018902';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 8;
        $newOrder->total_price = '23';
        $newOrder->name = 'riccardo';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via test 18';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 90129013';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 9;
        $newOrder->total_price = '34';
        $newOrder->name = 'sara';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via campione 19';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 12341236';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 10;
        $newOrder->total_price = '17';
        $newOrder->name = 'andrea';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via demo 20';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 23452347';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 1;
        $newOrder->total_price = '32';
        $newOrder->name = 'antonella';
        $newOrder->email = 'prova@ciao.it';
        $newOrder->address = 'via prova 21';
        $newOrder->city = 'Milano';
        $newOrder->province = 'Milano';
        $newOrder->postalcode = '20019';
        $newOrder->country = 'Italia';
        $newOrder->phone = '+39 34563458';
        $newOrder->transaction_id = 1;
        $newOrder->save();
    }
}
