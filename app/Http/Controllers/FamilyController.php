<?php

namespace App\Http\Controllers;

use App\Services\FamilyService;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    // Private property to store the instance of CategoryService
    private $familyService;

    // Constructor that receives an instance of CategoryService
    public function __construct(FamilyService $familyService)
    {
        //Asign the instance of CategoryService to the private property
        $this->familyService = $familyService;
    }

    // Method to handle the request for the 'Products' view
    public function index()
    {

        // Use the CategoryService to gel all categories
        $families = $this->familyService->getAllFamilies();

        // Render the Products view with the obtained categories
        return Inertia::render('Products', [
            'families' => $families,
        ]);
    }
}
