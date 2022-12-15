<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjetResource\Pages;
use App\Filament\Resources\ProjetResource\RelationManagers;
use App\Models\Projet;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjetResource extends Resource
{
    protected static ?string $model = Projet::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Description')->label('Description')->required(),
                Forms\Components\TextInput::make('Montant')->label('Montant')->required(),
                Forms\Components\DatePicker::make('Ddebut')->label('Date Debut')->required(),
                Forms\Components\DatePicker::make('Dfin')->label('Date Fin')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Ddebut')->label('Date Debut'),
                Tables\Columns\TextColumn::make('Dfin')->label('Date Fin'),
                Tables\Columns\TextColumn::make('Montant')->label('Montant'),
                Tables\Columns\TextColumn::make('Description')->label('Description'), 
                TextColumn::make('Description')->searchable()
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
            'index' => Pages\ListProjets::route('/'),
            'create' => Pages\CreateProjet::route('/create'),
            'edit' => Pages\EditProjet::route('/{record}/edit'),
        ];
    }    
}
