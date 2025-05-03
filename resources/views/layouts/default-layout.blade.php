<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default TItle')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <x-navbar />
    <div class="content my-12 mx-40">
        {{-- {{ $slot }} --}}
        @hasSection('use_sidebar')
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-8">
                    @yield('main_content')
                </div>
                <div class="col-span-4">
                    @yield('sidebar_content')
                </div>
            </div>
        @endif
    </div>
    <x-footer />
</body>
</html>