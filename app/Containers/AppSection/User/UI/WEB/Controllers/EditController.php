<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class EditController extends WebController
{
    public function edit(User $user)
    {
        return view('appSection@user::edit', compact('user'));
    }
}
