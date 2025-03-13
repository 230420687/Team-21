<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;

class ProductControllerTest extends TestCase
{


//test admin can create and add products
    public function create_add_product()
    {

        $data = [
            'product_name'        => 'iPad Pro',
            'product_price'       => 999.99,
            'stock_quantity'      => 100,
            'product_description' => 'Test product.',
            'img_id'              => 1,
            'category_id'         => 2,
            'created_at'          => '2025-02',  
            'updated_at'          => '2025-02',  
        ];

        // POST request
        $response = $this->post(route('adminproducts.store'), $data);

        // Assert product is added to database
        $this->assertDatabaseHas('products', [
            'product_name'        => 'iPad Pro',
            'product_price'       => 999.99,
            'stock_quantity'      => 100,
            'product_description' => 'Test product.',
            'img_id'              => 1,
            'category_id'         => 2,
        ]);

        // Verify redirection and flash message.
        $response->assertRedirect(route('adminproducts.index'));
        $response->assertSessionHas('success', 'Product added successfully!');
    }

// //Product can't be created with invalid data
//     public function invalid_data()
//     {
//         // Missing fields and wrong data types
//         $invalidData = [
//             'product_name'        => '',           
//             'product_price'       => 'not-a-number',  
//             'stock_quantity'      => -5,           
//             'product_description' => '',           
//             'img_id'              => null,         
//             'category_id'         => null,         
//             'created_at'          => '',           
//             'updated_at'          => '',           
//         ];

//         // Send POST request with invalid data.
//         $response = $this->post(route('adminproducts.store'), $invalidData);

//         // Assert errors
//         $response->assertSessionHasErrors([
//             'product_name',
//             'product_price',
//             'stock_quantity',
//             'product_description',
//             'img_id',
//             'category_id',
//             'created_at',
//             'updated_at',
//         ]);
//     }

// //test admin can update stock quantity
//     public function update_stock_quantity()
//     {
//         // Create an existing product.
//         $product = Product::factory()->create([
//             'stock_quantity' => 50,
//             'product_price'  => 75.00,
//             'product_name'   => 'Inventory Update Test',
//         ]);

//         $updateData = [
//             'product_name'   => $product->product_name,  
//             'product_price'  => $product->product_price, 
//             'stock_quantity' => 150,  
//         ];

//         // Send a PATCH request to updateStock
//         $response = $this->patch(route('adminproducts.updateStock', $product->id), $updateData);

//         // check product quantity is updated
//         $this->assertDatabaseHas('products', [
//             'id'             => $product->id,
//             'stock_quantity' => 150,
//         ]);

//         // assert redirection and flash message
//         $response->assertRedirect(route('adminproducts.index'));
//         $response->assertSessionHas('success', 'Stock updated successfully!');
//     }

// //test admin can update price of a product
//     public function update_price()
//     {
//         // Create product
//         $product = Product::factory()->create([
//             'stock_quantity' => 50,
//             'product_price'  => 75.00,
//             'product_name'   => 'Price Update Test',
//         ]);

//         //update only price
//         $updateData = [
//             'product_name'   => $product->product_name, 
//             'product_price'  => 95.00, 
//             'stock_quantity' => $product->stock_quantity,   
//         ];

//         // Send a PATCH request to updateStock
//         $response = $this->patch(route('adminproducts.updateStock', $product->id), $updateData);

//         // assert price is updated in database
//         $this->assertDatabaseHas('products', [
//             'id'             => $product->id,
//             'product_price'  => 95.00,
//         ]);

//         // Verify redirection and flash message.
//         $response->assertRedirect(route('adminproducts.index'));
//         $response->assertSessionHas('success', 'Stock updated successfully!');
//     }
}
