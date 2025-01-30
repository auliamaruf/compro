<?php

namespace App\Filament\Resources\TarifAirResource\Pages;

use App\Filament\Resources\TarifAirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTarifAir extends EditRecord
{
    protected static string $resource = TarifAirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
