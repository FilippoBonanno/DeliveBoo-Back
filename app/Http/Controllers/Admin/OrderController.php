<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $orderList = $user->restaurant->orders()->orderByDesc('created_at')->get();

        // $orderList = Order::orderByDesc('id')->get();
        $data = [
            "orders" => $orderList,
        ];

        return view('admin.orders.index', $data);
    }

    public function getMonthlyOrders()
    {
        // Id ristorante
        $restaurantId = Auth::user()->restaurant->id;

        $orders = Order::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total')
            ->where('created_at', '>=', Carbon::now()->subMonths(12))
            ->where('restaurant_id', $restaurantId)  // Filtro per il ristorante corrente
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $data = [];

        // Divido i dati per ogni mese
        foreach ($orders as $order) {
            $data[$order->year . '-' . str_pad($order->month, 2, '0', STR_PAD_LEFT)] = $order->total;
        }

        // Riempio eventuali mesi mancanti con 0
        $monthlyOrders = [];
        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonths($i)->format('Y-m');
            $monthlyOrders[$date] = $data[$date] ?? 0;
        }

        return $monthlyOrders;
    }

    public function showOrdersChart()
    {
        $monthlyOrders = $this->getMonthlyOrders();

        return view('admin.orders.chart', ['monthlyOrders' => $monthlyOrders]);
    }
}
