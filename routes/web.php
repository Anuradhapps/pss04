<?php

use App\Http\Controllers\CommonDataController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PestDataController;
use App\Http\Controllers\ProfileController;
use App\Models\Location;
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


Route::get('/fetchDistricts',[LocationController::class,'fetchDistricts'])->name('fetchDistrict');
Route::get('/fetchASC',[LocationController::class,'fetchASC'])->name('fetchASC');
Route::get('/fetchAiRange',[LocationController::class,'fetchAiRange'])->name('fetchAiRange');



Route::get('/dataInput',[CommonDataController::class,'index'])->name('dataInput');
Route::post('/data/storeCommon', [CommonDataController::class, 'storeCommon'])->name('data.storeCommon');



Route::post('/data/storePests', [PestDataController::class, 'storePests'])->name('data.storePests');
