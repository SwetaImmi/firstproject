<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_catogery',
        'product_quantity',
        'product_price',
        'product_image',
        'product_description',
    ];

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }
    use HasFactory;
}
