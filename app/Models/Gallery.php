<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = "gallery";
    protected $fillable = [
        'gallery_id',
        'gallery_images',
        'created_at',
        'updated_at',
       
    ];
    use HasFactory;
}
