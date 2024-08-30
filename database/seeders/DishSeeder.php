<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newDish = new Dish();
        $newDish->name = 'Pizza Margherita';
        $newDish->price = 8.99;
        $newDish->restaurant_id = 1;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->price = 10.50;
        $newDish->restaurant_id = 2;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Risotto ai Funghi';
        $newDish->price = 12.00;
        $newDish->restaurant_id = 3;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Lasagne al Forno';
        $newDish->price = 9.80;
        $newDish->restaurant_id = 4;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Tagliata di Manzo';
        $newDish->price = 15.50;
        $newDish->restaurant_id = 5;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pollo alla Cacciatora';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 6;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Bistecca alla Fiorentina';
        $newDish->price = 18.99;
        $newDish->restaurant_id = 7;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Gnocchi al Pesto';
        $newDish->price = 8.50;
        $newDish->restaurant_id = 8;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->price = 10.20;
        $newDish->restaurant_id = 9;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Ravioli di Ricotta';
        $newDish->price = 12.50;
        $newDish->restaurant_id = 10;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Calamari Fritti';
        $newDish->price = 9.00;
        $newDish->restaurant_id = 11;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Quattro Stagioni';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 12;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Insalata Caprese';
        $newDish->price = 7.20;
        $newDish->restaurant_id = 13;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Zuppa di Pesce';
        $newDish->price = 14.30;
        $newDish->restaurant_id = 14;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Diavola';
        $newDish->price = 9.70;
        $newDish->restaurant_id = 15;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Parmigiana di Melanzane';
        $newDish->price = 10.80;
        $newDish->restaurant_id = 16;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Funghi e Prosciutto';
        $newDish->price = 10.00;
        $newDish->restaurant_id = 17;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Ossobuco alla Milanese';
        $newDish->price = 16.90;
        $newDish->restaurant_id = 18;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Vegetariana';
        $newDish->price = 9.50;
        $newDish->restaurant_id = 19;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Risotto allo Zafferano';
        $newDish->price = 12.80;
        $newDish->restaurant_id = 20;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Capricciosa';
        $newDish->price = 11.20;
        $newDish->restaurant_id = 1;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Penne all\'Arrabbiata';
        $newDish->price = 8.70;
        $newDish->restaurant_id = 2;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Napoli';
        $newDish->price = 9.80;
        $newDish->restaurant_id = 3;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Tonno e Cipolla';
        $newDish->price = 10.50;
        $newDish->restaurant_id = 4;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Boscaiola';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 5;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Quattro Formaggi';
        $newDish->price = 10.90;
        $newDish->restaurant_id = 6;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Salsiccia e Friarielli';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 7;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Patate e Gorgonzola';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 8;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Mare e Monti';
        $newDish->price = 12.50;
        $newDish->restaurant_id = 9;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Rucola e Crudo';
        $newDish->price = 12.00;
        $newDish->restaurant_id = 10;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Bufala e Pomodorini';
        $newDish->price = 13.50;
        $newDish->restaurant_id = 11;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Rustica';
        $newDish->price = 11.20;
        $newDish->restaurant_id = 12;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Montanara';
        $newDish->price = 11.70;
        $newDish->restaurant_id = 13;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Frutti di Mare';
        $newDish->price = 13.00;
        $newDish->restaurant_id = 14;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Contadina';
        $newDish->price = 10.80;
        $newDish->restaurant_id = 15;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Salmone e Rucola';
        $newDish->price = 13.20;
        $newDish->restaurant_id = 16;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Mortadella e Pistacchio';
        $newDish->price = 12.80;
        $newDish->restaurant_id = 17;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Scamorza e Speck';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 18;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Stracciatella e Pomodorini';
        $newDish->price = 13.50;
        $newDish->restaurant_id = 19;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Funghi e Tartufi';
        $newDish->price = 14.20;
        $newDish->restaurant_id = 20;
        $newDish->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newDish->image = 'https://via.placeholder.com/150';
        $newDish->visibility = true;
        $newDish->save();
    }
}
