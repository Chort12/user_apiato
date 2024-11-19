<?php

namespace Database\Seeders;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
    }
}
