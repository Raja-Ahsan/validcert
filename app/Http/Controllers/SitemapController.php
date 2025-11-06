<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $baseUrl = config('app.url');
        
        return response()->view('sitemap', [
            'services' => $services,
            'baseUrl' => rtrim($baseUrl, '/'),
        ])->header('Content-Type', 'text/xml');
    }
}
