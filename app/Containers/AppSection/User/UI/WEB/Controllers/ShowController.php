<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class ShowController extends WebController
{
    public function show(User $user){
        return view('appSection@user::show', compact('user'));
    }
}
