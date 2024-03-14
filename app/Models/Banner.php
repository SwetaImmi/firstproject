<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $table = "banners";
    protected $fillable = [
        'banner_name',
        'banner_img',
        'role',
        'email',
        'status' => 'boolean',
       
    ];
    use HasFactory;
}
