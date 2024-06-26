<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCat extends Model
{
    use HasFactory;
    protected $table = 'product_cats';

    protected $fillable = [
        'Product_Category',
        'Product_Name',
        'Price',
        'Offer',
        'Product_Description',
    ];
}
