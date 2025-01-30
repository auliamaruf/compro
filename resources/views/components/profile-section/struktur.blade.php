@php
    $direkturUtama = \App\Models\OrganizationStructure::where('level', 0)->first();
    $direkturUmum = $direkturUtama
        ? \App\Models\OrganizationStructure::where('supervisor_id', $direkturUtama->id)->where('level', 1)->first()
        : null;
    $kepalaBagianUmum = $direkturUmum
        ? \App\Models\OrganizationStructure::where('supervisor_id', $direkturUmum->id)->orderBy('order')->get()
        : collect([]);
    $kepalaBagianUtama = $direkturUtama
        ? \App\Models\OrganizationStructure::where('supervisor_id', $direkturUtama->id)
            ->where('level', 2)
            ->orderBy('order')
            ->get()
        : collect([]);
@endphp

<div id="struktur-content" class="tab-content hidden">
    <div class="bg-white rounded-xl shadow-md p-4 md:p-6">
        <div class="max-w-5xl mx-auto">
            @if ($direkturUtama)
                <!-- Level 0: Direktur Utama -->
                <div class="flex justify-center mb-12">
                    <div class="relative w-48">
                        <div class="relative transform hover:-translate-y-1 transition-all duration-300">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25">
                            </div>
                            <div class="bg-white border border-blue-100 rounded-lg p-4 text-center relative">
                                <div
                                    class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-2">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-blue-600">{{ $direkturUtama->position_name }}</h4>
                                <p class="text-gray-600 mt-1">{{ $direkturUtama->name }}</p>
                            </div>
                        </div>
                        <!-- Connector Line -->
                        <div class="absolute -bottom-6 left-1/2 w-0.5 h-6 bg-blue-200"></div>
                    </div>
                </div>

                @if ($direkturUmum)
                    <!-- Level 1: Direktur Umum -->
                    <div class="flex justify-center mb-12">
                        <div class="relative w-48">
                            <div class="relative transform hover:-translate-y-1 transition-all duration-300">
                                <div
                                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-lg blur opacity-25">
                                </div>
                                <div class="bg-white border border-blue-100 rounded-lg p-4 text-center relative">
                                    <div
                                        class="w-14 h-14 mx-auto rounded-full bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center mb-2">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <h4 class="text-md font-bold text-blue-600">{{ $direkturUmum->position_name }}</h4>
                                    <p class="text-gray-600 mt-1">{{ $direkturUmum->name }}</p>
                                </div>
                            </div>
                            <!-- Connector Line -->
                            <div class="absolute -bottom-6 left-1/2 w-0.5 h-6 bg-blue-200"></div>
                        </div>
                    </div>
                @endif

                <!-- Level 2: Grid Layout -->
                <div class="grid grid-cols-2 gap-6">
                    <!-- Left Column: Under Direktur Umum -->
                    <div>
                        <h3 class="text-md font-semibold text-center mb-4 text-gray-700">Dibawah Direktur Umum</h3>
                        <div class="space-y-3">
                            @forelse($kepalaBagianUmum as $kepala)
                                <div class="transform hover:-translate-y-1 transition-all duration-300">
                                    <div class="bg-white border border-blue-100 rounded-lg p-3 text-center">
                                        <div
                                            class="w-10 h-10 mx-auto rounded-full bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center mb-2">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <h4 class="text-sm font-bold text-blue-600">{{ $kepala->position_name }}</h4>
                                        <p class="text-xs text-gray-600 mt-1">{{ $kepala->name }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center p-6 bg-gray-50 rounded-xl">
                                    <svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                        </path>
                                    </svg>
                                    <p class="text-gray-500">Data Belum Tersedia</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Right Column: Under Direktur Utama -->
                    <div>
                        <h3 class="text-md font-semibold text-center mb-4 text-gray-700">Dibawah Direktur Utama</h3>
                        <div class="space-y-3">
                            @forelse($kepalaBagianUtama as $kepala)
                                <div class="transform hover:-translate-y-1 transition-all duration-300">
                                    <div class="bg-white border border-blue-100 rounded-lg p-3 text-center">
                                        <div
                                            class="w-10 h-10 mx-auto rounded-full bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center mb-2">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <h4 class="text-sm font-bold text-blue-600">{{ $kepala->position_name }}</h4>
                                        <p class="text-xs text-gray-600 mt-1">{{ $kepala->name }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center p-6 bg-gray-50 rounded-xl">
                                    <svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                        </path>
                                    </svg>
                                    <p class="text-gray-500">Data Belum Tersedia</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center p-8 bg-gray-50 rounded-xl">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                    <p class="text-gray-500 text-lg">Data Belum Tersedia</p>
                </div>
            @endif
        </div>
    </div>
</div>
