<?php

namespace App\Filament\Resources\ProjetResource\Pages;

use App\Filament\Resources\ProjetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjet extends EditRecord
{
    protected static string $resource = ProjetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
