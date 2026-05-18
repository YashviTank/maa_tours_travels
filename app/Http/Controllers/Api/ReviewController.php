<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        try {
            $reviews = Review::approved()
                ->with('tour:id,title')
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json([
                'success' => true,
                'data' => $reviews
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch reviews',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'location' => 'nullable|string|max:255',
                'tour_id' => 'nullable|exists:tours,id',
                'rating' => 'required|integer|min:1|max:5',
                'review' => 'required|string',
                'image_url' => 'nullable|url'
            ]);

            $review = Review::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Review submitted successfully.',
                'data' => $review
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit review',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
