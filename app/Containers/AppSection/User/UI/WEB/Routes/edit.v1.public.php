<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\EditController;
use Illuminate\Support\Facades\Route;

Route::get('user/{user}/edit', [EditController::class, 'edit'])
    ->name('edit');
//    ->middleware(['auth:web']);

