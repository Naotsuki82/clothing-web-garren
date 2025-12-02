@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Not just a label,<br>but a forever brand.</h1>
            <button class="btn">Shop Collection</button>
        </div>
    </section>

    <!-- Categories (Updated Images) -->
    <section class="categories">
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1754974135100-b97cfeb8869a?q=80&w=415&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Blazers">
            <div class="cat-overlay">Blazers</div>
        </div>
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1610901157620-340856d0a50f?q=80&w=465&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sweaters">
            <div class="cat-overlay">Sweaters</div>
        </div>
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1572307480813-ceb0e59d8325?q=80&w=435&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Accessories">
            <div class="cat-overlay">Accessories</div>
        </div>
    </section>

    <!-- Dynamic Product Grid -->
    <section class="products-section">
        <div class="section-header">
            <h2>Black Friday Deals</h2>
            <p>Timeless pieces at exclusive prices</p>
        </div>
        
        <div class="product-grid">
            @foreach($products as $product)
                <div class="product-card">
                    <div class="img-container">
                        @if(isset($product['badge']))
                            <span class="sale-badge">{{ $product['badge'] }}</span>
                        @endif
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <div class="price">
                            <span class="old">{{ $product['old_price'] }}</span>
                            <span class="new">{{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
