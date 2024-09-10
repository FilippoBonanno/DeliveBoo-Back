<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $newOrder->buyer_name = 'michele';
        $newOrder->buyer_address = 'via prova 1';
        $newOrder->buyer_phone = '+39 12341234';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 2;
        $newOrder->total_price = '25';
        $newOrder->buyer_name = 'luca';
        $newOrder->buyer_address = 'via esempio 2';
        $newOrder->buyer_phone = '+39 23452345';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 3;
        $newOrder->total_price = '30';
        $newOrder->buyer_name = 'giovanna';
        $newOrder->buyer_address = 'via test 3';
        $newOrder->buyer_phone = '+39 34563456';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 4;
        $newOrder->total_price = '15';
        $newOrder->buyer_name = 'alessandro';
        $newOrder->buyer_address = 'via campione 4';
        $newOrder->buyer_phone = '+39 45674567';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 5;
        $newOrder->total_price = '22';
        $newOrder->buyer_name = 'maria';
        $newOrder->buyer_address = 'via demo 5';
        $newOrder->buyer_phone = '+39 56785678';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 6;
        $newOrder->total_price = '18';
        $newOrder->buyer_name = 'roberto';
        $newOrder->buyer_address = 'via prova 6';
        $newOrder->buyer_phone = '+39 67896789';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 7;
        $newOrder->total_price = '27';
        $newOrder->buyer_name = 'francesca';
        $newOrder->buyer_address = 'via esempio 7';
        $newOrder->buyer_phone = '+39 78907890';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 8;
        $newOrder->total_price = '24';
        $newOrder->buyer_name = 'giorgio';
        $newOrder->buyer_address = 'via test 8';
        $newOrder->buyer_phone = '+39 89018901';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 9;
        $newOrder->total_price = '35';
        $newOrder->buyer_name = 'chiara';
        $newOrder->buyer_address = 'via campione 9';
        $newOrder->buyer_phone = '+39 90129012';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 10;
        $newOrder->total_price = '20';
        $newOrder->buyer_name = 'davide';
        $newOrder->buyer_address = 'via demo 10';
        $newOrder->buyer_phone = '+39 12341235';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 1;
        $newOrder->total_price = '28';
        $newOrder->buyer_name = 'eleonora';
        $newOrder->buyer_address = 'via prova 11';
        $newOrder->buyer_phone = '+39 23452346';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 2;
        $newOrder->total_price = '33';
        $newOrder->buyer_name = 'matteo';
        $newOrder->buyer_address = 'via esempio 12';
        $newOrder->buyer_phone = '+39 34563457';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 3;
        $newOrder->total_price = '26';
        $newOrder->buyer_name = 'valentina';
        $newOrder->buyer_address = 'via test 13';
        $newOrder->buyer_phone = '+39 45674568';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 4;
        $newOrder->total_price = '19';
        $newOrder->buyer_name = 'giulio';
        $newOrder->buyer_address = 'via campione 14';
        $newOrder->buyer_phone = '+39 56785679';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 5;
        $newOrder->total_price = '31';
        $newOrder->buyer_name = 'ilaria';
        $newOrder->buyer_address = 'via demo 15';
        $newOrder->buyer_phone = '+39 67896780';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 6;
        $newOrder->total_price = '29';
        $newOrder->buyer_name = 'lorenzo';
        $newOrder->buyer_address = 'via prova 16';
        $newOrder->buyer_phone = '+39 78907891';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 7;
        $newOrder->total_price = '21';
        $newOrder->buyer_name = 'federica';
        $newOrder->buyer_address = 'via esempio 17';
        $newOrder->buyer_phone = '+39 89018902';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 8;
        $newOrder->total_price = '23';
        $newOrder->buyer_name = 'riccardo';
        $newOrder->buyer_address = 'via test 18';
        $newOrder->buyer_phone = '+39 90129013';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 9;
        $newOrder->total_price = '34';
        $newOrder->buyer_name = 'sara';
        $newOrder->buyer_address = 'via campione 19';
        $newOrder->buyer_phone = '+39 12341236';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 10;
        $newOrder->total_price = '17';
        $newOrder->buyer_name = 'andrea';
        $newOrder->buyer_address = 'via demo 20';
        $newOrder->buyer_phone = '+39 23452347';
        $newOrder->transaction_id = 1;
        $newOrder->save();

        $newOrder = new Order();
        $newOrder->order_date = '2024-12-31 14:05:00';
        $newOrder->restaurant_id = 1;
        $newOrder->total_price = '32';
        $newOrder->buyer_name = 'antonella';
        $newOrder->buyer_address = 'via prova 21';
        $newOrder->buyer_phone = '+39 34563458';
        $newOrder->transaction_id = 1;
        $newOrder->save();
    }
}
