<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\CategoryService;
use Inertia\Inertia;

class CategoryController extends Controller
{
    // Private property to store the instance of CategoryService
    private $categoryService;

    // Constructor that receives an instance of CategoryService
    public function __construct(CategoryService $categoryService)
    {
        //Asign the instance of CategoryService to the private property
        $this->categoryService = $categoryService;
    }

    // Method to handle the request for the 'Products' view
    public function index()
    {

        // Use the CategoryService to gel all categories
        $categories = $this->categoryService->getAllCategories();

        // Render the Products view with the obtained categories
        return Inertia::render('Products',[
            'categories' => $categories,
        ]);
    }
}
