@extends('layouts.app')

@section('title', 'Services')

@section('content')
<section class="services-section">
    <h2>Our Services</h2>
    <table class="services-table">
        <thead>
            <tr>
                <th>Service</th>
                <th>Description</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Workshop</td>
                <td>Enhancing professional skills through interactive workshops.</td>
                <td>3 Hours</td>
            </tr>
            <tr>
                <td>Event</td>
                <td>Networking opportunities and collaboration with industry experts.</td>
                <td>Varies</td>
            </tr>
            <tr>
                <td>Consultation</td>
                <td>Providing one-on-one consultation for career growth.</td>
                <td>1 Hour</td>
            </tr>
            <tr>
                <td>Training</td>
                <td>Hands-on training for various technical and soft skills.</td>
                <td>2 Days</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
