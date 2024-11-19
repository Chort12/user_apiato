<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\UI\API\Requests\CreateAdminRequest;
use App\Containers\AppSection\User\UI\WEB\Requests\StoreRequest;
use App\Containers\AppSection\User\Actions\CreateUserAction;
use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Containers\AppSection\User\Actions\UpdateUserAction;
use App\Containers\AppSection\User\Actions\DeleteUserAction;
use App\Containers\AppSection\User\Values\UserValue;
use App\Ship\Parents\Controllers\WebController;
use App\Ship\Parents\Requests\Request;
use Hash;
use Illuminate\Support\Facades\Storage;

class StoreController extends WebController
{
    public function create(StoreRequest $request)
    {
        $pass = Hash::make($request['password']);
        $userValue = (new UserValue)
            ->setFName($request->f_name)
            ->setLName($request->l_name)
            ->setMName($request->m_name)
            ->setEmail($request->email)
            ->setBirthday($request->birthday)
            ->setPassword($pass);

        if ($request->image) {

            $pathImage = Storage::disk('public')->put('/images', $request->image);

            $userValue->setImage($pathImage);
        }

        app(CreateUserAction::class)->run($userValue);
        return redirect()->route('index');
    }
}
