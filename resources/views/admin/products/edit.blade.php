@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Course</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i>Back to Courses
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Course Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $product->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description *</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="6" required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price ($) *</label>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" value="{{ old('price', $product->price) }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="discount_price" class="form-label">Discount Price ($)</label>
                                <input type="number" step="0.01" class="form-control @error('discount_price') is-invalid @enderror" 
                                       id="discount_price" name="discount_price" 
                                       value="{{ old('discount_price', $product->discount_price) }}">
                                @error('discount_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category *</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" 
                                        id="category_id" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" 
                                                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock *</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                       id="stock" name="stock" value="{{ old('stock', $product->stock) }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image_file" class="form-label">Upload New Image</label>
                        <input type="file" class="form-control @error('image_file') is-invalid @enderror" 
                               id="image_file" name="image_file" accept="image/*">
                        @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Upload a new image file (JPG, PNG, GIF, etc.)</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OR</label>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="url" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" value="{{ old('image', $product->image) }}" 
                               placeholder="https://example.com/image.jpg">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Alternatively, provide an image URL</small>
                    </div>

                    @if($product->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label>
                        <div>
                            <img src="{{ $product->image }}" alt="Current image" class="img-thumbnail" style="max-width: 300px; max-height: 200px;">
                        </div>
                    </div>
                    @endif

                    <div class="mb-3" id="image-preview-container" style="display: none;">
                        <label class="form-label">New Image Preview</label>
                        <div>
                            <img id="image-preview" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px; max-height: 200px;">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h6 class="card-title">Publish</h6>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <span class="badge bg-{{ $product->is_active ? 'success' : 'danger' }}">
                                        {{ $product->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Slug</label>
                                <div>
                                    <code>{{ $product->slug }}</code>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Final Price</label>
                                <div>
                                    <strong class="text-primary">${{ $product->final_price }}</strong>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i>Update Course
                                </button>
                                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Preview uploaded image
    document.getElementById('image_file').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image-preview').src = e.target.result;
                document.getElementById('image-preview-container').style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('image-preview-container').style.display = 'none';
        }
    });

    // Preview URL image
    document.getElementById('image').addEventListener('input', function(e) {
        const url = e.target.value;
        if (url && url.match(/\.(jpg|jpeg|png|gif|webp)$/i)) {
            document.getElementById('image-preview').src = url;
            document.getElementById('image-preview-container').style.display = 'block';
        } else if (!url) {
            document.getElementById('image-preview-container').style.display = 'none';
        }
    });
</script>
@endpush
@endsection