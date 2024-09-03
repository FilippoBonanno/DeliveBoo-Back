<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->restaurant) {
            $data = [
                "restaurant" => $user->restaurant
            ];
        } else {
            $data = [];
        }
        return view('admin.dashboard', $data);
    }
}
