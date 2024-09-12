<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newDish = new Dish();
        $newDish->name = 'Pizza Margherita';
        $newDish->price = 8.99;
        $newDish->restaurant_id = 1;
        $newDish->description = 'La classica pizza napoletana con pomodoro fresco, mozzarella di bufala e un tocco di basilico.';
        $newDish->img = asset('images/dishes/margherita.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Spaghetti alla Carbonara';
        $newDish->price = 10.50;
        $newDish->restaurant_id = 2;
        $newDish->description = 'Un piatto romano tradizionale con guanciale croccante, uova e pecorino romano.';
        $newDish->img = asset('images/dishes/carbonara.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Risotto ai Funghi';
        $newDish->price = 12.00;
        $newDish->restaurant_id = 3;
        $newDish->description = 'Risotto cremoso con funghi porcini, aromatizzato al vino bianco e parmigiano.';
        $newDish->img = asset('images/dishes/risotto_funghi.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Lasagne al Forno';
        $newDish->price = 9.80;
        $newDish->restaurant_id = 4;
        $newDish->description = 'Strati di pasta fresca, ragù di carne, besciamella e parmigiano, cotti al forno.';
        $newDish->img = asset('images/dishes/lasagna.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Tagliata di Manzo';
        $newDish->price = 15.50;
        $newDish->restaurant_id = 5;
        $newDish->description = 'Manzo succulento, tagliato a fettine, servito con rucola e scaglie di parmigiano.';
        $newDish->img = asset('images/dishes/tagliata.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Pollo alla Cacciatora';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 6;
        $newDish->description = 'Pollo cotto in umido con pomodori, olive, capperi e vino bianco, secondo la tradizione toscana.';
        $newDish->img = asset('images/dishes/pollo.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Bistecca alla Fiorentina';
        $newDish->price = 18.99;
        $newDish->restaurant_id = 7;
        $newDish->description = 'Tenera bistecca di Chianina, cotta alla griglia e servita al sangue.';
        $newDish->img = asset('images/dishes/fiorentina.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Gnocchi al Pesto';
        $newDish->price = 8.50;
        $newDish->restaurant_id = 8;
        $newDish->description = 'Gnocchi di patate fatti in casa conditi con pesto di basilico fresco e parmigiano.';
        $newDish->img = asset('images/dishes/gnocchi.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Fettuccine Alfredo';
        $newDish->price = 10.20;
        $newDish->restaurant_id = 9;
        $newDish->description = 'Pasta fresca con una cremosa salsa di burro e parmigiano, un classico della cucina italiana-americana.';
        $newDish->img = asset('images/dishes/alfredo.jpg');
        $newDish->visibility = true;
        $newDish->save();
    
        $newDish = new Dish();
        $newDish->name = 'Ravioli di Ricotta';
        $newDish->price = 12.50;
        $newDish->restaurant_id = 10;
        $newDish->description = 'Ravioli ripieni di ricotta fresca e spinaci, serviti con una salsa al burro e salvia.';
        $newDish->img = asset('images/dishes/ravioli.jpg');
        $newDish->visibility = true;
        $newDish->save();
    

        $newDish = new Dish();
        $newDish->name = 'Calamari Fritti';
        $newDish->price = 9.00;
        $newDish->restaurant_id = 11;
        $newDish->description = 'Calamari fritti dorati serviti con salsa tartara e limone.';
        $newDish->img = asset('images/dishes/calamari.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Pizza Quattro Stagioni';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 12;
        $newDish->description = 'Pizza con prosciutto, funghi, carciofi e olive, rappresenta le quattro stagioni.';
        $newDish->img = asset('images/dishes/capricciosa.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Insalata Caprese';
        $newDish->price = 7.20;
        $newDish->restaurant_id = 13;
        $newDish->description = 'Pomodori freschi, mozzarella di bufala e basilico, condito con olio d’oliva.';
        $newDish->img = asset('images/dishes/caprese.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Zuppa di Pesce';
        $newDish->price = 14.30;
        $newDish->restaurant_id = 14;
        $newDish->description = 'Deliziosa zuppa con frutti di mare freschi e pomodoro.';
        $newDish->img = asset('images/dishes/zuppa.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Pizza Diavola';
        $newDish->price = 9.70;
        $newDish->restaurant_id = 15;
        $newDish->description = 'Pizza piccante con salame e peperoncino per gli amanti dei sapori forti.';
        $newDish->img = asset('images/dishes/diavola.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Parmigiana di Melanzane';
        $newDish->price = 10.80;
        $newDish->restaurant_id = 16;
        $newDish->description = 'Strati di melanzane fritte, mozzarella e salsa di pomodoro gratinate al forno.';
        $newDish->img = asset('images/dishes/melanzane.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Pizza Funghi e Prosciutto';
        $newDish->price = 10.00;
        $newDish->restaurant_id = 17;
        $newDish->description = 'Pizza con funghi freschi e prosciutto cotto.';
        $newDish->img = asset('images/dishes/pizza_funghi.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Ossobuco alla Milanese';
        $newDish->price = 16.90;
        $newDish->restaurant_id = 18;
        $newDish->description = 'Classico piatto milanese con ossobuco cotto a fuoco lento in salsa di pomodoro e vino bianco.';
        $newDish->img = asset('images/dishes/ossobuco.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Pizza Vegetariana';
        $newDish->price = 9.50;
        $newDish->restaurant_id = 19;
        $newDish->description = 'Pizza ricca di verdure fresche di stagione.';
        $newDish->img = asset('images/dishes/pizza_funghi.jpg');
        $newDish->visibility = true;
        $newDish->save();
        
        $newDish = new Dish();
        $newDish->name = 'Risotto allo Zafferano';
        $newDish->price = 12.80;
        $newDish->restaurant_id = 20;
        $newDish->description = 'Cremoso risotto con zafferano e parmigiano, un classico della cucina lombarda.';
        $newDish->img = asset('images/dishes/zafferano.jpg');
        $newDish->visibility = true;
        $newDish->save();
        

        $newDish = new Dish();
        $newDish->name = 'Pizza Capricciosa';
        $newDish->price = 11.20;
        $newDish->restaurant_id = 1;
        $newDish->description = 'Pizza ricca con prosciutto, funghi, carciofi, olive e uovo.';
        $newDish->img = asset('images/dishes/capricciosa.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Penne all\'Arrabbiata';
        $newDish->price = 8.70;
        $newDish->restaurant_id = 2;
        $newDish->description = 'Pasta con sugo di pomodoro piccante e peperoncino.';
        $newDish->img = asset('images/dishes/pennette.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Napoli';
        $newDish->price = 9.80;
        $newDish->restaurant_id = 3;
        $newDish->description = 'Pizza classica con acciughe, capperi e origano.';
        $newDish->img = asset('images/dishes/margherita.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Tonno e Cipolla';
        $newDish->price = 10.50;
        $newDish->restaurant_id = 4;
        $newDish->description = 'Pizza saporita con tonno e cipolla rossa di Tropea.';
        $newDish->img = asset('images/dishes/capricciosa.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Boscaiola';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 5;
        $newDish->description = 'Pizza con funghi, salsiccia e mozzarella.';
        $newDish->img = asset('images/dishes/boscaiola.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Quattro Formaggi';
        $newDish->price = 10.90;
        $newDish->restaurant_id = 6;
        $newDish->description = 'Pizza cremosa con una miscela di quattro formaggi selezionati.';
        $newDish->img = asset('images/dishes/formaggi.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Salsiccia e Friarielli';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 7;
        $newDish->description = 'Pizza tradizionale napoletana con salsiccia e friarielli.';
        $newDish->img = asset('images/dishes/friarielli.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Patate e Gorgonzola';
        $newDish->price = 11.00;
        $newDish->restaurant_id = 8;
        $newDish->description = 'Pizza ricca con fette di patate e gorgonzola cremoso.';
        $newDish->img = asset('images/dishes/formaggi.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Mare e Monti';
        $newDish->price = 12.50;
        $newDish->restaurant_id = 9;
        $newDish->description = 'Pizza speciale con frutti di mare e funghi porcini.';
        $newDish->img = asset('images/dishes/maremonti.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Rucola e Crudo';
        $newDish->price = 12.00;
        $newDish->restaurant_id = 10;
        $newDish->description = 'Pizza con prosciutto crudo, rucola fresca e scaglie di parmigiano.';
        $newDish->img = asset('images/dishes/rucola.jpg');
        $newDish->visibility = true;
        $newDish->save();


        $newDish = new Dish();
        $newDish->name = 'Pizza Bufala e Pomodorini';
        $newDish->price = 13.50;
        $newDish->restaurant_id = 11;
        $newDish->description = 'Pizza con mozzarella di bufala DOP, pomodorini freschi e basilico.';
        $newDish->img = asset('images/dishes/rucola.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Rustica';
        $newDish->price = 11.20;
        $newDish->restaurant_id = 12;
        $newDish->description = 'Pizza saporita con salsiccia, patate e rosmarino.';
        $newDish->img = asset('images/dishes/boscaiola.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Montanara';
        $newDish->price = 11.70;
        $newDish->restaurant_id = 13;
        $newDish->description = 'Pizza rustica con funghi porcini, salsiccia e mozzarella.';
        $newDish->img = asset('images/dishes/boscaiola.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Frutti di Mare';
        $newDish->price = 13.00;
        $newDish->restaurant_id = 14;
        $newDish->description = 'Pizza con frutti di mare freschi, pomodorini e prezzemolo.';
        $newDish->img = asset('images/dishes/maremonti.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Contadina';
        $newDish->price = 10.80;
        $newDish->restaurant_id = 15;
        $newDish->description = 'Pizza rustica con peperoni, melanzane e zucchine grigliate.';
        $newDish->img = asset('images/dishes/boscaiola.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Salmone e Rucola';
        $newDish->price = 13.20;
        $newDish->restaurant_id = 16;
        $newDish->description = 'Pizza delicata con salmone affumicato, rucola e limone.';
        $newDish->img = asset('images/dishes/pizza_funghi.jpg');
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Mortadella e Pistacchio';
        $newDish->price = 12.80;
        $newDish->restaurant_id = 17;
        $newDish->description = 'Pizza gourmet con mortadella, crema di pistacchio e mozzarella.';
        $newDish->img = "https://loremflickr.com/320/240/food?random=" . rand(1, 10000);
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Scamorza e Speck';
        $newDish->price = 11.50;
        $newDish->restaurant_id = 18;
        $newDish->description = 'Pizza affumicata con scamorza, speck e noci croccanti.';
        $newDish->img = "https://loremflickr.com/320/240/food?random=" . rand(1, 10000);
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Stracciatella e Pomodorini';
        $newDish->price = 13.50;
        $newDish->restaurant_id = 19;
        $newDish->description = 'Pizza fresca con stracciatella di burrata e pomodorini ciliegini.';
        $newDish->img = "https://loremflickr.com/320/240/food?random=" . rand(1, 10000);
        $newDish->visibility = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->name = 'Pizza Funghi e Tartufi';
        $newDish->price = 14.20;
        $newDish->restaurant_id = 20;
        $newDish->description = 'Pizza gourmet con funghi porcini e crema di tartufo.';
        $newDish->img = "https://loremflickr.com/320/240/food?random=" . rand(1, 10000);
        $newDish->visibility = true;
        $newDish->save();

    }
}
