<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
//use App\Containers\AppSection\User\Tasks\CreateUserTask;
use App\Containers\AppSection\User\UI\WEB\Requests\StoreRequest;
use App\Containers\AppSection\User\Values\UserValue;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Exceptions\Exception;
use Hash;
use Illuminate\Support\Facades\Storage;

class CreateUserAction extends Action
{
    protected UserRepository $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($userValue)
    {
        try {
            return $this->repository->create([
                'f_name' => $userValue->getFName(),
                'm_name' => $userValue->getMName() ?? "",
                'l_name' => $userValue->getLName(),
                'birthday' => $userValue->getBirthday(),
                'email' => $userValue->getEmail(),
                'password' => $userValue->getPassword(),
                'image' => $userValue->getImage(),
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
