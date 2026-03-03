<?php

namespace App\Filament\Resources\VulnerableCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VulnerableCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kategori Rentan')
                    ->description('Kategori rentan yang digunakan untuk mengelompokkan penduduk rentan berdasarkan kriteria tertentu.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Nama Kategori')
                                ->required(),
                            TextInput::make('criteria')
                                ->label('Kriteria')
                                ->required(),
                            Toggle::make('is_active')
                                ->label('Aktif')
                                ->helperText('Tandai jika kategori ini aktif dan dapat digunakan untuk mengelompokkan penduduk rentan.'),
                        ]),
                    ])->columnSpanFull(),
            ]);
    }
}
