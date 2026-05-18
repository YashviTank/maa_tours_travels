<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'location',
        'tour_id',
        'rating',
        'review',
        'image_url',
        'status'
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }
}
