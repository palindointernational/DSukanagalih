<?php

namespace App\Filament\Resources\VulnerableCategories\Pages;

use App\Filament\Resources\VulnerableCategories\VulnerableCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVulnerableCategory extends CreateRecord
{
    protected static string $resource = VulnerableCategoryResource::class;
}
