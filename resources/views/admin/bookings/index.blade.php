@extends('admin.layout')

@section('title', 'Manage Bookings')

@section('content')
<div class="card">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Tour</th>
                <th>Travel Date</th>
                <th>Guests</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
            <tr>
                <td>#{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->tour->title ?? 'N/A' }}</td>
                <td>{{ $booking->travel_date->format('M d, Y') }}</td>
                <td>A: {{ $booking->adults }}, C: {{ $booking->children }}</td>
                <td>₹{{ number_format($booking->total_amount, 0) }}</td>
                <td>
                    <form action="{{ route('admin.bookings.update-status', $booking) }}" method="POST" style="display: inline;">
                        @csrf
                        <select name="status" onchange="this.form.submit()" style="padding: 5px; border-radius: 4px;">
                            <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </form>
                </td>
                <td>
                    <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" style="text-align: center; padding: 40px;">No bookings found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
