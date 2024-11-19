<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\UpdateUserAction;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\UI\WEB\Requests\UpdateRequest;
use App\Containers\AppSection\User\Values\UserValue;
use App\Ship\Parents\Controllers\WebController;
use Hash;
use Illuminate\Support\Facades\Storage;


class UpdateController extends WebController
{
    public function update(UpdateRequest $request, $user)
    {
        $userValue = (new UserValue)
            ->setId($user)
            ->setFName($request->f_name)
            ->setLName($request->l_name)
            ->setMName($request->m_name)
            ->setEmail($request->email)
            ->setBirthday($request->birthday);


        if ($request->password) {
            $pass = Hash::make($request['password']);
            $userValue->setPassword($pass);
        }

        if ($request->image) {

            $pathImage = Storage::disk('public')->put('/images', $request->image);

            $userValue->setImage($pathImage);
        }
        app(UpdateUserAction::class)->run($userValue, $user);
        return redirect()->route('show', $user);
    }
}
