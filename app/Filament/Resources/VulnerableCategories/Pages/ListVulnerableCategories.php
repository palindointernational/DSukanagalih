<?php

namespace App\Filament\Resources\VulnerableCategories\Pages;

use App\Filament\Resources\VulnerableCategories\VulnerableCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVulnerableCategories extends ListRecords
{
    protected static string $resource = VulnerableCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
