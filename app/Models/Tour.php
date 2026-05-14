<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'destination',
        'duration',
        'price',
        'image_url',
        'description',
        'overview',
        'highlights',
        'inclusions',
        'exclusions',
        'itinerary',
        'category',
        'rating',
        'reviews',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'rating' => 'decimal:1',
            'reviews' => 'integer',
        ];
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
