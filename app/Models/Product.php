<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Family;
use App\Models\Group;
use App\Models\Price;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product', 'description', 'image', 'active', 'category_id', 'family_id', 'group_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

}
