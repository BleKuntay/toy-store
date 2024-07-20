<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_id' => Str::uuid()->toString(),
                'name' => 'Action Figures',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => Str::uuid()->toString(),
                'name' => 'Vehicles',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => Str::uuid()->toString(),
                'name' => 'Educational Toys',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
