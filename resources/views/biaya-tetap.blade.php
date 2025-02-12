<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Dasar - {{ \App\Models\General::first()->nama_perusahaan }}</title>
    @php $general = \App\Models\General::first(); @endphp
    <link rel="icon" href="{{ asset('storage/' . $general->logo) }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    @include('components.navbar')

    <main class="pt-28 pb-12">
        <div class="container mx-auto px-4">

            @include('components.biaya-tetap')
        </div>
    </main>

    @include('components.footer')
    @include('components.contact-modal')
</body>

</html>

@php
    $biayaTetap = \App\Models\TarifAbonemen::orderBy('id')->get();
@endphp

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const biayaItems = document.querySelectorAll('.biaya-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const golongan = button.getAttribute('data-golongan');

                biayaItems.forEach(item => {
                    if (golongan === 'all' || item.getAttribute('data-golongan') ===
                        golongan) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Update active button state
                filterButtons.forEach(btn => btn.classList.remove('bg-blue-700'));
                button.classList.add('bg-blue-700');
            });
        });
    });
</script>
