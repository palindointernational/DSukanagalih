<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationRegistration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";
        $donations = Donation::where('status', true)
            ->withCount(['registrations' => function ($query) {
                $query->where('status', 'Verified');
            }])
            ->withSum(['registrations' => function ($query) {
                $query->where('status', 'Verified');
            }], 'quantity')
            ->get();

        foreach ($donations as $donation) {
            //progress
            $collected = $donation->registrations_sum_quantity ?? 0;
            $target = $donation->target_quantity ?? 1;
            $progress = min(100, ($collected / $target) * 100);
            //deadline
            $today = \Carbon\Carbon::today();
            $deadline = \Carbon\Carbon::parse($donation->deadline);
            $daysLeft = max(0, $today->diffInDays($deadline, false));
        }
        return view('index', compact('title', 'donations', 'progress', 'daysLeft'));
    }
}
