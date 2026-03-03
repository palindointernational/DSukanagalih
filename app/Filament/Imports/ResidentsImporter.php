<?php

namespace App\Filament\Imports;

use App\Models\Resident;
use Carbon\Carbon;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class ResidentsImporter extends Importer
{
    protected static bool $shouldQueue = true;
    protected static ?string $model = Resident::class;
    protected static int $chunkSize = 300;
    protected static int $batchSize = 300;

    public function handleRecord(array $data): Resident
    {
        return Resident::create([
            'no_kk' => preg_replace('/\D/', '', $data['no_kk'] ?? ''),
            'nik' => preg_replace('/\D/', '', $data['nik'] ?? ''),
            'nama' => $data['nama'] ?? '-',
            'jk' => in_array($data['jk'] ?? null, ['L', 'P']) ? $data['jk'] : null,
            'temp_lahir' => $data['temp_lahir'] ?? null,
            'tgl_lahir' => $this->parseTanggal($data['tgl_lahir'] ?? null),
            'agama' => $data['agama'] ?? null,
            'pendidikan' => $data['pendidikan'] ?? null,
            'pekerjaan' => $data['pekerjaan'] ?? null,
            'status_perkawinan' => $data['status_perkawinan'] ?? null,
            'status_hubungan' => $data['status_hubungan'] ?? null,
            'kewarganegaraan' => $data['kewarganegaraan'] ?? null,
            'alamat' => $data['alamat'] ?? null,
            'rt' => str_pad((string)($data['rt'] ?? ''), 3, '0', STR_PAD_LEFT),
            'rw' => str_pad((string)($data['rw'] ?? ''), 3, '0', STR_PAD_LEFT),
        ]);
    }
    private function parseTanggal($value): ?string
    {
        if (empty($value)) {
            return null;
        }

        if (is_numeric($value)) {
            return \Carbon\Carbon::createFromTimestamp(
                ((int) $value - 25569) * 86400
            )->format('Y-m-d');
        }

        $value = trim($value);

        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
            return $value;
        }

        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $value)) {
            try {
                return \Carbon\Carbon::createFromFormat('j/n/Y', $value)
                    ->format('Y-m-d');
            } catch (\Exception $e) {
                return null;
            }
        }

        return null;
    }
    public static function getColumns(): array
    {
        return [
            ImportColumn::make('no_kk'),
            ImportColumn::make('nik'),
            ImportColumn::make('nama'),
            ImportColumn::make('jk'),
            ImportColumn::make('temp_lahir'),
            ImportColumn::make('tgl_lahir'),
            ImportColumn::make('agama'),
            ImportColumn::make('pendidikan'),
            ImportColumn::make('pekerjaan'),
            ImportColumn::make('status_perkawinan'),
            ImportColumn::make('status_hubungan'),
            ImportColumn::make('kewarganegaraan'),
            ImportColumn::make('alamat'),
            ImportColumn::make('rt'),
            ImportColumn::make('rw'),
        ];
    }

    public function resolveRecord(): Resident
    {
        return new Resident();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your residents import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
