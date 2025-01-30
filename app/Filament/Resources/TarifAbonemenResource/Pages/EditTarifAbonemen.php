<?php

namespace App\Filament\Resources\TarifAbonemenResource\Pages;

use App\Filament\Resources\TarifAbonemenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTarifAbonemen extends EditRecord
{
    protected static string $resource = TarifAbonemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
