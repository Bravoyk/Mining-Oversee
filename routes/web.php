<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BenefitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getBenefit', [BenefitController::class, 'getBenefit']);
Route::get('/detail', [BenefitController::class, 'detail']);
Route::get('/checkPoint', [BenefitController::class, 'checkPoint']);
