<?php

namespace App\Filament\Resources\VulnerableResidents\Pages;

use App\Filament\Resources\VulnerableResidents\VulnerableResidentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVulnerableResident extends EditRecord
{
    protected static string $resource = VulnerableResidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
