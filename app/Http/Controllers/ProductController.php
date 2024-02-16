<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Family;
use App\Models\Variation;


class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $families = Family::all();
        $products = Product::with(['toppings.variations','price'])->get();

        $variationNames = Variation::pluck('variation', 'id');

        return Inertia::render('Products', [
            'categories' => $categories,
            'families' => $families,
            'products' => $products,
            'variationNames' => $variationNames,
        ]);
    }
}