<?php

namespace App\Http\Controllers;

use App\Models\DonationRegistration;
use App\Models\User;
use App\Notifications\DonationRegistered;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class DonationRegisterController extends Controller
{
    public function post(Request $request)
    {
        $registration = DonationRegistration::create([]);
        $admins = User::role('super_admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new DonationRegistered($registration));
        }
    }
}
