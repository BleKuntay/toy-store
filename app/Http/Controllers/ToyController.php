<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $category = $request->input('category');
        $price = $request->input('price');
        $query = Toy::query();

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        if ($category) {
            $query->where('category_id', $category);
        }

        if ($price) {
            $query->where('price', '<=', $price);
        }

        $toys = $query->get();
        $categories = Category::all();

        return view('app', [
            'toys' => $toys,
            'categories' => $categories,
        ]);
    }

    public function show(Toy $toy) {
        return view('toy', [
            'toy' => $toy
        ]);
    }
}
