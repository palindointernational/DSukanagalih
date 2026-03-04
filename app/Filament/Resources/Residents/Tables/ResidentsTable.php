<?php

namespace App\Filament\Resources\Residents\Tables;

use App\Filament\Imports\ResidentsImporter;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\ImportAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;

class ResidentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_kk')
                    ->label('NO KK')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama')
                    ->label('Nama')
                    ->limit(15)
                    ->tooltip(fn($record) => $record->nama)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('temp_lahir', 'tgl_lahir')
                    ->label('Tempat, Tgl Lahir')
                    ->formatStateUsing(function ($state, $record) {
                        return $state . ', ' . \Carbon\Carbon::parse($record->tgl_lahir)->translatedFormat('d/m/Y');
                    })
                    ->sortable(['temp_lahir', 'tgl_lahir'])
                    ->searchable(['temp_lahir', 'tgl_lahir']),
                TextColumn::make('status_hubungan')
                    ->label('Status Hubungan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('alamat', 'rt', 'rw')
                    ->label('Alamat')
                    ->limit(15)
                    ->tooltip(fn($record) => $record->alamat . ',' . ' ' . 'RT' . ' ' . $record->rt . ' ' . 'RW' . ' ' . $record->rw)
                    ->formatStateUsing(function ($state, $record) {
                        return "{$state}, RT {$record->rt} / RW {$record->rw}";
                    })
                    ->sortable(['alamat', 'rt', 'rw'])
                    ->searchable(['alamat', 'rt', 'rw']),
            ])
            ->headerActions([
                ImportAction::make()
                    ->importer(ResidentsImporter::class)
                    ->label('Impor Data (CSV)')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->color('gray'),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('no_kk')
                    ->label('Pilih No. KK')
                    ->searchable()
                    ->options(fn() => \App\Models\Resident::pluck('no_kk', 'no_kk')->toArray())
            ])
            ->groups([
                Group::make('no_kk')
                    ->label('Nomor KK')
                    ->collapsible(),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
