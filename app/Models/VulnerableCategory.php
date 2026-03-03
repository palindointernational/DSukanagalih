<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VulnerableCategory extends Model
{
    protected $fillable = [
        'name',
        'criteria',
        'is_active',
    ];

    public function vulnerableResidents()
    {
        return $this->hasMany(VulnerableResident::class, 'category_id');
    }
}
