<?php

use App\Containers\AppSection\User\UI\WEB\Controllers;
use App\Containers\AppSection\User\UI\WEB\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::post('user', [StoreController::class, 'create'])->name('store');

//    ->middleware(['auth:web']);

