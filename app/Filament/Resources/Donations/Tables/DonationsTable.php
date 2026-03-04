<?php

namespace App\Filament\Resources\Donations\Tables;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Banner')
                    ->disk('public')
                    ->visibility('public')
                    ->circular(true)
                    ->height(60),
                TextColumn::make('title')
                    ->label('Judul Donasi')
                    ->searchable()
                    ->limit(10)
                    ->tooltip(fn($record) => $record->title),
                TextColumn::make('item_name')
                    ->label('Jenis Barang'),
                TextColumn::make('target_quantity')
                    ->label('Target')
                    ->formatStateUsing(
                        fn($record) =>
                        number_format($record->target_quantity, 0, ',', '.') . ' ' . $record->unit
                    ),

                TextColumn::make('collected')
                    ->label('Terkumpul')
                    ->formatStateUsing(
                        fn($record) =>
                        number_format($record->collected, 0, ',', '.') . ' ' . $record->unit
                    ),
                TextColumn::make('progress')
                    ->label('Progress')
                    ->formatStateUsing(function ($record) {
                        $percentage = $record->progress;
                        return "
                                <div style='display:flex; align-items:center; gap:8px; width:140px;'>
                                    <div style='flex:1; background:#e5e7eb; border-radius:6px; height:10px;'>
                                        <div style='background:#22c55e;
                                                    width:{$percentage}%;
                                                    height:10px;
                                                    border-radius:6px;'>
                                        </div>
                                    </div>
                                    <span style='font-size:12px; min-width:35px; text-align:right;'>
                                        {$percentage}%
                                    </span>
                                </div>
                            ";
                    })
                    ->html(),
                IconColumn::make('status')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    Action::make('toggleActive')
                        ->label(fn($record) => $record->status ? 'Nonaktifkan' : 'Aktifkan')
                        ->icon(fn($record) => $record->status ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                        ->color(fn($record) => $record->status ? 'warning' : 'success')
                        ->requiresConfirmation()
                        ->action(function ($record) {
                            $record->update([
                                'status' => ! $record->status,
                            ]);
                        }),
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
