<?php

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

use App\Http\Controllers\FrontTicketController;
use App\Http\Controllers\BackTicketController;

Route::get('/', [FrontTicketController::class, 'main'])->name('main');
Route::get('list', [FrontTicketController::class, 'list'])->name('list');
Route::get('detail/{id}', [FrontTicketController::class, 'detail'])->name('detail');

Route::resource('backend/', BackTicketController::class, ['names' => 'backend']);

Route::get('backend/list', [BackTicketController::class, 'list'])->name('backend.list');
Route::get('backend/detail/{id}', [BackTicketController::class, 'detail'])->name('backend.detail');