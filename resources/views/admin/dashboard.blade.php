@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <h3>Active Tours</h3>
        <div class="number">{{ $stats['total_tours'] }}</div>
    </div>
    <div class="stat-card">
        <h3>Total Bookings</h3>
        <div class="number">{{ $stats['total_bookings'] }}</div>
    </div>
    <div class="stat-card">
        <h3>Pending Bookings</h3>
        <div class="number">{{ $stats['pending_bookings'] }}</div>
    </div>
    <div class="stat-card">
        <h3>New Messages</h3>
        <div class="number">{{ $stats['new_messages'] }}</div>
    </div>
</div>

<div class="card">
    <h2 style="margin-bottom: 20px;">Recent Bookings</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Tour</th>
                <th>Travel Date</th>
                <th>Guests</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recent_bookings as $booking)
            <tr>
                <td>#{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->tour->title ?? 'N/A' }}</td>
                <td>{{ $booking->travel_date->format('M d, Y') }}</td>
                <td>{{ $booking->adults + $booking->children }}</td>
                <td>₹{{ number_format($booking->total_amount, 0) }}</td>
                <td>
                    @if($booking->status === 'pending')
                        <span class="badge badge-warning">Pending</span>
                    @elseif($booking->status === 'confirmed')
                        <span class="badge badge-success">Confirmed</span>
                    @else
                        <span class="badge badge-danger">Cancelled</span>
                    @endif
                </td>
                <td>{{ $booking->created_at->format('M d, Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align: center; padding: 40px;">No bookings yet</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
