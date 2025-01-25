<?php

namespace App\Filament\Resources\CompanyHistoryResource\Pages;

use App\Filament\Resources\CompanyHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyHistories extends ListRecords
{
    protected static string $resource = CompanyHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
