<?php

namespace App\Containers\AppSection\User\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use AppSection\User\Data\Factories\UserFactory;

class UserPermissionsSeeder_1 extends Seeder
{
    public function run(): void
    {
        app(UserFactory::class)->definition();
    }
}
