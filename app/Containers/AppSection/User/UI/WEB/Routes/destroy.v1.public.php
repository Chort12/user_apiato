<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\DestroyController;
use Illuminate\Support\Facades\Route;

Route::delete('user/{user}', [DestroyController::class, 'destroy'])
    ->name('delete');
//    ->middleware(['auth:web']);

