<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'email',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'subscribed_at' => 'datetime',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
