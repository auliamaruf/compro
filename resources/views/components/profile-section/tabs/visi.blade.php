<!-- Visi Content -->
<div id="visi-content" class="tab-content active">
    <div class="bg-white rounded-lg p-6">
        @if (!empty($general->visi))
            <div class="bg-blue-50 rounded-lg p-6 shadow-md mx-auto max-w-3xl">
                <p class="text-gray-700 leading-relaxed text-center">
                    {{ $general->visi }}
                </p>
            </div>
        @else
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                    </path>
                </svg>
                <p class="text-gray-500">Data Belum Tersedia</p>
            </div>
        @endif
    </div>
</div>
