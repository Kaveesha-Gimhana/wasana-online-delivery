<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/connection.css') }}">
</head>

<body>

    <!-- 🔥 Slow connection loader -->
    <div id="slowLoader" style="display:none;">
        <div class="loader"></div>
        <p>Slow connection detected...</p>
    </div>

    {{-- Page content will load here --}}
    @yield('content')

    <script src="{{ asset('js/connection.js') }}"></script>
</body>
</html>