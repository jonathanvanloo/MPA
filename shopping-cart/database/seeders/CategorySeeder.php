<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Category([
            'name' => 'Automatic',
        ]); $product->save();

        $product = new Category([
            'name' => 'Semi automatic',
        ]); $product->save();

        $product = new Category([
            'name' => 'Bolt action',
        ]); $product->save();

        $product = new Category([
            'name' => 'Rocket',
        ]); $product->save();
    }
}
