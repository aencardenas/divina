<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Family;

class Category extends Model
{
    use HasFactory;

    public function families()
    {
        return $this->hasMany(Family::class, 'category_id');
    }
}
