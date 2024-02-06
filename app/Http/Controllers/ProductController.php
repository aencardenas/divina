<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Family;

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $families = Family::all();
        $products = Product::all();

        return Inertia::render('Products', [
            'categories' => $categories,
            'families' => $families,
            'products' => $products,
        ]);

    }
    

}