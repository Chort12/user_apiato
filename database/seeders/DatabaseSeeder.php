<?php

namespace Database\Seeders;
use Apiato\Core\Loaders\SeederLoaderTrait;

//use Database\Seeders\seeders\UserSeeder;
use Database\Seeders;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class DatabaseSeeder extends Seeder
{
    use SeederLoaderTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        $this->runLoadingSeeders();
        $this->call(
            UserSeeder::class
        );
    }
}
