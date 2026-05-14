<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\ContactSubmission;
use App\Models\Tour;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_tours' => Tour::active()->count(),
            'total_bookings' => Booking::count(),
            'pending_bookings' => Booking::pending()->count(),
            'new_messages' => ContactSubmission::new()->count(),
        ];

        $recent_bookings = Booking::with('tour')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_bookings'));
    }
}
