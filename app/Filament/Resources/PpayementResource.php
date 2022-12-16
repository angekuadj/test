<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PpayementResource\Pages;
use App\Filament\Resources\PpayementResource\RelationManagers;
use App\Models\Ppayement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PpayementResource extends Resource
{
    protected static ?string $model = Ppayement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Montant')->label('Montant')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('Tpayement')->label('Temps Payement')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListPpayements::route('/'),
            'create' => Pages\CreatePpayement::route('/create'),
            'edit' => Pages\EditPpayement::route('/{record}/edit'),
        ];
    }    
}
