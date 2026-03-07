<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($id, $name)
    {
        $title = "Dashbboard";
        $user = User::where('id', $id)->first();
        return view('frontend.components.dashboard.index', compact('title', 'user'));
    }
    public function mydonation($id, $name)
    {
        $title = "Donasi Saya";
        $user = User::where('id', $id)->first();
        return view('frontend.components.dashboard.index', compact('title', 'user'));
    }
}
