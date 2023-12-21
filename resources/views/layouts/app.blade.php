<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l10 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-500 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }

        .link {
            @apply font-medium text-gray-700 underline decoration-pink-500
        }
    </style>
    {{-- blade-formatter-enable --}}

</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg ">
    <h1 class="text-2xl">@yield('title')</h1>
    <div>
        {{-- if having success message, it will dissapear when you refresh the page --}}
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>

    <div>@yield('content')</div>
</body>
</html>
