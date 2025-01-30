<!-- Visi Content -->
<div id="visi-content" class="tab-content active">
    <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
        <!-- Pattern Background -->
        <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="10" cy="10" r="2" fill="currentColor" class="text-blue-600" />
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots)" />
            </svg>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100">
                <div class="relative overflow-hidden rounded-lg p-8 bg-white shadow-inner border border-blue-50">
                    <div class="absolute top-0 right-0 transform translate-x-4 -translate-y-4 w-24 h-24 opacity-10">
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg relative z-10">
                        {{ $general->visi }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
