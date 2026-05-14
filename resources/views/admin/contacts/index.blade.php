@extends('admin.layout')

@section('title', 'Manage Messages')

@section('content')
<div class="card">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td>#{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ Str::limit($contact->message, 50) }}</td>
                <td>
                    <form action="{{ route('admin.contacts.update-status', $contact) }}" method="POST" style="display: inline;">
                        @csrf
                        <select name="status" onchange="this.form.submit()" style="padding: 5px; border-radius: 4px;">
                            <option value="new" {{ $contact->status === 'new' ? 'selected' : '' }}>New</option>
                            <option value="read" {{ $contact->status === 'read' ? 'selected' : '' }}>Read</option>
                            <option value="replied" {{ $contact->status === 'replied' ? 'selected' : '' }}>Replied</option>
                        </select>
                    </form>
                </td>
                <td>{{ $contact->created_at->format('M d, Y') }}</td>
                <td>
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" style="text-align: center; padding: 40px;">No messages found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
