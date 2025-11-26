@extends('layouts.app')

@section('content')

<style>
    /* Price Apply Button */
    .btn-apply-price {
        background: #000;
        color: #fff;
        border: none;
        padding: 0 10px;
        cursor: pointer;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn-apply-price:hover {
        background: #333;
    }
</style>

<div class="shop-container">
    
    <!-- Sidebar Filters Form -->
    <aside class="shop-sidebar">
        <form action="{{ route('shop') }}" method="GET" id="filterForm">
            
            <!-- Category Filter -->
            <div class="filter-group">
                <h3>Product Type</h3>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <label style="cursor: pointer; display: flex; align-items: center; gap: 10px;">
                                <input 
                                    type="checkbox" 
                                    name="types[]" 
                                    value="{{ $category }}"
                                    {{ in_array($category, request('types', [])) ? 'checked' : '' }}
                                    onchange="this.form.submit()"
                                > 
                                {{ $category }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Price Filter -->
            <div class="filter-group">
                <h3>Price</h3>
                <div class="price-range">
                    <input type="number" name="min_price" placeholder="From" value="{{ request('min_price') }}" style="width: 70px;">
                    <span>-</span>
                    <input type="number" name="max_price" placeholder="To" value="{{ request('max_price') }}" style="width: 70px;">
                    <!-- Added Apply Button -->
                    <button type="submit" class="btn-apply-price" title="Apply Price Filter">&rarr;</button>
                </div>
            </div>
            
            <!-- Clear Filters -->
            @if(request()->anyFilled(['types', 'min_price', 'max_price']))
                <div style="margin-top: 20px;">
                    <a href="{{ route('shop') }}" style="text-decoration: underline; font-size: 0.85rem; color: #666;">Clear all filters</a>
                </div>
            @endif

        </form>
    </aside>

    <!-- Main Shop Content -->
    <div class="shop-content">
        
        <!-- Shop Header -->
        <div class="shop-header">
            <h1>Shop All</h1>
            <div class="sort-options">
                <span>{{ $products->total() }} products</span>
                <select onchange="this.form.submit()" form="filterForm" name="sort">
                    <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Sort by: Featured</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="shop-grid">
            @forelse($products as $product)
                <div class="product-card">
                    <div class="img-container">
                        @if($product['badge'])
                            <span class="sale-badge {{ $product['badge'] == 'Sold Out' ? 'sold-out' : '' }}">
                                {{ $product['badge'] }}
                            </span>
                        @endif
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    </div>
                    <div class="product-info left-align">
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <div class="price">
                            @if($product['old_price'])
                                <span class="old">{{ $product['old_price'] }}</span>
                            @endif
                            <span class="new">{{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div style="grid-column: 1/-1; text-align: center; padding: 60px;">
                    <h3 style="font-weight: normal;">No products found.</h3>
                    <p style="color: #666;">Try adjusting your filters.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }} 
        </div>

    </div>
</div>

@endsection