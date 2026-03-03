<?php

namespace App\Filament\Resources\VulnerableCategories\Pages;

use App\Filament\Resources\VulnerableCategories\VulnerableCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVulnerableCategory extends EditRecord
{
    protected static string $resource = VulnerableCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
