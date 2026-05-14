<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tour_id' => 'nullable|exists:tours,id',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'travel_date' => 'required|date',
            'adults' => 'nullable|integer|min:1',
            'children' => 'nullable|integer|min:0',
            'message' => 'nullable|string',
            'total_amount' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $booking = Booking::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Booking submitted successfully!',
            'booking_id' => $booking->id
        ], 201);
    }
}
