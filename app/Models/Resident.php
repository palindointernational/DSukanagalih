<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'no_kk',
        'nik',
        'nama',
        'jk',
        'temp_lahir',
        'tgl_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'status_hubungan',
        'kewarganegaraan',
        'alamat',
        'rt',
        'rw',
    ];

    protected $casts = [
        'tgl_lahir' => 'date',
    ];

    public function vulnerableResident()
    {
        return $this->hasOne(VulnerableResident::class, 'resident_id');
    }
}
