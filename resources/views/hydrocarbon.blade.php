@extends('layouts.app')

@section('content')

<div class="page-container">
    
    <!-- Top Hero Image -->
    <div class="about-hero-image">
        
        <img src="https://images.unsplash.com/photo-1613461920867-9ea115fee900?q=80&w=774&auto=format&fit=crop" alt="Simple Brand Atmosphere">
    </div>

    <!-- Intro Text -->
    <section class="text-hero">
        <h1>WE BELIEVE IN THE ART OF SIMPLICITY</h1>
        <div class="text-content">
            <p>
                Simple is an Amsterdam-based brand that offers timeless, high-quality women's clothing where comfort and luxury come together in a stylish and sophisticated way. Our collections feature long-lasting essentials with modern detailing, crafted with more and more natural materials and conscious choices.
            </p>
            <p class="highlight">
                We believe in the art of simplicity: it radiates both calmness and strength.
            </p>
            <p>
                Choose Simple and choose to empower yourself.
            </p>
        </div>
    </section>

    <!-- NEW: 3 Images Grid (Aligned with values below) -->
    <section class="images-grid-3">
        <div class="grid-img">
            <img src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?q=80&w=1000&auto=format&fit=crop" alt="Simplistic">
        </div>
        <div class="grid-img">
            <img src="https://images.unsplash.com/photo-1583846783214-7229a91b20ed?q=80&w=1000&auto=format&fit=crop" alt="Sophisticated">
        </div>
        <div class="grid-img">
             <img src="https://images.unsplash.com/photo-1434389677669-e08b4cac3105?q=80&w=1000&auto=format&fit=crop" alt="Refined">
        </div>
    </section>

    <!-- Values Text Grid -->
    <section class="values-grid">
        <div class="value-item">
            <h3>SIMPLISTIC</h3>
            <p>We believe in the art of simplicity: it radiates both calmness and strength.</p>
        </div>
        <div class="value-item">
            <h3>SOPHISTICATED</h3>
            <p>We offer timeless, high-quality women's clothing where comfort and luxury come together in a stylish and sophisticated way.</p>
        </div>
        <div class="value-item">
            <h3>REFINED</h3>
            <p>We develop collections that feature long-lasting essentials with modern detailing, crafted with more and more natural materials and conscious choices.</p>
        </div>
    </section>

    <!-- NEW: Large Bottom Lifestyle Image -->
    <div class="about-hero-image" style="height: 600px; margin-bottom: 60px;">
        <img src="https://images.unsplash.com/photo-1503342394128-c104d54dba01?q=80&w=2069&auto=format&fit=crop" alt="Studio Atmosphere">
    </div>

    <!-- Bottom CTA Section -->
    <section class="text-hero small-hero">
        <h2>CHOOSING SIMPLE, IS SO SIMPLE</h2>
        <div class="text-content">
            <p>
                We are always searching for new people to join our team and help us bring our vision to life. If you are looking for an exciting new opportunity and grow your career, we encourage you to apply for a job with us.
            </p>
            <br>
            <a href="#" class="text-link">REACH OUT</a>
        </div>
    </section>

</div>

@endsection