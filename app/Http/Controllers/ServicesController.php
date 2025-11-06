<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('services', compact('services'));
    }

    public function detail($service = null)
    {
        if ($service) {
            $service = Service::where('slug', $service)->where('is_active', true)->firstOrFail();
        } else {
            $service = Service::where('is_active', true)->first();
        }

        if (!$service) {
            abort(404, 'Service not found');
        }

        return view('service-detail', compact('service'));
    }
}
