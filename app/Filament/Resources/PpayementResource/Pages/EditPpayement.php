<?php

namespace App\Filament\Resources\PpayementResource\Pages;

use App\Filament\Resources\PpayementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPpayement extends EditRecord
{
    protected static string $resource = PpayementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
