<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Add stylesheets and scripts here -->
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
    <header>
        <!-- Navigation and heer elements -->
    </header>

    <main class="container">
        @yield('content')  
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Add footer scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
