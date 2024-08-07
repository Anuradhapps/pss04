<?php

use App\Http\Controllers\CommonDataController;
use App\Http\Controllers\PestDataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/chart', function () {
    return view('chart');
})->name('chart');
Route::get('/dataTable', function () {
    return view('dataTable');
})->name('dataTable');
Route::get('/dataInput', function () {
    return view('dataInput');
})->name('dataInput');

Route::post('/data/storeCommon', [CommonDataController::class, 'storeCommon'])->name('data.storeCommon');
Route::post('/data/storePests', [PestDataController::class, 'storePests'])->name('data.storePests');
