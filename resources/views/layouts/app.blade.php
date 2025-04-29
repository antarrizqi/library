<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    {{-- side bar --}}
    <div class="flex min-h-screen">
    @include('layouts.sidebar')

    <div class="min-content fle min-h-screen">
        {{-- header --}}
        <main class="p-6">
            @yield('content')
        </main>
    </div>
    </div>
</body>
</html>