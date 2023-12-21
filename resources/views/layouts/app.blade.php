<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l10 Task List App</title>
    @yield('styles')
</head>
<body>
    <h1>@yield('title')</h1>
    <div>
        {{-- if having success message, it will dissapear when you refresh the page --}}
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>

    <div>@yield('content')</div>
</body>
</html>
