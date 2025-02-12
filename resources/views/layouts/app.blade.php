<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->nama_perusahaan ?? config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body class="bg-gray-50">
    @include('components.navbar')

    <main class="pt-16">
        {{ $slot }}
    </main>

    @include('components.footer')
    @stack('scripts')
</body>

</html>
