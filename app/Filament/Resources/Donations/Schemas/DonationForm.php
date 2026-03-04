<?php

namespace App\Filament\Resources\Donations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DonationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Donasi')
                    ->description('Lengkapi detail donasi.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Banner Donasi')
                            ->image()
                            ->directory('donations')
                            ->visibility('public')
                            ->disk('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->validationMessages([
                                'max' => 'Ukuran gambar maksimal 5MB.',
                            ])
                            ->columnSpanFull(),
                        TextInput::make('title')
                            ->label('Nama Donasi')
                            ->required(),
                        Textarea::make('description')
                            ->label('Keterangan/Deskripsi'),
                    ])->columnSpanFull(),
                Section::make('Detail Donasi')
                    ->description('Lengkapi detail donasi.')
                    ->schema([
                        TextInput::make('item_name')
                            ->label('Nama Barang')
                            ->required(),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('target_quantity')
                                    ->label('Target')
                                    ->required()
                                    ->regex('/^[0-9]+$/')
                                    ->extraInputAttributes(['inputmode' => 'numeric'])
                                    ->validationMessages([
                                        'regex' => 'Hanya boleh diisi angka.',
                                    ]),
                                Select::make('unit')
                                    ->label('Unit')
                                    ->native(false)
                                    ->options([
                                        'pcs' => 'Pcs',
                                        'kg' => 'KG',
                                        'liter' => 'Liter',
                                        'dus/karton' => 'Dus/Karton',
                                        'unit' => 'Unit',
                                    ])
                                    ->required()
                            ]),

                        Textarea::make('delivery_address')
                            ->label('Alamat Pengantaran')
                            ->required(),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('latitude')
                                    ->label('Latitude'),
                                TextInput::make('longitude')
                                    ->label('Longitude'),
                            ]),
                        DatePicker::make('deadline')
                            ->label('Deadline')
                            ->required(),
                        Toggle::make('status')
                            ->label('Status')
                            ->helperText('Tandai jika donasi ini aktif dan dapat digunakan.'),
                    ])->columnSpanFull(),
            ]);
    }
}
