<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'order name',
        'category',
        'size',
        'price', 10, 2, 
        'quantity',
        'product_description',
    ];


}
