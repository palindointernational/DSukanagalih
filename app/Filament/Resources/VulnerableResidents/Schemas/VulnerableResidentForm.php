<?php

namespace App\Filament\Resources\VulnerableResidents\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VulnerableResidentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Penduduk Rentan')
                    ->description('Lengkapi detail data warga sesuai dengan Kartu Keluarga.')
                    ->schema([
                        Grid::make(2)->schema([
                            Select::make('resident_id')
                                ->label('Penduduk')
                                ->options(function () {
                                    return \App\Models\Resident::pluck('nama', 'id');
                                })
                                ->required(),
                            Select::make('category_id')
                                ->label('Kategori')
                                 ->options(function () {
                                    return \App\Models\VulnerableCategory::pluck('name', 'id');
                                })
                                ->required(),
                            TextInput::make('no_kk')
                                ->label('Nomor KK')
                                ->required(),
                            TextInput::make('name')
                            ->label('Nama Lengkap')
                                ->required(),
                            Textarea::make('address')
                                ->label('Alamat')
                                ->required()
                                ->columnSpanFull(),
                            Textarea::make('status')
                                ->label('Status')
                                ->required()
                                ->columnSpanFull(),
                            TextInput::make('coordinates')
                            ->label('Koordinat')
                                ->required(),
                        ]),
                    ])->columnSpanFull(),
                            
            ]);
    }
}
