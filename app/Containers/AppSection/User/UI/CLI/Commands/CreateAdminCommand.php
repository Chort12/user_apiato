<?php

namespace App\Containers\AppSection\User\UI\CLI\Commands;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Containers\AppSection\User\Actions\CreateUserAction;
use App\Containers\AppSection\User\UI\API\Requests\CreateAdminRequest;
use App\Ship\Parents\Commands\ConsoleCommand;

class CreateAdminCommand extends ConsoleCommand
{
    protected $signature = 'apiato:create:admin';

    protected $description = 'Create a new User with the ADMIN role';

    public function handle(): void
    {
//        $username = $this->ask('Enter the username for this user');
//        $email = $this->ask('Enter the email address of this user');
//        $password = $this->secret('Enter the password for this user');
//        $password_confirmation = $this->secret('Please confirm the password');
//
//        if ($password !== $password_confirmation) {
//            $this->error('Passwords do not match - exiting!');
//            return;
//        }
//
//        $request = new CreateAdminRequest([
//            'name' => $username,
//            'email' => $email,
//            'password' => $password,
//        ]);

        $f_name = $this->ask('Введите имя для пользователя');
        $m_name = $this->ask('Введите фамилию для пользователя');
        $l_name = $this->ask('Введите отчество для пользователя');
        $email = $this->ask('Введите email для пользователя');
        $password = $this->secret('Введите пароль для пользователя');
        $password_confirmation = $this->secret('Подтвердите пароль');
        $birthday = $this->ask('Введите дату рождения в формате: 1901-01-01');


        if ($password !== $password_confirmation) {
            $this->error('Пароли не совпадают!');
            return;
        }

        $request = new CreateAdminRequest([
            'f_name' => $f_name,
            'email' => $email,
            'password' => $password,
            'birthday' => $birthday,
            'm_name' => $m_name,
            'l_name' => $l_name
        ]);

//        app(CreateAdminAction::class)->run($request);
        app(CreateUserAction::class)->run($request);

        $this->info('Пользователь ' . $email . ' успешно создан');
    }
}
