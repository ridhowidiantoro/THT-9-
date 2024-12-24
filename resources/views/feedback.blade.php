@extends('layouts.app')

@section('title', 'Feedback')

@section('content')
<section class="feedback-section">
    <h2>Feedback</h2>
    @if(session('message'))
        <p class="success-message">{{ session('message') }}</p>
    @endif
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <button type="submit" class="button">Submit</button>
    </form>
</section>
@endsection
