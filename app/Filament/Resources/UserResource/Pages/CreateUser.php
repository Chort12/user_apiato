<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Hash;
use Illuminate\Support\Facades\Storage;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('f_name')
                ->string()
                ->required()
                ->label('Имя'),

            TextInput::make('l_name')
                ->string()
                ->required()
                ->label('Фамилия'),

            TextInput::make('m_name')
                ->string()
                ->nullable()
                ->label('Отчество'),

            TextInput::make('password')
                ->required()
                ->password()
                ->minValue(4)
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->label('Пароль'),

            TextInput::make('email')
                ->required()
                ->unique()
                ->email()
                ->label('Email'),

            DatePicker::make('birthday')
                ->required()
                ->before(today())
                ->label('Дата рождения'),

            FileUpload::make('image')
                ->label('Изображение'),
        ];
    }
}
