<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/confirm', function () {
//     return view('confirm');
// });

Route::get('/', [TestController::class, 'index']);
// Route::post('/add', [TestController::class, 'post']);
Route::get('/confirm', [TestController::class, 'confirm']);
Route::post('/add', [TestController::class, 'input']);
Route::post('/insert', [TestController::class, 'insert']);
Route::get('/thanks', [TestController::class, 'thanks']);
Route::get('/control', [TestController::class, 'control']);


