<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Capital International Bank</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('images/Logo.svg') }}" alt="Capital International Group Logo">
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

    <!-- Main Content -->
    <section class="login-container">
        <div class="login-box">
            <h1>Welcome to <br> Capital International Bank.</h1>

            <!-- Display any validation errors -->
            @if($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Signup Form -->
            <form action="{{ route('signup.submit') }}" method="post">
                @csrf

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>

                <div class="signup-options">
                    <p>Already a user? <a href="{{ route('login') }}">Login</a></p>
                </div>

                <button type="submit" class="login-btn">Signup</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>
            Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full terms of business, policies, and company details can be viewed <a href="#">here</a>.
        </p>
    </footer>
</body>
</html>
