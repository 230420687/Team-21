<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';



    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'stock_quantity',
        'img_id',
    ];


    
}