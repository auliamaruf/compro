<?php

namespace App\Filament\Resources\CompanyHistoryResource\Pages;

use App\Filament\Resources\CompanyHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyHistory extends EditRecord
{
    protected static string $resource = CompanyHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
