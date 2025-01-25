<?php

namespace App\Filament\Resources\BranchProfileResource\Pages;

use App\Filament\Resources\BranchProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBranchProfiles extends ListRecords
{
    protected static string $resource = BranchProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
