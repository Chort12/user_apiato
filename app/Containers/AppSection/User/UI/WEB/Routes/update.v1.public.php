<?php

//use App\Containers\User\UpdateUser\UI\WEB\Controllers\Controller;

use App\Containers\AppSection\User\UI\WEB\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

Route::patch('user/{user}', [UpdateController::class, 'update'])
    ->name('update');
//    ->middleware(['auth:web']);

