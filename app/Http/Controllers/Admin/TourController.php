<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::orderBy('created_at', 'desc')->get();
        return view('admin.tours.index', compact('tours'));
    }

    public function create()
    {
        return view('admin.tours.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'destination' => 'required|string|max:100',
            'duration' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'image_url' => 'nullable|url',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
            'highlights' => 'nullable|string',
            'inclusions' => 'nullable|string',
            'exclusions' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'category' => 'nullable|string|max:50',
            'rating' => 'nullable|numeric|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        Tour::create($validated);

        return redirect()->route('admin.tours.index')->with('success', 'Tour created successfully!');
    }

    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'destination' => 'required|string|max:100',
            'duration' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'image_url' => 'nullable|url',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
            'highlights' => 'nullable|string',
            'inclusions' => 'nullable|string',
            'exclusions' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'category' => 'nullable|string|max:50',
            'rating' => 'nullable|numeric|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $tour->update($validated);

        return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully!');
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully!');
    }

    public function toggleStatus(Tour $tour)
    {
        $tour->update([
            'status' => $tour->status === 'active' ? 'inactive' : 'active'
        ]);

        return back()->with('success', 'Tour status updated!');
    }
}
