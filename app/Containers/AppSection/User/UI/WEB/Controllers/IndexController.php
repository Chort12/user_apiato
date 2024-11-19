<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class IndexController extends WebController
{
    public function index()
    {
        $GetAllUsersAction = new GetAllUsersAction();
        $users = $GetAllUsersAction->run(); //action
        return view('appSection@user::index', compact('users')); //view
    }
}
