<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $data = [];
        
        if ($user->restaurant) {
            // Se ha un ristorante, controlla se ha dei piatti
            if ($user->restaurant->dishes->isNotEmpty()) {
                $dishList = $user->restaurant->dishes;
                $data = [
                    "restaurant" => $user->restaurant,
                    "dishes" => $dishList,
                ];
            } else {
                $data = [
                    "restaurant" => $user->restaurant,
                    "dishes" => [],
                ];
            }
            return view('admin.dashboard', $data);
        }
    }
}
