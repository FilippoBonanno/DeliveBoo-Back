<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RestaurantController;
use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('restaurants', [RestaurantController::class, 'index']);
Route::get('restaurants/{slug}', [RestaurantController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

//Braintree
Route::get('token', function () {
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);
    // pass $clientToken to your front-end
    $clientToken = $gateway->clientToken()->generate();

    return response()->json([
        'token' => $clientToken
    ]);
});

Route::post('checkout', function (Request $request) {
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);

    $nonceFromTheClient = $request->payment_method_nonce;
    $deviceDataFromTheClient = $request->device_data;
    $uri = 'http://localhost:5173';     // da cambiare a seconda della porta del sito front

    $result = $gateway->transaction()->sale([
        'amount' => $request->total_price,
        'paymentMethodNonce' => $nonceFromTheClient,
        'deviceData' => $deviceDataFromTheClient,
        'options' => [
            'submitForSettlement' => True
        ]
    ]);

    if ($result->success) {
        $transaction = $result->transaction;
        $data = $request->validate([
            'email' => "required|min:1|max:255",
            'name' => "required|min:1|max:255",
            'total_price' => "required|numeric|min:0.1|max:999.99",
            'address' => "required|min:1|max:255",
            'city' => "required|min:1|max:255",
            'province' => "required|min:1|max:255",
            'postalcode' => "required|min:1|max:255",
            'country' => "required|min:1|max:255",
            'phone' => "required|min:1|max:255",
            'restaurant_id' => "required"
        ]);
        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->order_date = now();
        $newOrder->transaction_id = $transaction->id;
        $newOrder->save();

        Mail::to('info@boolean.com')->send(new NewOrder($newOrder));

        return redirect()->away($uri . '/checkout/success');
        // return response()->json(['transaction' => $transaction, 'order' => $newOrder]);
    } else {

        // $errorString = "";
        // foreach ($result->errors->deepAll() as $error) {
        //     $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        // }

        return redirect()->away($uri . '/checkout/denied');
    }
});
