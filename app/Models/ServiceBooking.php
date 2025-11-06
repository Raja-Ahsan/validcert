<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'email',
        'phone',
        'message',
        'form_data',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'form_data' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

