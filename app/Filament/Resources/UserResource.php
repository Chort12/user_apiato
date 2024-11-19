<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Containers\AppSection\User\Models\User;
//use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                        ->dehydrateStateUsing(fn($state) => Hash::make($state))
                        ->label('Пароль'),

                    TextInput::make('email')
                        ->required()
                        ->email()
                        ->label('Email'),

                    DatePicker::make('birthday')
                        ->required()
                        ->before(today())
                        ->label('Дата рождения'),

                    FileUpload::make('image')
                        ->label('Изображение'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('f_name')->label('Имя'),
                Tables\Columns\TextColumn::make('l_name')->label('Фамилия'),
                Tables\Columns\TextColumn::make('m_name')->label("Отчество"),
                Tables\Columns\TextColumn::make('birthday')->label('Дата рождения'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\ImageColumn::make('image')->label('Изображение'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
        ];
    }
}
