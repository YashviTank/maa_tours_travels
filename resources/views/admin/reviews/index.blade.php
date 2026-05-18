@extends('admin.layout')

@section('title', 'Manage Reviews')

@section('content')
<div style="margin-bottom: 20px;">
    <h2 style="margin: 0; color: #1f2937; font-size: 28px; font-weight: 600;">Customer Reviews</h2>
    <p style="color: #6b7280; margin-top: 5px;">Manage and moderate customer reviews</p>
</div>

@if(session('success'))
<div style="background: #d1fae5; border: 1px solid #10b981; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Tour</th>
                <th>Rating</th>
                <th>Review</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>
                    <strong>{{ $review->name }}</strong>
                    @if($review->email)
                        <br><small style="color: #6b7280;">{{ $review->email }}</small>
                    @endif
                </td>
                <td>{{ $review->location ?? '-' }}</td>
                <td>{{ $review->tour ? $review->tour->title : 'General' }}</td>
                <td>
                    <span style="color: #f59e0b; font-size: 16px;">
                        {{ str_repeat('★', $review->rating) }}{{ str_repeat('☆', 5 - $review->rating) }}
                    </span>
                    <br><small style="color: #6b7280;">{{ $review->rating }}/5</small>
                </td>
                <td>
                    <div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis;">
                        {{ Str::limit($review->review, 100) }}
                    </div>
                </td>
                <td>
                    @if($review->status === 'approved')
                        <span class="badge badge-success">Approved</span>
                    @elseif($review->status === 'rejected')
                        <span class="badge badge-danger">Rejected</span>
                    @else
                        <span class="badge" style="background: #fbbf24; color: #78350f;">Pending</span>
                    @endif
                </td>
                <td>{{ $review->created_at->format('M d, Y') }}</td>
                <td>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <a href="{{ route('admin.reviews.show', $review) }}" class="btn btn-sm btn-primary">View</a>
                        
                        <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to delete this review?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" style="text-align: center; padding: 40px; color: #6b7280;">
                    No reviews found
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div style="margin-top: 20px; padding: 20px; background: #f9fafb; border-radius: 8px;">
    <h3 style="margin: 0 0 10px 0; color: #1f2937; font-size: 18px;">Review Statistics</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 15px;">
        <div>
            <div style="color: #6b7280; font-size: 14px;">Total Reviews</div>
            <div style="color: #1f2937; font-size: 24px; font-weight: 600;">{{ $reviews->count() }}</div>
        </div>
        <div>
            <div style="color: #6b7280; font-size: 14px;">Approved</div>
            <div style="color: #10b981; font-size: 24px; font-weight: 600;">{{ $reviews->where('status', 'approved')->count() }}</div>
        </div>
        <div>
            <div style="color: #6b7280; font-size: 14px;">Pending</div>
            <div style="color: #f59e0b; font-size: 24px; font-weight: 600;">{{ $reviews->where('status', 'pending')->count() }}</div>
        </div>
        <div>
            <div style="color: #6b7280; font-size: 14px;">Average Rating</div>
            <div style="color: #1f2937; font-size: 24px; font-weight: 600;">
                {{ $reviews->count() > 0 ? number_format($reviews->avg('rating'), 1) : '0.0' }}/5
            </div>
        </div>
    </div>
</div>
@endsection
