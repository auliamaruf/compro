<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Dasar - {{ \App\Models\General::first()->nama_perusahaan }}</title>
    @php $general = \App\Models\General::first(); @endphp
    <link rel="icon" href="{{ asset('storage/' . $general->logo) }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
</head>

<body class="bg-gray-50">
    @include('components.navbar')

    <main class="pt-28 pb-12">
        <div class="container mx-auto px-4">

            @include('components.tarif-dasar')
        </div>
    </main>

    @include('components.footer')
    @include('components.contact-modal')
</body>

</html>
