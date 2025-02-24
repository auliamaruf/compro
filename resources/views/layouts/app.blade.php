<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ \App\Models\General::first()->nama_perusahaan }}</title>
    @php $general = \App\Models\General::first(); @endphp
    <link rel="icon" href="{{ asset('storage/' . $general->logo) }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    @include('components.navbar.index')

    <main class="pt-28 pb-12">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    @include('components.footer.index')
</body>

</html>
