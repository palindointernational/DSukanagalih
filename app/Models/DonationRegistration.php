<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRegistration extends Model
{
    protected $fillable = [
        'donation_id',
        'user_id',
        'name',
        'contact',
        'quantity',
        'proof_photo',
        'status',
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donation_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
