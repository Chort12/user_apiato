<?php

namespace App\Containers\AppSection\Authorization\Tasks;

use Apiato\Core\Abstracts\Repositories\Repository;
use App\Containers\AppSection\Authorization\Data\Repositories\PermissionRepository;
use App\Containers\AppSection\Authorization\Models\Permission;
use App\Containers\AppSection\User\Models\User;
//use App\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
//use App\Ship\Parents\Repositories\Repository;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePermissionTask extends Task
{
    protected PermissionRepository $repository;

//    public function __construct(PermissionRepository $repository)
//    {
//        $this->repository = $repository;
//    }

    public function run(): void
    {
    }

//    public function run(string $name, string $description = null, string $displayName = null): Permission
//    {
//        app()['cache']->forget('spatie.permission.cache');
//
//        try {
//            $permission = $this->repository->create([
//                'name' => $name,
//                'description' => $description,
//                'display_name' => $displayName,
//                'guard_name' => 'web',
//            ]);
//        } catch (Exception $exception) {
//            throw new CreateResourceFailedException();
//        }
//
//        return $permission;
//    }
}
