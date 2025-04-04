<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\OrdersRelationManager;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 1;


    // ----------------------------------------------------------------


            // recherche pour un seul champs
    protected static ?string $recordTitleAttribute = 'name';

    // -----------------------------------------------------------------



    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
            'email',
        ];
    }






    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('User Information')
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->label('Nom : ')
                    ->required()
                    // ->autocomplete(false)
                    ->autocomplete('name')
                    ->suffixIcon('heroicon-s-user')
                    ->suffixIconColor('success'),
                
                Forms\Components\TextInput::make('email')
                    ->label('Email : ')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->suffixIcon('heroicon-o-at-symbol')
                    ->maxLength(255)
                    ->suffixIconColor('success'),
                
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label('Date de vérification de l\'email : ')
                    ->required()
                    ->suffixIcon('heroicon-o-calendar')
                    ->suffixIconColor('success')
                    ->default(now()),

                Forms\Components\TextInput::make('password')
                    ->label('Mot de passe : ')
                    ->password()
                    // ->suffixIcon('heroicon-o-lock-closed')
                    // ->suffixIconColor('success')
                    ->revealable()
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (Page $livewire): bool => $livewire instanceof CreateRecord)
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->sortable()
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 2 ? 'success' : 'primary';
    }

    public static function getRelations(): array
    {
        return [
            //
            OrdersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
