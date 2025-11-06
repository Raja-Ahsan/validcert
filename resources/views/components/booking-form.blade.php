<form action="{{ route('booking.submit') }}" method="POST" id="booking-form">
    @csrf
    <input type="hidden" name="service_id" value="{{ $service->id }}">
    
    <div class="row">
        <div class="col-12">
            <div class="field-wrapper">
                <input type="text" name="name" class="input-field" placeholder="Name" value="{{ old('name') }}" required>
                <div class="input-field-icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            @error('name')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            
            <div class="field-wrapper">
                <input type="email" name="email" class="input-field" placeholder="Email" value="{{ old('email') }}" required>
                <div class="input-field-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            @error('email')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            
            <div class="field-wrapper">
                <input type="text" name="phone" class="input-field" placeholder="Phone Number" value="{{ old('phone') }}" required>
                <div class="input-field-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            @error('phone')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror

            @if($service->form_fields && count($service->form_fields) > 0)
                @foreach($service->form_fields as $field)
                    <div class="field-wrapper">
                        @if($field['type'] === 'textarea')
                            <textarea name="{{ $field['name'] }}" class="text-area input-field" placeholder="{{ $field['label'] }}" {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>{{ old($field['name']) }}</textarea>
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="input-field" placeholder="{{ $field['label'] }}" value="{{ old($field['name']) }}" {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>
                        @endif
                        <div class="input-field-icon {{ $field['type'] === 'textarea' ? 'last-icon' : '' }}">
                            @if($field['type'] === 'email')
                                <i class="fa-solid fa-envelope"></i>
                            @elseif($field['type'] === 'tel')
                                <i class="fa-solid fa-phone"></i>
                            @elseif($field['type'] === 'date')
                                <i class="fa-solid fa-calendar"></i>
                            @elseif($field['type'] === 'number')
                                <i class="fa-solid fa-hashtag"></i>
                            @elseif($field['type'] === 'textarea')
                                <i class="fa-solid fa-message"></i>
                            @else
                                <i class="fa-solid fa-tag"></i>
                            @endif
                        </div>
                    </div>
                    @error($field['name'])
                        <div class="text-danger mb-2">{{ $message }}</div>
                    @enderror
                @endforeach
            @endif
            
            <div class="field-wrapper">
                <textarea name="message" id="" class="text-area input-field" placeholder="Message (Optional)">{{ old('message') }}</textarea>
                <div class="input-field-icon last-icon">
                    <i class="fa-solid fa-message"></i>
                </div>
            </div>
            @error('message')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            
            @if(session('success'))
                <div class="alert alert-success mb-3">{{ session('success') }}</div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger mb-3">{{ session('error') }}</div>
            @endif
            
            <button type="submit"
                class="btn btn-primary submit-btn d-flex justify-content-center align-items-center w-100 sec-btn">Submit
                Booking <span class="arrow-icon d-flex"><i
                        class="fa-solid fa-paper-plane"></i></span></button>
        </div>
    </div>
</form>

