<?php

use App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\UI\WEB\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('users', [IndexController::class, 'index'])
    ->name('index');
//    ->middleware(['auth:web']);

