<?php

use App\Http\Controllers\Reason;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [Reason\IndexController::class, 'index']);
Route::get('/reasons/{reason}', [Reason\ShowController::class, 'show']);

