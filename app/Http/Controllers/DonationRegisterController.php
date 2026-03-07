<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationRegistration;
use App\Models\User;
use App\Notifications\DonationRegistered;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationRegisterController extends Controller
{
    public function detail($slug)
    {
        $title = "Detail Donasi";
        $donation = Donation::where('slug', $slug)
            ->withCount(['registrations' => function ($query) {
                $query->where('status', 'Verified');
            }])
            ->withSum(['registrations' => function ($query) {
                $query->where('status', 'Verified');
            }], 'quantity')
            ->first();
        $collected = $donation->registrations_sum_quantity ?? 0;
        $target = $donation->target_quantity ?? 1;
        $progress = min(100, ($collected / $target) * 100);

        //deadline
        $today = \Carbon\Carbon::today();
        $deadline = \Carbon\Carbon::parse($donation->deadline);
        $daysLeft = max(0, $today->diffInDays($deadline, false));
        return view('frontend.components.donation.detail', compact('title', 'donation', 'progress', 'daysLeft'));
    }

    public function register($slug)
    {
        $title = "Detail Donasi";
        $donation = Donation::where('slug', $slug)->first();
        return view('frontend.components.donation.step2', compact('title', 'donation'));
    }

    public function step3($slug, $id)
    {
        $title = "Donasi";
        $donation = Donation::where('slug', $slug)->first();
        $donationReg = DonationRegistration::where('id', $id)->first();
        return view('frontend.components.donation.step3', compact('title', 'donation', 'donationReg'));
    }

    public function post(Request $request, $slug)
    {
        $donation = Donation::where('slug', $slug)->first();
        $registration = DonationRegistration::create([
            'donation_id' => $donation->id,
            'name' => $request->name,
            'contact' => $request->contact,
            'quantity' => $request->quantity,
            'status' => "Delivered",
            'user_id' => Auth::id(),
        ]);
        $admins = User::role(['super_admin', 'admin'])->get();
        foreach ($admins as $admin) {
            $admin->notify(new DonationRegistered($registration));
        }
        return redirect()->route('step3', ['slug' => $slug, 'id' => $registration->id]);
    }
}
