<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'orders' => 'ordini'
        ];
        return view('admin.orders.index', $data);
    }
}
