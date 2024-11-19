<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use DanHarrin\LivewireRateLimiting\Tests\Component;
use Faker\Provider\Text;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Hash;
use PhpParser\Node\Stmt\Label;

//use PhpParser\Node\Stmt\Label;

class EditUser  extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->disabled()
                ->label('ID пользователя'),

            TextInput::make('f_name')
                ->required()
                ->string()
                ->label('Имя'),

            TextInput::make('l_name')
                ->required()
                ->string()
                ->label('Фамилия'),

            TextInput::make('m_name')
                ->string()
                ->nullable()
                ->label('Отчество'),

            TextInput::make('password')
                ->password()
                ->minValue(4)
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->label('Пароль'),

            TextInput::make('email')
                ->email()
                ->required()
                ->label('Email'),

            DatePicker::make('birthday')
                ->required()
                ->before(today())
                ->label('Дата рождения'),

            FileUpload::make('image')
                ->label('Изображение'),
        ];
    }



    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
