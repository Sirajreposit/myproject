<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcategory extends Model
{
    use HasFactory;

    protected $table = 'pcategories';

    protected $fillable = [
        'Category_Name',
        'Category_Description',
    ];
}
