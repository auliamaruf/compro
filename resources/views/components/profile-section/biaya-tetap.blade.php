@php
    $biayaTetap = \App\Models\TarifAbonemen::orderBy('id')->get();
@endphp

<div id="biaya-tetap-content" class="tab-content hidden">
    <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-xl p-4 md:p-8">
        <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">
            <span class="border-b-4 border-blue-400 pb-2">Biaya Tetap</span>
        </h2>

        <div class="flex justify-center gap-4 mb-6">
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
            @forelse($biayaTetap as $biaya)
                <div class="biaya-item bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300 border border-blue-100"
                    data-golongan="{{ $biaya->golongan }}">
                    <div class="bg-blue-600 text-white rounded-lg px-4 py-2 -mt-8 mb-4 inline-block">
                        <h3 class="text-xl font-semibold">{{ $biaya->golongan }}</h3>
                    </div>
                    <p class="text-gray-600 mb-4 font-medium">{{ $biaya->sub_golongan }}</p>
                    <div class="flex justify-between items-center bg-blue-50 p-2 rounded">
                        <span class="text-blue-700">Tarif Tetap</span>
                        <span class="font-bold text-blue-600">
                            Rp {{ number_format($biaya->tarif, 0, ',', '.') }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center p-8 bg-gray-50 rounded-xl">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                    <p class="text-gray-500 text-lg">Data biaya tetap belum tersedia</p>
                </div>
            @endforelse
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
