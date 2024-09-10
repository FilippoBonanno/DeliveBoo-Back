<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $orderList = $user->restaurant->orders()->orderByDesc('id')->get();

        // $orderList = Order::orderByDesc('id')->get();
        $data = [
            "orders" => $orderList,
        ];

        return view('admin.orders.index', $data);
    }
}
