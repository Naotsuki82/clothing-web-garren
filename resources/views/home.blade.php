@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Not just a label,<br>but a forever brand.</h1>
            <button class="btn">Shop Collection</button>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1548624149-f9cafd91a182?q=80&w=1000&auto=format&fit=crop" alt="Blazers">
            <div class="cat-overlay">Blazers</div>
        </div>
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?q=80&w=1000&auto=format&fit=crop" alt="Sweaters">
            <div class="cat-overlay">Sweaters</div>
        </div>
        <div class="cat-card">
            <img src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?q=80&w=1000&auto=format&fit=crop" alt="Accessories">
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