<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login/style.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Example Image">
        </div>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div class="input-container">
                <label for="email">Username</label>
                <input type="text" name="username" class="input"placeholder="username">
                @error('login')
                    <span class="error">{{ $message }}</span>
                @enderror
                <label for="password">Password</label>
                <input type="password" name="password" class="input" placeholder="password">
                @error('login')
                    <span class="error">{{ $message }}</span>
                @enderror
                <button type="submit" value="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>