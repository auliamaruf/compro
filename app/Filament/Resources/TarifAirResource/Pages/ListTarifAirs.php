<?php

namespace App\Filament\Resources\TarifAirResource\Pages;

use App\Filament\Resources\TarifAirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTarifAirs extends ListRecords
{
    protected static string $resource = TarifAirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
