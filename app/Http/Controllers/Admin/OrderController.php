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
    { {
            $restaurantId = Auth::user()->restaurant->id;

            // Recupera l'introito totale per ogni mese
            $incomeData = Order::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(total_price) as total_income')
                ->where('created_at', '>=', Carbon::now()->subMonths(12))
                ->where('restaurant_id', $restaurantId)
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();

            // Recupera il numero di ordini per ogni mese
            $ordersData = Order::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total_orders')
                ->where('created_at', '>=', Carbon::now()->subMonths(12))
                ->where('restaurant_id', $restaurantId)
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();

            $income = [];
            $orders = [];

            foreach ($incomeData as $data) {
                $key = $data->year . '-' . str_pad($data->month, 2, '0', STR_PAD_LEFT);
                $income[$key] = $data->total_income;
            }

            foreach ($ordersData as $data) {
                $key = $data->year . '-' . str_pad($data->month, 2, '0', STR_PAD_LEFT);
                $orders[$key] = $data->total_orders;
            }

            // Riempiamo eventuali mesi mancanti con 0
            $monthlyIncome = [];
            $monthlyOrders = [];
            for ($i = 0; $i < 12; $i++) {
                $date = Carbon::now()->subMonths($i)->format('Y-m');
                $monthlyIncome[$date] = $income[$date] ?? 0;
                $monthlyOrders[$date] = $orders[$date] ?? 0;
            }

            return [
                'income' => array_reverse($monthlyIncome),
                'orders' => array_reverse($monthlyOrders),
            ];
        }
    }

    public function showOrdersChart()
    {
        $data = $this->getMonthlyOrders();

        return view('admin.orders.chart',  $data);
    }
}
