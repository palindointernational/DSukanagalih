<?php

namespace App\Filament\Resources\DonationRegistrations\Tables;

use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DonationRegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Pemberi Donasi')
                    ->searchable(),
                TextColumn::make('donation.title')
                    ->label('Donasi')
                    ->searchable()
                    ->limit(20)
                    ->tooltip(fn($record) => $record->donation?->title),
                TextColumn::make('quantity')
                    ->label('Jumlah')
                    ->formatStateUsing(
                        fn($state, $record) =>
                        number_format($state, 0, ',', '.') . ' ' . $record->donation?->unit
                    ),
                IconColumn::make('status')
                    ->label('Status')
                    ->icon(fn(string $state): string => match ($state) {
                        'Pending'   => 'heroicon-o-clock',
                        'Delivered' => 'heroicon-o-truck',
                        'Verified'  => 'heroicon-o-check-circle',
                        'Rejected'  => 'heroicon-o-x-circle',
                        'Cancelled' => 'heroicon-o-x-mark',
                        'Failed'    => 'heroicon-o-x-mark',
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'Pending'   => 'warning',
                        'Delivered' => 'info',
                        'Verified'  => 'success',
                        'Rejected'  => 'danger',
                        'Cancelled' => 'warning',
                        'Failed'    => 'danger',
                    }),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->searchable()
                    ->options(fn() => \App\Models\DonationRegistration::pluck('status', 'status')->toArray())
            ])
            ->recordActions([
                ActionGroup::make([
                    Action::make('verify')
                        ->label('Verify')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->visible(fn($record) => $record->status === 'Delivered')
                        ->requiresConfirmation()
                        ->action(function ($record) {
                            $record->update([
                                'status' => 'Verified',
                            ]);
                        }),

                    Action::make('reject')
                        ->label('Reject')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->visible(fn($record) => $record->status === 'Delivered')
                        ->requiresConfirmation()
                        ->action(function ($record) {
                            $record->update([
                                'status' => 'Rejected',
                            ]);
                        }),

                    Action::make('failed')
                        ->label('Mark as Failed')
                        ->icon('heroicon-o-exclamation-circle')
                        ->color('warning')
                        ->visible(fn($record) => $record->status === 'Delivered')
                        ->requiresConfirmation()
                        ->action(function ($record) {
                            $record->update([
                                'status' => 'Failed',
                            ]);
                        }),
                    Action::make('generateInvoice')
                        ->label('Generate Surat')
                        ->icon('heroicon-o-document-text')
                        ->color('primary')
                        ->visible(fn($record) => $record->status === 'Verified')
                        ->action(function ($record) {

                            $pdf = Pdf::loadView('filament.components.donation-invoice', [
                                'donation' => $record,
                                'date' => now(),
                                'invoice_number' => 'INV-DON-' . str_pad($record->id, 5, '0', STR_PAD_LEFT),
                            ]);

                            return response()->streamDownload(
                                fn() => print($pdf->output()),
                                'Invoice-Donation-' . $record->id . '.pdf'
                            );
                        }),
                    Action::make('viewResult')
                        ->label('View')
                        ->icon('heroicon-o-eye')
                        ->color('default')
                        ->modalHeading('Bukti Donasi')
                        ->visible(fn($record) => $record->status === 'Delivered')
                        ->modalContent(function ($record) {
                            $lastResult = $record;

                            if (! $lastResult) {
                                return 'Tidak ada hasil yang tersedia.';
                            }
                            return view('filament.components.view-donation-proof', [
                                'result' => $lastResult,
                            ]);
                        })
                        ->slideOver()
                        ->modalSubmitAction(false),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
