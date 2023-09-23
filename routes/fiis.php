<?php

use App\Http\Controllers\Fiis\FiiAdministratorController;
use App\Http\Controllers\Fiis\FIIController;
use Illuminate\Support\Facades\Route;

Route::name('fiis.')->prefix('fiis')->group(function () {

    Route::get('/', [FIIController::class, 'index'])->name('index');

    Route::name('administrators.')->prefix('administrators')->group(function () {

        Route::get('/', [FiiAdministratorController::class, 'index'])->name('index');

    });

});
