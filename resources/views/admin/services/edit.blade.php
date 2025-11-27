@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-edit"></i> Edit Service</h1>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Services
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $service->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3">{{ old('short_description', $service->short_description) }}</textarea>
                        <small class="form-text text-muted">Brief description shown on services listing page</small>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10">{{ old('description', $service->description) }}</textarea>
                        <small class="form-text text-muted">Full description with rich text editor</small>
                    </div>
                </div>

                <div class="col-md-4">
                    @if($service->image)
                        <div class="mb-3">
                            <label class="form-label">Current Image</label>
                            <div>
                                <img src="{{ asset($service->image) }}?v={{ $service->updated_at->timestamp }}" alt="{{ $service->title }}" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="image" class="form-label">Service Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <small class="form-text text-muted">Leave empty to keep current image</small>
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon Class (Font Awesome)</label>
                        <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $service->icon) }}" placeholder="e.g., fas fa-cog">
                        <small class="form-text text-muted">Font Awesome icon class</small>
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}">
                        <small class="form-text text-muted">Lower numbers appear first</small>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>
            </div>

            <!-- Dynamic Form Fields Section -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5><i class="fas fa-list"></i> Booking Form Fields</h5>
                    <small class="text-muted">Add custom fields for the booking form</small>
                </div>
                <div class="card-body">
                    <div id="form-fields-container">
                        <!-- Form fields will be added here dynamically -->
                    </div>
                    <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-form-field">
                        <i class="fas fa-plus"></i> Add Field
                    </button>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Service
                </button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>
<script>
    // Initialize TinyMCE
    tinymce.init({
        selector: '#description',
        height: 400,
        plugins: 'lists link image table code',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
        menubar: false,
    });

    // Dynamic Form Fields Management
    let fieldIndex = 0;
    const formFieldsContainer = document.getElementById('form-fields-container');
    const addFieldBtn = document.getElementById('add-form-field');

    // Load existing form fields
    const existingFields = @json(old('form_fields', $service->form_fields ?? []));
    if (existingFields && existingFields.length > 0) {
        existingFields.forEach(field => {
            addFormField(field);
        });
    }

    function addFormField(fieldData = {}) {
        const fieldId = fieldIndex++;
        const fieldCard = document.createElement('div');
        fieldCard.className = 'card mb-3';
        fieldCard.innerHTML = `
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Field Label</label>
                        <input type="text" class="form-control" name="form_fields[${fieldId}][label]" value="${fieldData.label || ''}" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Field Name</label>
                        <input type="text" class="form-control" name="form_fields[${fieldId}][name]" value="${fieldData.name || ''}" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Field Type</label>
                        <select class="form-select" name="form_fields[${fieldId}][type]" required>
                            <option value="text" ${fieldData.type === 'text' ? 'selected' : ''}>Text</option>
                            <option value="email" ${fieldData.type === 'email' ? 'selected' : ''}>Email</option>
                            <option value="tel" ${fieldData.type === 'tel' ? 'selected' : ''}>Phone</option>
                            <option value="textarea" ${fieldData.type === 'textarea' ? 'selected' : ''}>Textarea</option>
                            <option value="number" ${fieldData.type === 'number' ? 'selected' : ''}>Number</option>
                            <option value="date" ${fieldData.type === 'date' ? 'selected' : ''}>Date</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Required</label>
                        <select class="form-select" name="form_fields[${fieldId}][required]">
                            <option value="0" ${!fieldData.required ? 'selected' : ''}>No</option>
                            <option value="1" ${fieldData.required ? 'selected' : ''}>Yes</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-danger w-100 remove-field">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
        `;
        formFieldsContainer.appendChild(fieldCard);

        // Add remove functionality
        fieldCard.querySelector('.remove-field').addEventListener('click', function() {
            fieldCard.remove();
        });
    }

    addFieldBtn.addEventListener('click', function() {
        addFormField();
    });
</script>
@endpush
@endsection

