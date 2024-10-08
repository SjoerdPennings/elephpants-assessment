<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ElephpantController;
use App\Http\Controllers\RankingController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/herd/{id?}', [ElephpantController::class, 'show'])->name('herd');
    Route::post('/herd/add/{elephpant_id}', [ElephpantController::class, 'add'])->name('herd.add');
});
Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');
Route::get('/', [ElephpantController::class, 'index'])->name('home');
Route::get('/species', [ElephpantController::class, 'index'])->name('species');

require __DIR__.'/auth.php';
