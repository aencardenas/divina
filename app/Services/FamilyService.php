<?php

namespace App\Services;
use App\Models\Family;

class FamilyService
{
    public function getAllFamilies()
    {
        return Family::all();
    }
}
