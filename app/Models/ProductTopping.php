<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Topping;

class ProductTopping extends Model
{
    use HasFactory;

    protected $table = 'product_topping';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function topping()
    {
        return $this->belongsTo(Topping::class);
    }
}
