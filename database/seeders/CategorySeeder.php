<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newCategory = new Category();
        $newCategory->name = 'Pizza';
        $newCategory->save();

        $newCategory1 = new Category();
        $newCategory1->name = 'Italiano';
        $newCategory1->save();

        $newCategory2 = new Category();
        $newCategory2->name = 'Mediterraneo';
        $newCategory2->save();

        $newCategory3 = new Category();
        $newCategory3->name = 'Fast Food';
        $newCategory3->save();

        $newCategory4 = new Category();
        $newCategory4->name = 'Cinese';
        $newCategory4->save();

        $newCategory5 = new Category();
        $newCategory5->name = 'Giapponese';
        $newCategory5->save();

        $newCategory6 = new Category();
        $newCategory6->name = 'Messicano';
        $newCategory6->save();

        $newCategory7 = new Category();
        $newCategory7->name = 'Indiano';
        $newCategory7->save();

        $newCategory8 = new Category();
        $newCategory8->name = 'Francese';
        $newCategory8->save();

        $newCategory9 = new Category();
        $newCategory9->name = 'Greco';
        $newCategory9->save();

        $newCategory10 = new Category();
        $newCategory10->name = 'Vegetariano';
        $newCategory10->save();
    }
}
