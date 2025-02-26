@include('components.navbar.index')

<div class="relative bg-gradient-to-br from-blue-600 to-blue-800 py-24 mt-16"> <!-- Tambahkan mt-16 -->
    <!-- Decorative Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute right-0 bottom-0">
            <svg class="w-64 h-64" viewBox="0 0 200 200">
                <path fill="currentColor"
                    d="M45,-50C58.4,-34.3,69.2,-17.2,71.1,1.9C73,21,66,42,51.9,54.8C37.8,67.7,18.9,72.3,0.7,71.4C-17.5,70.5,-34.9,64,-47.2,51.4C-59.5,38.8,-66.7,20.4,-65.7,3.3C-64.7,-13.8,-55.5,-27.7,-43.3,-43.3C-31.1,-58.9,-15.5,-76.2,1,-77.2C17.4,-78.2,34.9,-66,45,-50Z"
                    transform="translate(100 100)" />
            </svg>
        </div>
    </div>

    <!-- Title Section -->
    <div class="relative container mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Biaya Tetap</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
            Temukan informasi mengenai biaya tetap yang dimiliki oleh perusahaan kami.
    </div>
</div>

<div class="max-w-7xl mx-auto py-6">
    <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-xl p-4 md:p-8">
        <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">
            <span class="border-b-4 border-blue-400 pb-2">Biaya Tetap</span>
        </h2>

        <div class="flex justify-center gap-4 mb-6 flex-wrap">
            <button class="filter-btn px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-700"
                data-golongan="all">
                Semua
            </button>
            @foreach ($biayaTetap->pluck('golongan')->unique() as $golongan)
                <button
                    class="filter-btn px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-700"
                    data-golongan="{{ $golongan }}">
                    {{ $golongan }}
                </button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @if ($biayaTetap->isNotEmpty())
                @foreach ($biayaTetap as $biaya)
                    <div class="biaya-item bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 border border-blue-100"
                        data-golongan="{{ $biaya->golongan }}">
                        <div class="bg-blue-600 text-white rounded-lg px-4 py-2 -mt-8 mb-4 inline-block">
                            <h3 class="text-xl font-semibold">{{ $biaya->golongan }}</h3>
                        </div>
                        <p class="text-gray-600 mb-4 font-medium">{{ $biaya->sub_golongan }}</p>
                        <div class="flex justify-between items-center bg-blue-50 p-2 rounded">
                            <span class="text-blue-700">Biaya Tetap</span>
                            <span class="font-bold text-blue-600">
                                Rp {{ number_format($biaya->tarif, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center p-6 bg-gray-50 rounded-xl col-span-full">
                    <p class="text-gray-500">Data belum ada</p>
                </div>
            @endif
        </div>
    </div>
</div>


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


@include('components.emails.contact')
@include('components.footer.index')
