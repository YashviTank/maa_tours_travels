<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'travel_date',
        'adults',
        'children',
        'message',
        'total_amount',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'travel_date' => 'date',
            'total_amount' => 'decimal:2',
            'adults' => 'integer',
            'children' => 'integer',
        ];
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }
}
