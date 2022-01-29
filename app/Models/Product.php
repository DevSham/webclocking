<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'part_number',
        'product_name',
        'category',
        'description',
        'piece_per_box',
        'boxes_per_carton',
    ];

}
