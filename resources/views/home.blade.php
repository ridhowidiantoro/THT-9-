@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero">
    <h2>Welcome to <span class="highlight">KSS Organization</span></h2>
    <p>Empowering communities through innovation, collaboration, and impactful projects.</p>
    <div class="features">
        <div class="feature-item">
            <img src="{{ asset('uploads/aktivitas_1.jpg') }}" alt="Innovation">
            <h3>Innovation</h3>
            <p>Building cutting-edge solutions for the future.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('uploads/aktivitas_1.jpg') }}" alt="Community">
            <h3>Community</h3>
            <p>Connecting people for a better world.</p>
        </div>
        <div class="feature-item">
            <img src="{{ asset('uploads/aktivitas_1.jpg') }}" alt="Impact">
            <h3>Impact</h3>
            <p>Making a difference through technology.</p>
        </div>
    </div>
</div>
@endsection
