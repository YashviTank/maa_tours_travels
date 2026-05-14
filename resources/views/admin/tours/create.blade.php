@extends('admin.layout')

@section('title', 'Add New Tour')

@section('content')
<div class="card">
    <form action="{{ route('admin.tours.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Tour Title *</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')<span style="color: red;">{{ $message }}</span>@enderror
        </div>
        
        <div class="form-group">
            <label for="destination">Destination *</label>
            <input type="text" id="destination" name="destination" value="{{ old('destination') }}" required>
        </div>
        
        <div class="form-group">
            <label for="duration">Duration *</label>
            <input type="text" id="duration" name="duration" value="{{ old('duration') }}" placeholder="e.g., 7 Days / 6 Nights" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price (₹) *</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" required>
        </div>
        
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" id="image_url" name="image_url" value="{{ old('image_url') }}">
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="overview">Overview</label>
            <textarea id="overview" name="overview">{{ old('overview') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="highlights">Highlights</label>
            <textarea id="highlights" name="highlights">{{ old('highlights') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="inclusions">Inclusions</label>
            <textarea id="inclusions" name="inclusions">{{ old('inclusions') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="exclusions">Exclusions</label>
            <textarea id="exclusions" name="exclusions">{{ old('exclusions') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="itinerary">Itinerary</label>
            <textarea id="itinerary" name="itinerary">{{ old('itinerary') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category">
                <option value="">Select Category</option>
                <option value="adventure" {{ old('category') === 'adventure' ? 'selected' : '' }}>Adventure</option>
                <option value="nature" {{ old('category') === 'nature' ? 'selected' : '' }}>Nature</option>
                <option value="beach" {{ old('category') === 'beach' ? 'selected' : '' }}>Beach</option>
                <option value="culture" {{ old('category') === 'culture' ? 'selected' : '' }}>Culture</option>
                <option value="pilgrimage" {{ old('category') === 'pilgrimage' ? 'selected' : '' }}>Pilgrimage</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="rating">Rating (0-5)</label>
            <input type="number" id="rating" name="rating" value="{{ old('rating', 4.5) }}" step="0.1" min="0" max="5">
        </div>
        
        <div class="form-group">
            <label for="reviews">Number of Reviews</label>
            <input type="number" id="reviews" name="reviews" value="{{ old('reviews', 0) }}" min="0">
        </div>
        
        <div class="form-group">
            <label for="status">Status *</label>
            <select id="status" name="status" required>
                <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        
        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-success">Add Tour</button>
            <a href="{{ route('admin.tours.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection
