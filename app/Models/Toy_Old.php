<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Toy_Old {
    private static array $dashboard_toys = [
        [
            "name" => "Toy 1",
            "slug" => "toy-1",
            "price" => "100.000",
            "category" => "Figure",
            "image" => "AAA",
            "description" => "Toy 1 Description",
            "stock" => 3
        ],
        [
            "name" => "Toy 2",
            "slug" => "toy-2",
            "price" => "200.000",
            "category" => "Car",
            "image" => "BBB",
            "description" => "Toy 2 Description",
            "stock" => 4
        ],
        [
            "name" => "Toy 3",
            "slug" => "toy-3",
            "price" => "300.000",
            "category" => "Car",
            "image" => "BBB",
            "description" => "Toy 3 Description",
            "stock" => 4
        ],
        [
            "name" => "Toy 4",
            "slug" => "toy-4",
            "price" => "400.000",
            "category" => "Car",
            "image" => "BBB",
            "description" => "Toy 4 Description",
            "stock" => 4
        ],
    ];

    public static function all(): Collection {
        return collect(self::$dashboard_toys);
    }

    public static function find(string $slug) {
        $toys = static::all();
        return $toys->firstWhere('slug', $slug);
    }
}

