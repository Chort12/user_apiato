<?php

namespace App\Containers\AppSection\User\Tasks;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

class CreateUserByCredentialsTask extends Task
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        bool $isAdmin,
        string $email,
        string $password,
        string $f_name,
        string $l_name,
        string $m_name,
        string $birthday
//        string $name = null,
//        string $gender = null,
//        string $birth = null
    ): User
    {
        try {
            // create new user
            $user = $this->repository->create([
                'password' => Hash::make($password),
                'email' => $email,
//                'name' => $name,
//                'gender' => $gender,
//                'birth' => $birth,
                'is_admin' => $isAdmin,
                'f_name' => $f_name,
                'l_name' => $l_name,
                'm_name' => $m_name,
                'birthday' => $birthday,
            ]);

        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }

        return $user;
    }
}
