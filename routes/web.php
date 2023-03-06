<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tools/{tool}/edit', [ToolController::class, 'edit'])->name('tools.edit');
Route::put('/tools/{tool}', [ToolController::class, 'update'])->name('tools.update');
