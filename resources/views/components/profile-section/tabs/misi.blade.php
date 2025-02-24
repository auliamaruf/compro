<!-- Misi Section -->
<div id="misi-content" class="tab-content hidden">
    <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
        @if (!empty($general->misi))
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach (explode("\n", $general->misi) as $misiItem)
                    <div
                        class="group hover:shadow-lg transition-all duration-300 bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100 relative overflow-hidden">

                        <div class="relative z-10 pl-20">
                            <p
                                class="text-gray-700 leading-relaxed transform group-hover:translate-x-2 transition-transform duration-300">
                                {{ $misiItem }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center p-6 bg-gray-50 rounded-xl">
                <svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                    </path>
                </svg>
                <p class="text-gray-500">Data Belum Tersedia</p>
            </div>
        @endif
    </div>
</div>
