<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = "carts";
    protected $fillable = [
        'product_name',
        'product_price
        ',
        'quantity',
       
    ];
    use HasFactory;
}
