<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update settings.
     */
    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'nullable|string|max:255',
            'header_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'footer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'site_favicon' => 'nullable|image|mimes:ico,png,jpg|max:1024',
            'site_email' => 'nullable|email|max:255',
            'site_phone' => 'nullable|string|max:255',
            'site_address' => 'nullable|string|max:500',
            'facebook_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            'tiktok_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
        ]);

        // Handle header logo upload
        if ($request->hasFile('header_logo')) {
            // Delete old header logo if exists (check both storage and root paths)
            $oldHeaderLogo = Setting::get('header_logo') ?? Setting::get('site_logo');
            if ($oldHeaderLogo) {
                $oldPathStorage = storage_path('app/public/' . $oldHeaderLogo);
                $oldPathRoot = base_path($oldHeaderLogo);
                
                if (file_exists($oldPathStorage)) {
                    unlink($oldPathStorage);
                }
                if (file_exists($oldPathRoot) && strpos($oldHeaderLogo, 'assets/') === 0) {
                    unlink($oldPathRoot);
                }
            }
            
            // Create directory if it doesn't exist (root/assets/images/settings)
            $uploadPath = base_path('assets/images/settings');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $logo = $request->file('header_logo');
            $logoName = 'header_logo_' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->move($uploadPath, $logoName);
            Setting::set('header_logo', 'assets/images/settings/' . $logoName);
        }

        // Handle footer logo upload
        if ($request->hasFile('footer_logo')) {
            // Delete old footer logo if exists (check both storage and root paths)
            $oldFooterLogo = Setting::get('footer_logo');
            if ($oldFooterLogo) {
                $oldPathStorage = storage_path('app/public/' . $oldFooterLogo);
                $oldPathRoot = base_path($oldFooterLogo);
                
                if (file_exists($oldPathStorage)) {
                    unlink($oldPathStorage);
                }
                if (file_exists($oldPathRoot) && strpos($oldFooterLogo, 'assets/') === 0) {
                    unlink($oldPathRoot);
                }
            }
            
            // Create directory if it doesn't exist (root/assets/images/settings)
            $uploadPath = base_path('assets/images/settings');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $logo = $request->file('footer_logo');
            $logoName = 'footer_logo_' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->move($uploadPath, $logoName);
            Setting::set('footer_logo', 'assets/images/settings/' . $logoName);
        }

        // Handle favicon upload
        if ($request->hasFile('site_favicon')) {
            // Delete old favicon if exists (check both storage and root paths)
            $oldFavicon = Setting::get('site_favicon');
            if ($oldFavicon) {
                $oldPathStorage = storage_path('app/public/' . $oldFavicon);
                $oldPathRoot = base_path($oldFavicon);
                
                if (file_exists($oldPathStorage)) {
                    unlink($oldPathStorage);
                }
                if (file_exists($oldPathRoot) && strpos($oldFavicon, 'assets/') === 0) {
                    unlink($oldPathRoot);
                }
            }
            
            // Create directory if it doesn't exist (root/assets/images/settings)
            $uploadPath = base_path('assets/images/settings');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $favicon = $request->file('site_favicon');
            $faviconName = 'favicon_' . time() . '.' . $favicon->getClientOriginalExtension();
            $favicon->move($uploadPath, $faviconName);
            Setting::set('site_favicon', 'assets/images/settings/' . $faviconName);
        }

        // Update other settings
        $settings = [
            'site_name',
            'site_email',
            'site_phone',
            'site_address',
            'facebook_url',
            'twitter_url',
            'instagram_url',
            'youtube_url',
            'tiktok_url',
            'linkedin_url',
        ];

        foreach ($settings as $key) {
            if ($request->has($key)) {
                Setting::set($key, $request->input($key));
            }
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully!');
    }
}
