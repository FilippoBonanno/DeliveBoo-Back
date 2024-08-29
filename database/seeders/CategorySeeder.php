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

        $newCategory = new Category();
        $newCategory->name = 'Italiano';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Mediterraneo';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Fast Food';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Cinese';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Giapponese';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Messicano';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Indiano';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Francese';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Greco';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Vegetariano';
        $newCategory->save();
    }
}
