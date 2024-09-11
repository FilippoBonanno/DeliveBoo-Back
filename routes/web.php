<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RestaurantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // rotta che usa lo slug
        Route::get('/restaurants/{slug}', [RestaurantController::class, 'show'])->name('restaurants.show');


        Route::resource('/restaurants', RestaurantController::class);
        Route::resource('/dishes', DishController::class);
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        Route::get('/orders/chart', [OrderController::class, 'showOrdersChart'])->name('orders.chart');
    });

require __DIR__ . '/auth.php';
