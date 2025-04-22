<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_product',
        'name',
        'price',
        'supplier',
        'description',
        'creation_status',
        'product_video_link',
        'store_link',
    ];
}
