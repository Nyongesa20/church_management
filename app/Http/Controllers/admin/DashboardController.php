<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Member;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalMembers = Member::count();
        $totalDonations = Donation::sum('amount');
        $totalEvents = Event::count();
        $totalServices = Service::count();
        
        $donationTrends = Donation::selectRaw('MONTH(created_at) as month, SUM(amount) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalMembers',
            'totalDonations',
            'totalEvents',
            'totalServices',
            'donationTrends'
        ));
    }
}
