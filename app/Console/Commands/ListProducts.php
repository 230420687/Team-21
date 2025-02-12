<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ListProducts extends Command
{
    protected $signature = 'products:list';
    protected $description = 'List all products in the database';

    public function handle()
    {
        $products = Product::all();
        
        $this->table(
            ['ID', 'Name', 'Price', 'Description'],
            $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->product_name,
                    'price' => $product->product_price,
                    'description' => $product->product_description
                ];
            })
        );
    }
}