@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="about-section">
    <h2>About Us</h2>
    <p>
        KSS Organization is a community focused on technological innovation and creating impactful changes in various industries, including automotive advancements.
    </p>
    <h3>Our Contribution to Automotive</h3>
    <p>We work closely with automotive experts to develop sustainable and efficient technologies for modern vehicles.</p>
    <img src="{{ asset('uploads/aktivitas_1.jpg') }}" alt="Innovative Cars">
</section>
@endsection
