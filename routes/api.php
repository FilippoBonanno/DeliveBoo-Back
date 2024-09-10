<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $uri = 'http://localhost:5174';     // da cambiare a seconda della porta del sito front

    $result = $gateway->transaction()->sale([
        'amount' => $request->amount,
        'paymentMethodNonce' => $nonceFromTheClient,
        'deviceData' => $deviceDataFromTheClient,
        'options' => [
            'submitForSettlement' => True
        ]
    ]);

    if ($result->success) {
        $transaction = $result->transaction;
        return redirect()->away($uri . '/Checkout/Success');
    } else {

        // $errorString = "";
        // foreach ($result->errors->deepAll() as $error) {
        //     $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        // }

        return redirect()->away($uri . '/Checkout/Denied');
    }
});
