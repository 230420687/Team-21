<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //

    public function adminIndex(){
        $orders = Order::with(['user', 'orderItems.product'])->get();
        return view('orders.adminIndex', compact('orders'));
    }

    public function index(){
        $user = auth()->user();

        $orders = Order::where('user_id', $user->id)
            ->orderBy('order_date', 'desc')
            ->get();

        return view('orders.index', compact('orders'));
    }

    public function adminShow($order_id)
{
    $order = Order::with(['orderItems.product'])->findOrFail($order_id);
    return view('orders.adminShow', compact('order'));
}

    public function show($order_id)
{
    $order = Order::with(['orderItems.product'])->findOrFail($order_id);
    return view('orders.show', compact('order'));
}

    public function editStatus(Order $order){
        return view('orders.editstatus', compact('order'));

    }

    public function updateStatus(Request $request, Order $order)
    {
       
        
        $request->validate([
            'order_status' => 'required|in:pending,shipped,delivered,canceled',
        ]);
    
        $order->update(['order_status' => $request->order_status]);
    
        return redirect()->route('orders.adminIndex');
    }
    

}
