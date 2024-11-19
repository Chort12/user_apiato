<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\CreateController;
use Illuminate\Support\Facades\Route;

Route::get('user', [\App\Containers\AppSection\User\UI\WEB\Controllers\CreateController::class, 'create'])
    ->name('create');
//    ->middleware(['auth:web']);

