@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Courses</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-1"></i>Add New Course
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">All Courses</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $product->image ?? 'https://via.placeholder.com/50' }}" 
                                     alt="{{ $product->title }}" 
                                     class="rounded me-3" width="50" height="50">
                                <div>
                                    <h6 class="mb-0">{{ Str::limit($product->title, 40) }}</h6>
                                    <small class="text-muted">{{ $product->slug }}</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-secondary">{{ $product->category->name }}</span>
                        </td>
                        <td>
                            <div>
                                <strong class="text-primary">${{ $product->final_price }}</strong>
                                @if($product->discount_price)
                                <br>
                                <small class="text-muted text-decoration-line-through">${{ $product->price }}</small>
                                @endif
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-{{ $product->stock > 0 ? 'success' : 'danger' }}">
                                {{ $product->stock }} in stock
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-{{ $product->is_active ? 'success' : 'danger' }}">
                                {{ $product->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $product->created_at->format('M d, Y') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('products.show', $product->slug) }}" 
                                   class="btn btn-sm btn-outline-info" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.products.edit', $product) }}" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" 
                                            onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if($products->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">
                            <i class="fas fa-chevron-left me-1"></i> Previous
                        </span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}">
                            <i class="fas fa-chevron-left me-1"></i> Previous
                        </a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @php
                        $currentPage = $products->currentPage();
                        $lastPage = $products->lastPage();
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($lastPage, $currentPage + 2);
                    @endphp

                    @if($startPage > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->url(1) }}">1</a>
                        </li>
                        @if($startPage > 2)
                            <li class="page-item disabled">
                                <span class="page-link">...</span>
                            </li>
                        @endif
                    @endif

                    @for($page = $startPage; $page <= $endPage; $page++)
                        <li class="page-item {{ $page == $currentPage ? 'active' : '' }}">
                            <a class="page-link" href="{{ $products->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if($endPage < $lastPage)
                        @if($endPage < $lastPage - 1)
                            <li class="page-item disabled">
                                <span class="page-link">...</span>
                            </li>
                        @endif
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->url($lastPage) }}">{{ $lastPage }}</a>
                        </li>
                    @endif

                    {{-- Next Page Link --}}
                    @if($products->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}">
                            Next <i class="fas fa-chevron-right ms-1"></i>
                        </a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link">
                            Next <i class="fas fa-chevron-right ms-1"></i>
                        </span>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        @endif
    </div>
</div>
@endsection