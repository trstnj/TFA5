
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'POS System')</title>

    <!-- Shared POS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Shared POS Navigation -->
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/customers') }}">Customer Accounts</a>
        <a href="{{ url('/users') }}">User Accounts</a>
    </nav>

    <hr>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>
