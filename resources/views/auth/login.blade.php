@extends('layouts.app')

@section('content')
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="../images/Logo.svg" alt="Capital International Group Logo">
        </div>
        <ul class="navbar-nav">
            <li><a href="#">Services</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Company</a></li>
        </ul>
        <div class="nav-buttons">
            <div class="dropdown">
                <button class="login-btn">Login</button>
            </div>
            <div class="dropdown">
                <button class="get-started-btn">Get started</button>
            </div>
        </div>
    </nav>
</header>

<div class="login-container">
    <div class="login-box">
        <h1>Welcome to <br> Capital International Bank.</h1>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            @if (session('error'))
                <p id="disappearing-text" style="color: red;">{{ session('error') }}</p>
            @endif

            <script>
                // JavaScript code to make the error message disappear after 3 seconds
                setTimeout(function() {
                    var disappearingText = document.getElementById('disappearing-text');
                    if (disappearingText) {
                        disappearingText.style.display = 'none';
                    }
                }, 3000);
            </script>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password">Password</label>
            <input id="password" type="password" name="password" placeholder="Password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="login-options">
                {{-- <a href="{{ route('password.request') }}">Forgot your password?</a> --}}
                {{-- <a href="{{ route('signup') }}">Don't have an account? Contact us</a> --}}
            </div>

            <button name="submit" type="submit" class="login-btn">Login to account</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>
        Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full terms of business, policies, and company details can be viewed <a href="#">here</a>.
    </p>
</footer>
@endsection
