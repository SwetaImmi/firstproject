<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = "abouts";
    protected $fillable = [
        'about_name	',
        'about_description',
        'role',
        'email',
       
    ];
    use HasFactory;
}
