<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/admin_css/style.css') }}">
    <title>@yield('title', 'Your App Name')</title>
</head>
<body>
    <div class="container">
        <nav class="menu">
            <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Example Image">
        </div>
            <div class="menu-container">
                <a href="/admin">Home</a>
                <a href="/admin/news">News</a>    
                <a href="/admin/gallery">Galery</a>
                <a href="/admin/erasmus">Erasmus+</a>
                <a href="/admin/documents">Erasmus+</a>
            </div>
        </nav>

        <main class="content">
            <form method="post" class="logout" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @yield('content')
        </main>
    </div>
    
</body>
</html>