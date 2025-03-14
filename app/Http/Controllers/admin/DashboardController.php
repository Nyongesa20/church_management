<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assembly;
use App\Models\Member;
use App\Models\Event;
use App\Models\Offering;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Basic counts
            $assembliesCount = Assembly::count();
            $membersCount = Member::count();
            $eventsCount = Event::count();
            $offeringsCount = Offering::sum('amount');

            // Chart data
            $assembliesChartData = [
                'labels' => Assembly::pluck('name')->toArray(),
                'data' => Assembly::withCount('events')->pluck('events_count')->toArray()
            ];

            $membersChartData = [
                'labels' => ['Male', 'Female'],
                'data' => [
                    Member::where('gender', 'Male')->count(),
                    Member::where('gender', 'Female')->count()
                ]
            ];

            $eventsChartData = [
                'labels' => Event::pluck('date')->toArray(),
                'data' => Event::pluck('id')->toArray()
            ];

            $offeringsChartData = [
                'labels' => Assembly::pluck('name')->toArray(),
                'data' => Assembly::withSum('offerings', 'amount')->pluck('offerings_sum_amount')->toArray()
            ];

            return view('admin.dashboard', compact(
                'assembliesCount', 'membersCount', 'eventsCount', 'offeringsCount',
                'assembliesChartData', 'membersChartData', 'eventsChartData', 'offeringsChartData'
            ));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
