<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WishListItem extends Model
{
  //
  use HasFactory;

  protected $fillable = [
    'user_id',
    'product_id',
    'quantity',
  ];

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id');
  }

  protected $table = 'wishlist_items';
}
