<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\UpdateUserTask;
use App\Containers\AppSection\User\UI\API\Requests\UpdateUserRequest;
use App\Containers\AppSection\User\UI\WEB\Requests\UpdateRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Requests\Request;
use Hash;
use Storage;

class UpdateUserAction extends Action
{
    protected UserRepository $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($userValue, $user)
    {
        try {
            $dataToUpdate = [
                'f_name' => $userValue->getFName(),
                'm_name' => $userValue->getMName(),
                'l_name' => $userValue->getLName(),
                'birthday' => $userValue->getBirthday(),
                'email' => $userValue->getEmail(),
            ];

            if ($userValue->getPassword()) {
                $dataToUpdate['password'] = $userValue->getPassword();
            }

            if ($userValue->getImage()) {
                $dataToUpdate['image'] = $userValue->getImage();
            }

            return $this->repository->update($dataToUpdate, $user);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
