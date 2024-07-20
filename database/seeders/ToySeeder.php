<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ToySeeder extends Seeder
{
    public function run()
    {
        // Dapatkan kategori yang ada
        $categories = DB::table('categories')->pluck('category_id', 'name');

        // Buat data mainan yang terkait dengan kategori tertentu
        DB::table('toys')->insert([
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Mini Truck',
                'image' => 'image1.jpg',
                'price' => '100',
                'description' => 'A detailed action figure of Superman.',
                'stock' => 10,
                'category_id' => $categories['Action Figures'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Dinosaur',
                'image' => 'image2.jpg',
                'price' => '200',
                'description' => 'A fast remote control car.',
                'stock' => 15,
                'category_id' => $categories['Vehicles'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Bear Doll',
                'image' => 'image3.jpg',
                'price' => '300',
                'description' => 'An educational puzzle for kids.',
                'stock' => 20,
                'category_id' => $categories['Educational Toys'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Educational Puzzle',
                'image' => 'image4.jpg',
                'price' => '400',
                'description' => 'An educational puzzle for kids.',
                'stock' => 20,
                'category_id' => $categories['Educational Toys'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Toy 5',
                'image' => 'image4.jpg',
                'price' => '500',
                'description' => 'An educational puzzle for kids.',
                'stock' => 20,
                'category_id' => $categories['Educational Toys'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Toy 6',
                'image' => 'image4.jpg',
                'price' => '600',
                'description' => 'An educational puzzle for kids.',
                'stock' => 20,
                'category_id' => $categories['Educational Toys'],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'toy_id' => Str::uuid()->toString(),
                'name' => 'Toy 7',
                'image' => 'image4.jpg',
                'price' => '700',
                'description' => 'An educational puzzle for kids.',
                'stock' => 20,
                'category_id' => $categories['Educational Toys'],
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

