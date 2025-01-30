<?php

namespace App\Filament\Resources\TarifAbonemenResource\Pages;

use App\Filament\Resources\TarifAbonemenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTarifAbonemens extends ListRecords
{
    protected static string $resource = TarifAbonemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
