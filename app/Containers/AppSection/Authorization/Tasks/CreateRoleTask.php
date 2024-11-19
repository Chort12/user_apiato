<?php

namespace App\Containers\AppSection\Authorization\Tasks;

use App\Containers\AppSection\Authorization\Data\Repositories\RoleRepository;
use App\Containers\AppSection\Authorization\Models\Role;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateRoleTask extends Task
{
    protected RoleRepository $repository;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
    }

//    public function run(string $name, string $description = null, string $displayName = null, int $level = 0): Role
//    {
//        app()['cache']->forget('spatie.permission.cache');
//
//        $name = strtolower($name);
//
//        // Проверка существующей роли
//        $existingRole = $this->repository->findByName($name, 'web');
//        if ($existingRole) {
//            // Возвращаем существующую роль вместо выбрасывания исключения
//            return $existingRole;
//        }
//
//        try {
//            $role = $this->repository->create([
//                'name' => $name,
//                'description' => $description,
//                'display_name' => $displayName,
//                'guard_name' => 'web',
//                'level' => $level,
//            ]);
//        } catch (\Illuminate\Database\QueryException $exception) {
//            if ($exception->getCode() == 23000) {
//                throw new CreateResourceFailedException('Role already exists.', $exception->getCode(), $exception);
//            }
//            throw new CreateResourceFailedException($exception->getMessage(), $exception->getCode(), $exception);
//        }
//
//        return $role;
//    }
    public function run(string $name, string $description = null, string $displayName = null, int $level = 0): Role
    {
        app()['cache']->forget('spatie.permission.cache');

        try {
            $role = $this->repository->create([
                'name' => strtolower($name),
                'description' => $description,
                'display_name' => $displayName,
                'guard_name' => 'web',
                'level' => $level,
            ]);
//        } catch (Exception $exception) {
//            throw new CreateResourceFailedException();
//        }
        } catch (Exception $exception) {
            throw new CreateResourceFailedException($exception->getMessage(), $exception->getCode(), $exception);
        }

        return $role;
    }
}
