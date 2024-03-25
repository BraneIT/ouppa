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
            <div class="logo-label">
                <p>Admin panel</p>
                <h3>Ou Petar Pop Arsov</h3>
            </div>
        </div>
            <div class="menu-container">
                <a href="/admin">Home</a>
                <a href="/admin/news">News</a>    
                <a href="/admin/gallery">Gallery</a>
                <a href="/admin/erasmus">Erasmus+</a>
                <a href="/admin/documents">Documents</a>
                <a href="/admin/prvacinja">Prvačinja</a>
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
    <script src="{{ asset('assets/js/adminScript.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</body>
</html>