<?php

namespace App\Filament\Widgets;

use App\Models\Resident;
use App\Models\VulnerableCategory;
use App\Models\VulnerableResident;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardSummary extends StatsOverviewWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $mode = $this->filters['mode'] ?? 'residents';

        if ($mode === 'residents') {
            return [
                Stat::make('Total Penduduk', number_format(Resident::count()))
                    ->icon('heroicon-o-users')
                    ->color('primary')
                    ->chart([10, 20, 15, 25, 30, 28, 35])
                    ->columnSpan('full'),

                Stat::make('Total Bayi (0-2 Tahun)', number_format(
                    Resident::whereBetween('tgl_lahir', [
                        now()->subYears(2),
                        now()
                    ])->count()
                ))
                    ->icon('heroicon-o-face-smile')
                    ->color('info')
                    ->chart([5, 8, 6, 9, 7, 10]),

                Stat::make('Total Balita (2-5 Tahun)', number_format(
                    Resident::whereBetween('tgl_lahir', [
                        now()->subYears(5),
                        now()->subYears(2)
                    ])->count()
                ))
                    ->icon('heroicon-o-puzzle-piece')
                    ->color('success')
                    ->chart([7, 6, 8, 9, 10, 12]),

                Stat::make('Anak-Anak (6-12 Tahun)', number_format(
                    Resident::whereBetween('tgl_lahir', [
                        now()->subYears(12),
                        now()->subYears(6)
                    ])->count()
                ))
                    ->icon('heroicon-o-academic-cap')
                    ->color('primary')
                    ->chart([15, 18, 17, 20, 22, 25])
                    ->columnSpan(2),

                Stat::make('Lansia Pria ( >60 Tahun)', number_format(
                    Resident::where('jk', 'L')
                        ->whereDate('tgl_lahir', '<=', now()->subYears(60))
                        ->count()
                ))
                    ->icon('heroicon-o-user')
                    ->color('warning')
                    ->chart([12, 14, 13, 15, 16]),

                Stat::make('Lansia Wanita ( >60 Tahun)', number_format(
                    Resident::where('jk', 'P')
                        ->whereDate('tgl_lahir', '<=', now()->subYears(60))
                        ->count()
                ))
                    ->icon('heroicon-o-user')
                    ->color('warning')
                    ->chart([10, 12, 11, 13, 14]),

                Stat::make('Non Rentan Pria (12-59 Tahun)', number_format(
                    Resident::where('jk', 'L')
                        ->whereBetween('tgl_lahir', [
                            now()->subYears(59),
                            now()->subYears(12)
                        ])
                        ->count()
                ))
                    ->icon('heroicon-o-shield-check')
                    ->color('success')
                    ->chart([20, 22, 21, 23, 25]),

                Stat::make('Non Rentan Wanita (12-59 Tahun)', number_format(
                    Resident::where('jk', 'P')
                        ->whereBetween('tgl_lahir', [
                            now()->subYears(59),
                            now()->subYears(12)
                        ])
                        ->count()
                ))
                    ->icon('heroicon-o-shield-check')
                    ->color('success')
                    ->chart([18, 20, 19, 21, 23]),
            ];
        }

        return [
            Stat::make('Total Penduduk Rentan', number_format(VulnerableResident::count()))
                ->icon('heroicon-o-exclamation-triangle')
                ->color('danger')
                ->chart([30, 35, 33, 37, 40])
                ->columnSpan(2),

            Stat::make('Ibu Hamil/Menyusui', number_format(
                VulnerableResident::where('category_id', 4)->count()
            ))
                ->icon('heroicon-o-heart')
                ->color('danger')
                ->chart([5, 6, 7, 8, 7])
                ->columnSpan(2),

            Stat::make('Difabel Fisik', number_format(
                VulnerableResident::whereIn('category_id', [7, 8])->count()
            ))
                ->icon('heroicon-o-exclamation-circle')
                ->color('warning')
                ->chart([8, 9, 10, 11, 12]),

            Stat::make('Difabel Mental', number_format(
                VulnerableResident::whereIn('category_id', [9, 10])->count()
            ))
                ->icon('heroicon-o-star')
                ->color('info')
                ->chart([6, 7, 6, 8, 9]),

            Stat::make('Lansia Pria (Risiko Tinggi)', number_format(
                VulnerableResident::where('category_id', 5)->count()
            ))
                ->icon('heroicon-o-user')
                ->color('danger')
                ->chart([10, 12, 11, 13, 14]),

            Stat::make('Lansia Wanita (Risiko Tinggi)', number_format(
                VulnerableResident::where('category_id', 6)->count()
            ))
                ->icon('heroicon-o-user')
                ->color('danger')
                ->chart([9, 10, 11, 12, 13]),
        ];
    }

    public function getColumns(): int | array
    {
        return 4;
    }
}
