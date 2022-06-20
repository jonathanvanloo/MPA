<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'img' => 'https://cdn.webshopapp.com/shops/297404/files/350382788/800x1024x1/glock-17-gen4.jpg',
            'title' => 'Glock 17',
            'description' => 'poooo mooi ding',
            'price' => 500
        ]); $product->save();
        $product = new Product([
            'img' => 'https://media.istockphoto.com/photos/ak-47-picture-id177391994?k=20&m=177391994&s=612x612&w=0&h=3tzIwo3C2BcDDpf7_SpYHFcvOCo5qJqcntfty1KCULA=',
            'title' => 'AK 47',
            'description' => 'blijft maar schieten',
            'price' => 1500
        ]); $product->save();
        $product = new Product([
            'img' => 'https://i0.wp.com/www.trisonline.nl/wp-content/uploads/2015/06/M61_Uzi.png?resize=1000%2C565',
            'title' => 'uzi',
            'description' => 'snel en compact',
            'price' => 1000
        ]); $product->save();
        $product = new Product([
            'img' => 'https://www.smith-wesson.com/sites/default/files/styles/product_main/public/firearms/images/11818_01_lg.jpg?itok=F9I2Y8AR',
            'title' => 'smith and wesson',
            'description' => 'M&P M2.0',
            'price' => 700
        ]); $product->save();
        $product = new Product([
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/MP9.png',
            'title' => 'MP9',
            'description' => 'snel piew piew ding',
            'price' => 1000
        ]); $product->save();
        $product = new Product([
            'img' => 'https://static5.gunfire.com/dut_pl_RPG-7-grenade-launcher-replica-1152225613_1.jpg',
            'title' => 'RPG',
            'description' => 'opblazen',
            'price' => '2000'
        ]);
        $product->save();
    }
}
