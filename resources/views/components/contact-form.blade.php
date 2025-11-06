<form action="{{ route('contact.submit') }}" method="POST">
    @csrf
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
            
            <div class="field-wrapper">
                <input type="text" name="subject" class="input-field" placeholder="Subject" value="{{ old('subject') }}" required>
                <div class="input-field-icon">
                    <i class="fa-solid fa-tag"></i>
                </div>
            </div>
            @error('subject')
                <div class="text-danger mb-2">{{ $message }}</div>
            @enderror
            
            <div class="field-wrapper">
                <textarea name="message" id="" class="text-area input-field" placeholder="Message" required>{{ old('message') }}</textarea>
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
                class="btn btn-primary submit-btn d-flex justify-content-center align-items-center w-100 sec-btn">Send
                Message <span class="arrow-icon d-flex"><i
                        class="fa-solid fa-paper-plane"></i></span></button>
        </div>
    </div>
</form>

