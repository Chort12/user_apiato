<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\CreateUserAction;
use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Containers\AppSection\User\Actions\UpdateUserAction;
use App\Containers\AppSection\User\Actions\DeleteUserAction;
use App\Ship\Parents\Controllers\WebController;

class CreateController extends WebController
{
    public function create()
    {
        return view('appSection@user::create');
    }
}
