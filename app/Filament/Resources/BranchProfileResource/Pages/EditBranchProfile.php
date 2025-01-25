<?php

namespace App\Filament\Resources\BranchProfileResource\Pages;

use App\Filament\Resources\BranchProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBranchProfile extends EditRecord
{
    protected static string $resource = BranchProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
