<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DurationController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use Database\Seeders\CustumerSeeder;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('cashier/login', [AuthController::class, 'loginCashier']);

Route::middleware(['owner.api'])->group(function () {
    Route::prefix('outlet')->group(function () {
        Route::get('', [OutletController::class, 'showAllOutlet']);
        Route::post('', [OutletController::class, 'addOutlet']);
        Route::put('/{id}', [OutletController::class, 'updateOutlet']);
        Route::delete('/{id}', [OutletController::class, 'deleteOutlet']);
    });

    Route::prefix('cashier')->group(function () {
        Route::get('', [CashierController::class, 'showAllCashier']);
        Route::post('', [CashierController::class, 'addCashier']);
        Route::put('/{id}', [CashierController::class, 'updateCashier']);
        Route::delete('/{id}', [CashierController::class, 'deleteCashier']);
    });

    Route::prefix('duration')->group(function () {
        Route::get('', [DurationController::class, 'showAllDuration']);
        Route::post('', [DurationController::class, 'addDuration']);
        Route::put('/{id}', [DurationController::class, 'updateDuration']);
        Route::delete('/{id}', [DurationController::class, 'deleteDuration']);
    });

    Route::prefix('package')->group(function () {
        Route::get('', [PackageController::class, 'showAllPackage']);
        Route::get('/{target}/{targetValue}', [PackageController::class, 'showPackageByTarget']);
        Route::post('', [PackageController::class, 'addPackage']);
        Route::put('/{id}', [PackageController::class, 'updatePackage']);
        Route::delete('/{id}', [PackageController::class, 'deletePackage']);
    });

    Route::prefix('parfum')->group(function () {
        Route::get('', [ParfumController::class, 'showAllParfum']);
        Route::post('', [ParfumController::class, 'addParfum']);
        Route::put('/{id}', [ParfumController::class, 'updateParfum']);
        Route::delete('/{id}', [ParfumController::class, 'deleteParfum']);
    });

    Route::prefix('discount')->group(function () {
        Route::get('', [DiscountController::class, 'showAllDiscount']);
        Route::post('', [DiscountController::class, 'addDiscount']);
        Route::put('/{id}', [DiscountController::class, 'updateDiscount']);
        Route::delete('/{id}', [DiscountController::class, 'deleteDiscount']);
    });

    Route::prefix('customer')->group(function () {
        Route::get('', [CustomerController::class, 'showAllCustumer']);
        Route::post('', [CustomerController::class, 'addCustumer']);
        Route::put('/{id}', [CustomerController::class, 'updateCustumer']);
        Route::delete('/{id}', [CustomerController::class, 'deleteCustumer']);
    });

    Route::prefix('report')->group(function () {
        Route::get('', [ReportController::class, 'showReport']);
        Route::get('today', [ReportController::class, 'showTodayReport']);


    });

    Route::prefix('order')->group(function () {
        Route::get('', [OrderController::class, 'showAllOrder']);
        Route::post('', [OrderController::class, 'addOrder']);
        Route::get('/{target}/{targetValue}', [OrderController::class, 'showOrderByTarget']);
        Route::put('/payment/{id}', [OrderController::class, 'changePaymentStatus']);
        Route::put('/status/{id}', [OrderController::class, 'changeOrderStatus']);
        Route::put('/{id}', [OrderController::class, 'updateOrder']);
        Route::delete('/{id}', [OrderController::class, 'deleteOrder']);
    });
});


Route::middleware(['cashier.api'])->group(function () {
    Route::prefix('order')->group(function () {
        Route::get('', [OrderController::class, 'showAllOrder']);
        Route::post('', [OrderController::class, 'addOrder']);
        // Route::get('/{target}/{targetValue}', [OrderController::class, 'showOrderByTarget']);
        Route::get('/{payment_type}/{id}', [OrderController::class, 'changePaymentStatus']);
        Route::get('/status/{id}', [OrderController::class, 'changeOrderStatus']);
        Route::put('/{id}', [OrderController::class, 'updateOrder']);
        Route::delete('/{id}', [OrderController::class, 'deleteOrder']);
        Route::get('/{id}', [OrderController::class, 'showOrderDetail']);
    });

    Route::prefix('package')->group(function () {
        Route::get('', [PackageController::class, 'showAllPackage']);
        Route::get('/{target}/{targetValue}', [PackageController::class, 'showPackageByTarget']);
    });

    Route::prefix('customer')->group(function () {
        Route::get('', [CustomerController::class, 'showAllCustumer']);
        Route::post('', [CustomerController::class, 'addCustumer']);
        Route::put('/{id}', [CustomerController::class, 'updateCustumer']);
        Route::delete('/{id}', [CustomerController::class, 'deleteCustumer']);
    });

    Route::get('discount', [DiscountController::class, 'showAllDiscount']);
    Route::get('parfum', [ParfumController::class, 'showAllParfum']);
    Route::get('duration', [DurationController::class, 'showAllDuration']);
});
