<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;

class SalesReportController extends Controller
{
    public function report()
    {

        $salesData = [];
        $orders = Order::with('orderItems.product')->get();

        foreach ($orders as $order) {
            $salesData[] = [
                'order_id' => $order->id, 
                'order_date' => $order->order_date, 
                'total_amount' => $order->orderItems->sum(function ($item) {
                    return $item->quantity * $item->unit_price;}),
            ];
        }
    

        $productSales = OrderItem::select('products.product_name', DB::raw('SUM(order_items.quantity) as total_quantity'))
            ->join('products', 'order_items.product_id', '=', 'products.product_id')
            ->groupBy('products.product_name')
            ->orderBy('total_quantity', 'desc')
            ->get();

        $mostSellingProduct = $productSales->first();
        $leastSellingProduct = $productSales->last();
        return view('sales_report', [
            'salesData' => $salesData,
            'mostSellingProduct' => $mostSellingProduct,
            'leastSellingProduct' => $leastSellingProduct,
        ]);    }
}