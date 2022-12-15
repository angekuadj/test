<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayementResource\Pages;
use App\Filament\Resources\PayementResource\RelationManagers;
use App\Models\Payement;
use App\Models\Projet;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayementResource extends Resource
{
    protected static ?string $model = Payement::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Wizard::make([
                Wizard\Step::make('Description')
                    ->schema([
                        Forms\Components\TextInput::make('Montant')->label('Montant'),
                        Select::make('projet_id')
                            ->label('Projet')
                            ->options(
                                Projet::all()->pluck('Description', 'id'))
                            ->searchable(),
                            Select::make('user_id')
                            ->label('User')
                            ->options(
                                User::all()->pluck('name', 'id'))
                            ->searchable(),
                    ]),
                Wizard\Step::make('Moyen de payement')
                    ->schema([
                        Checkbox::make('is_admin')->label('Orange Money')->inline(false),
                        Checkbox::make('is_admin')->label('Flooz')->inline(false),
                        Checkbox::make('is_admin')->label('Mtn Money')->inline(false),
                    ]),
                Wizard\Step::make('Finaliser le payement ')
                    ->schema([
                        Forms\Components\TextInput::make('Numero')->label('Numero'),
                    ]),
            ])
           
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Montant')->label('Montant'),
                Tables\Columns\TextColumn::make('projet.Description')->label('Projet'),
                Tables\Columns\TextColumn::make('user.name')->label('User'),
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
            'index' => Pages\ListPayements::route('/'),
            'create' => Pages\CreatePayement::route('/create'),
            'edit' => Pages\EditPayement::route('/{record}/edit'),
        ];
    }    
}
