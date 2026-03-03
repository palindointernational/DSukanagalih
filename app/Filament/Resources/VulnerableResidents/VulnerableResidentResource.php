<?php

namespace App\Filament\Resources\VulnerableResidents;

use App\Filament\Resources\VulnerableResidents\Pages\CreateVulnerableResident;
use App\Filament\Resources\VulnerableResidents\Pages\EditVulnerableResident;
use App\Filament\Resources\VulnerableResidents\Pages\ListVulnerableResidents;
use App\Filament\Resources\VulnerableResidents\Schemas\VulnerableResidentForm;
use App\Filament\Resources\VulnerableResidents\Tables\VulnerableResidentsTable;
use App\Models\VulnerableResident;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VulnerableResidentResource extends Resource
{
    protected static ?string $model = VulnerableResident::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'VulnerableResident';

    public static function form(Schema $schema): Schema
    {
        return VulnerableResidentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VulnerableResidentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVulnerableResidents::route('/'),
            'create' => CreateVulnerableResident::route('/create'),
            'edit' => EditVulnerableResident::route('/{record}/edit'),
        ];
    }
}
