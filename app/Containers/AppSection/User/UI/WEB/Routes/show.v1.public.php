<?php

use app\Containers\AppSection\User\UI\WEB\Controllers;
use App\Containers\AppSection\User\UI\WEB\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{user}', [ShowController::class, 'show'])
    ->name('show');
//    ->middleware(['auth:web']);

