<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSS Organization - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="body-background">
    <header class="main-header">
        <div class="logo-container">
            <h1><a href="{{ route('home') }}">KSS <span class="highlight">Organization</span></a></h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('services') }}" class="{{ Request::routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ Request::routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('feedback') }}" class="{{ Request::routeIs('feedback') ? 'active' : '' }}">Feedback</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-content">
            <p>Contact: <a href="mailto:kss.only@example.com">kss.only@example.com</a> | Phone: 081295928502</p>
            <p>Follow us on <a href="https://www.instagram.com/kss.onlyy" target="_blank">Instagram</a></p>
        </div>
    </footer>
</body>
</html>
