<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VulnerableResident extends Model
{
    protected $fillable = [
        'resident_id',
        'category_id',
        'no_kk',
        'name',
        'address',
        'status',
        'coordinates',
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id');
    }

    public function category()
    {
        return $this->belongsTo(VulnerableCategory::class, 'category_id');
    }
}
