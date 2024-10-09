<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital International Bank</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/Logo.svg') }}" alt="Capital International Group Logo">
            </div>
            <ul class="navbar-nav">
                <li><a href="#">Services</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Company</a></li>
            </ul>
            <div class="nav-buttons">
                <button class="login-btn">Login</button>
                <button class="get-started-btn">Get started</button>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <section class="login-container">
        <div class="login-box">
            <h1>Welcome to <br> Capital International Bank.</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <p style="color: red;">{{ $errors->first() }}</p>
                @endif

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email address" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                
                <div class="login-options">
                    <a href="#">Forgot your password?</a>
                    <a href="#">Don't have an account? Contact us</a>
                </div>
                
                <button name="submit" type="submit" class="login-btn">Login to account</button>
            </form>
        </div>
    </section>

    <footer>
        <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full terms of business, policies, and company details can be viewed <a href="#">here</a>.</p>
    </footer>
</body>
</html>
