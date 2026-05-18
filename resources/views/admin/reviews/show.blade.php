@extends('admin.layout')

@section('title', 'Review Details')

@section('content')
<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
        ← Back to Reviews
    </a>
</div>

@if(session('success'))
<div style="background: #d1fae5; border: 1px solid #10b981; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 30px;">
        <div>
            <h2 style="margin: 0 0 10px 0; color: #1f2937; font-size: 24px;">Review Details</h2>
            <div style="display: flex; align-items: center; gap: 15px;">
                @if($review->status === 'approved')
                    <span class="badge badge-success" style="font-size: 14px; padding: 6px 12px;">Approved</span>
                @elseif($review->status === 'rejected')
                    <span class="badge badge-danger" style="font-size: 14px; padding: 6px 12px;">Rejected</span>
                @else
                    <span class="badge" style="background: #fbbf24; color: #78350f; font-size: 14px; padding: 6px 12px;">Pending Review</span>
                @endif
                <span style="color: #6b7280; font-size: 14px;">Submitted on {{ $review->created_at->format('F d, Y \a\t h:i A') }}</span>
            </div>
        </div>
        <div style="color: #f59e0b; font-size: 32px;">
            {{ str_repeat('★', $review->rating) }}{{ str_repeat('☆', 5 - $review->rating) }}
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Customer Name</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0; font-weight: 500;">{{ $review->name }}</p>
        </div>
        
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Email</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0;">{{ $review->email ?? 'Not provided' }}</p>
        </div>
        
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Location</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0;">{{ $review->location ?? 'Not provided' }}</p>
        </div>
        
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Tour</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0;">{{ $review->tour ? $review->tour->title : 'General Review' }}</p>
        </div>
        
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Rating</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0;">{{ $review->rating }} out of 5 stars</p>
        </div>
        
        <div>
            <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 8px; text-transform: uppercase; font-weight: 600;">Review ID</h3>
            <p style="color: #1f2937; font-size: 18px; margin: 0;">#{{ $review->id }}</p>
        </div>
    </div>

    <div style="margin-bottom: 30px;">
        <h3 style="color: #6b7280; font-size: 14px; margin-bottom: 12px; text-transform: uppercase; font-weight: 600;">Review Content</h3>
        <div style="background: #f9fafb; padding: 20px; border-radius: 8px; border-left: 4px solid #2563eb;">
            <p style="color: #1f2937; font-size: 16px; line-height: 1.8; margin: 0; white-space: pre-wrap;">{{ $review->review }}</p>
        </div>
    </div>

    <div style="border-top: 2px solid #e5e7eb; padding-top: 30px; display: flex; gap: 15px; justify-content: center;">
        @if($review->status !== 'approved')
        <form action="{{ route('admin.reviews.update-status', $review) }}" method="POST" style="margin: 0;">
            @csrf
            <input type="hidden" name="status" value="approved">
            <button type="submit" class="btn btn-success" style="padding: 14px 40px; font-size: 16px;">
                ✓ Accept Review
            </button>
        </form>
        @endif
        
        @if($review->status !== 'rejected')
        <form action="{{ route('admin.reviews.update-status', $review) }}" method="POST" style="margin: 0;">
            @csrf
            <input type="hidden" name="status" value="rejected">
            <button type="submit" class="btn btn-warning" style="padding: 14px 40px; font-size: 16px;">
                ✗ Reject Review
            </button>
        </form>
        @endif
        
        @if($review->status === 'approved' || $review->status === 'rejected')
        <form action="{{ route('admin.reviews.update-status', $review) }}" method="POST" style="margin: 0;">
            @csrf
            <input type="hidden" name="status" value="pending">
            <button type="submit" class="btn btn-primary" style="padding: 14px 40px; font-size: 16px;">
                ↻ Reset to Pending
            </button>
        </form>
        @endif
    </div>
</div>

<div class="card" style="margin-top: 20px;">
    <h3 style="color: #1f2937; font-size: 18px; margin-bottom: 15px;">Danger Zone</h3>
    <p style="color: #6b7280; margin-bottom: 15px;">Once you delete this review, there is no going back. Please be certain.</p>
    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to permanently delete this review? This action cannot be undone.')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="padding: 12px 30px;">
            🗑️ Delete Review Permanently
        </button>
    </form>
</div>
@endsection
