@extends('admin.layout')

@section('title', 'Manage Tours')

@section('content')
<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">+ Add New Tour</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Destination</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tours as $tour)
            <tr>
                <td>{{ $tour->id }}</td>
                <td>{{ $tour->title }}</td>
                <td>{{ $tour->destination }}</td>
                <td>{{ $tour->duration }}</td>
                <td>₹{{ number_format($tour->price, 0) }}</td>
                <td>⭐ {{ $tour->rating }} ({{ $tour->reviews }})</td>
                <td>
                    @if($tour->status === 'active')
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive</span>
                    @endif
                </td>
                <td>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <a href="{{ route('admin.tours.edit', $tour) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.tours.toggle-status', $tour) }}" method="POST" style="margin: 0;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-warning">
                                {{ $tour->status === 'active' ? 'Deactivate' : 'Activate' }}
                            </button>
                        </form>
                        <form action="{{ route('admin.tours.destroy', $tour) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align: center; padding: 40px;">No tours found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
