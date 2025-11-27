<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Service::query();

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $services = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'form_fields' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        // Ensure unique slug
        $originalSlug = $validated['slug'];
        $counter = 1;
        while (Service::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Create directory if it doesn't exist (root/assets/images/services)
            $uploadPath = base_path('assets/images/services');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);
            $validated['image'] = 'assets/images/services/' . $imageName;
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'form_fields' => 'nullable|array',
        ]);

        // Handle is_active checkbox (if not sent, set to false)
        $validated['is_active'] = $request->has('is_active') ? (bool)$request->input('is_active') : false;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists (check both public and root paths)
            if ($service->image) {
                $oldPathPublic = public_path($service->image);
                $oldPathRoot = base_path($service->image);
                
                if (file_exists($oldPathPublic)) {
                    unlink($oldPathPublic);
                }
                if (file_exists($oldPathRoot)) {
                    unlink($oldPathRoot);
                }
            }
            
            // Create directory if it doesn't exist (root/assets/images/services)
            $uploadPath = base_path('assets/images/services');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);
            $validated['image'] = 'assets/images/services/' . $imageName;
        }

        $service->update($validated);
        
        // Refresh the model to ensure we have the latest data
        $service->refresh();

        return redirect()->route('admin.services.edit', $service)
            ->with('success', 'Service updated successfully!');
    }

    public function destroy(Service $service)
    {
        // Delete image if exists (check both public and root paths)
        if ($service->image) {
            $oldPathPublic = public_path($service->image);
            $oldPathRoot = base_path($service->image);
            
            if (file_exists($oldPathPublic)) {
                unlink($oldPathPublic);
            }
            if (file_exists($oldPathRoot)) {
                unlink($oldPathRoot);
            }
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully!');
    }
}

