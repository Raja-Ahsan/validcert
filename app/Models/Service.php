<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'image',
        'icon',
        'is_active',
        'sort_order',
        'form_fields',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'form_fields' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(ServiceBooking::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

