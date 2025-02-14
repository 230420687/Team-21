<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'order_items';
    protected $primaryKey = 'order_item_id';

    protected $fillable = [
        'order_item_id', 'order_id', 'product_id', 'quantity', 'unit_price'
    ];


}
