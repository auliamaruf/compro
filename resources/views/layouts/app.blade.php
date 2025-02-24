<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <div class="critical-styles">
        @include('components.navbar.index')
    </div>

    <main class="pt-28 pb-12">
        <div class="container mx-auto px-4">
            <div id="content-placeholder">Loading...</div>
            <div id="main-content" style="display: none;">
                @yield('content')
            </div>
        </div>
    </main>

    <div class="critical-styles">
        @include('components.footer.index')
    </div>

    <!-- Deferred loading of non-critical resources -->
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('content-placeholder').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
            }, 100);
        });
    </script>
    @stack('scripts')
</body>

</html>
