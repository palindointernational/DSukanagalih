<?php

namespace App\Filament\Resources\DonationRegistrations;

use App\Filament\Resources\DonationRegistrations\Pages\CreateDonationRegistration;
use App\Filament\Resources\DonationRegistrations\Pages\EditDonationRegistration;
use App\Filament\Resources\DonationRegistrations\Pages\ListDonationRegistrations;
use App\Filament\Resources\DonationRegistrations\Pages\ViewDonationRegistration;
use App\Filament\Resources\DonationRegistrations\Schemas\DonationRegistrationForm;
use App\Filament\Resources\DonationRegistrations\Schemas\DonationRegistrationInfolist;
use App\Filament\Resources\DonationRegistrations\Tables\DonationRegistrationsTable;
use App\Models\DonationRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DonationRegistrationResource extends Resource
{
    protected static ?string $model = DonationRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHeart;

    protected static ?string $recordTitleAttribute = 'Daftar Donasi';
    protected static ?string $navigationLabel = 'Daftar Donasi';
    protected static ?string $modelLabel = 'Daftar Donasi';
    protected static ?string $pluralModelLabel = 'Daftar Donasi';
    protected static string | UnitEnum | null $navigationGroup = 'Donasi';
    protected static ?int $navigationSort = 5;
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'delivered')->count();
    }
    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Data with status delivered';
    }
    public static function form(Schema $schema): Schema
    {
        return DonationRegistrationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DonationRegistrationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonationRegistrationsTable::configure($table);
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
            'index' => ListDonationRegistrations::route('/'),
            // 'create' => CreateDonationRegistration::route('/create'),
            'view' => ViewDonationRegistration::route('/{record}'),
            // 'edit' => EditDonationRegistration::route('/{record}/edit'),
        ];
    }
}
