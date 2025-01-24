<?php

use App\Http\Controllers\BrokerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brokers', [BrokerController::class, 'index'])->name('brokers.index');
Route::post('/brokers', [BrokerController::class, 'store'])->name('brokers.store');
Route::put('/brokers/{id}', [BrokerController::class, 'update'])->name('brokers.update');
Route::delete('/brokers/{id}', [BrokerController::class, 'destroy'])->name('brokers.destroy');
