@extends('admin.layouts.app')

@section('title', 'Website Settings')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-cog"></i> Website Settings</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- General Settings -->
            <div class="mb-4">
                <h5 class="border-bottom pb-2 mb-3">General Settings</h5>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="site_name" class="form-label">Site Name</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" 
                               value="{{ $settings['site_name'] ?? 'ValidCert' }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="site_logo" class="form-label">Site Logo</label>
                        <input type="file" class="form-control" id="site_logo" name="site_logo" accept="image/*">
                        @if(isset($settings['site_logo']) && $settings['site_logo'])
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $settings['site_logo']) }}" alt="Logo" style="max-height: 100px;">
                                <p class="text-muted small mt-1">Current Logo</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="site_favicon" class="form-label">Favicon</label>
                        <input type="file" class="form-control" id="site_favicon" name="site_favicon" accept="image/*">
                        @if(isset($settings['site_favicon']) && $settings['site_favicon'])
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $settings['site_favicon']) }}" alt="Favicon" style="max-height: 32px;">
                                <p class="text-muted small mt-1">Current Favicon</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mb-4">
                <h5 class="border-bottom pb-2 mb-3">Contact Information</h5>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="site_email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="site_email" name="site_email" 
                               value="{{ $settings['site_email'] ?? 'info@validcertpk.com' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="site_phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="site_phone" name="site_phone" 
                               value="{{ $settings['site_phone'] ?? '+92-300-90588-26' }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="site_address" class="form-label">Address</label>
                        <textarea class="form-control" id="site_address" name="site_address" rows="2">{{ $settings['site_address'] ?? 'Shahrah e faisal karachi, Pakistan' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="mb-4">
                <h5 class="border-bottom pb-2 mb-3">Social Media Links</h5>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="facebook_url" class="form-label">
                            <i class="fab fa-facebook-f"></i> Facebook URL
                        </label>
                        <input type="url" class="form-control" id="facebook_url" name="facebook_url" 
                               value="{{ $settings['facebook_url'] ?? '' }}" placeholder="https://facebook.com/yourpage">
                    </div>
                    <div class="col-md-6">
                        <label for="twitter_url" class="form-label">
                            <i class="fab fa-x-twitter"></i> Twitter/X URL
                        </label>
                        <input type="url" class="form-control" id="twitter_url" name="twitter_url" 
                               value="{{ $settings['twitter_url'] ?? '' }}" placeholder="https://twitter.com/yourhandle">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="instagram_url" class="form-label">
                            <i class="fab fa-instagram"></i> Instagram URL
                        </label>
                        <input type="url" class="form-control" id="instagram_url" name="instagram_url" 
                               value="{{ $settings['instagram_url'] ?? '' }}" placeholder="https://instagram.com/yourhandle">
                    </div>
                    <div class="col-md-6">
                        <label for="youtube_url" class="form-label">
                            <i class="fab fa-youtube"></i> YouTube URL
                        </label>
                        <input type="url" class="form-control" id="youtube_url" name="youtube_url" 
                               value="{{ $settings['youtube_url'] ?? '' }}" placeholder="https://youtube.com/yourchannel">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tiktok_url" class="form-label">
                            <i class="fab fa-tiktok"></i> TikTok URL
                        </label>
                        <input type="url" class="form-control" id="tiktok_url" name="tiktok_url" 
                               value="{{ $settings['tiktok_url'] ?? '' }}" placeholder="https://tiktok.com/@yourhandle">
                    </div>
                    <div class="col-md-6">
                        <label for="linkedin_url" class="form-label">
                            <i class="fab fa-linkedin"></i> LinkedIn URL
                        </label>
                        <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" 
                               value="{{ $settings['linkedin_url'] ?? '' }}" placeholder="https://linkedin.com/company/yourcompany">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

