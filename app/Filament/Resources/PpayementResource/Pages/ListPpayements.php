<?php

namespace App\Filament\Resources\PpayementResource\Pages;

use App\Filament\Resources\PpayementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPpayements extends ListRecords
{
    protected static string $resource = PpayementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
