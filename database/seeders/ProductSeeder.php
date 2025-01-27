<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Pizza',
                'description' => 'Delicious cheese pizza.',
                'price' => 10.99,
                'image' => 'pizza.jpg',
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Burger',
                'description' => 'Juicy beef burger.',
                'price' => 8.99,
                'image' => 'burger.jpg',
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sushi',
                'description' => 'Fresh salmon sushi.',
                'price' => 15.99,
                'image' => 'sushi.jpg',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasta',
                'description' => 'Creamy Alfredo pasta.',
                'price' => 12.99,
                'image' => 'pasta.jpg',
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taco',
                'description' => 'Spicy chicken taco.',
                'price' => 5.99,
                'image' => 'taco.jpg',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Salad',
                'description' => 'Healthy green salad.',
                'price' => 7.99,
                'image' => 'salad.jpg',
                'stock' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steak',
                'description' => 'Grilled ribeye steak.',
                'price' => 25.99,
                'image' => 'steak.jpg',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ice Cream',
                'description' => 'Vanilla ice cream.',
                'price' => 4.99,
                'image' => 'icecream.jpg',
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sushi Roll',
                'description' => 'Spicy tuna roll.',
                'price' => 9.99,
                'image' => 'sushiroll.jpg',
                'stock' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fried Rice',
                'description' => 'Vegetable fried rice.',
                'price' => 11.99,
                'image' => 'friedrice.jpg',
                'stock' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
