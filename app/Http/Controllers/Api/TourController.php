<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::active()->orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'data' => $tours
        ]);
    }

    public function show($id)
    {
        $tour = Tour::find($id);

        if (!$tour) {
            return response()->json([
                'success' => false,
                'message' => 'Tour not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $tour
        ]);
    }
}
