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
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Sumber Mata Air</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
            Temukan informasi mengenai sumber mata air yang dimiliki oleh perusahaan kami.
        </p>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">
                    <span class="border-b-4 border-blue-400 pb-2">Sumber Mata Air</span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($waterSources as $source)
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4 text-white">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-bold">{{ $source->source_name }}</h3>
                                        <p class="text-sm opacity-90">{{ $source->source_code }}</p>
                                    </div>
                                    <div>
                                        <span
                                            class="inline-flex px-3 py-1 rounded-full text-sm
                                            @if ($source->source_status === 'active') bg-green-100 text-green-700
                                            @elseif($source->source_status === 'maintenance') bg-yellow-100 text-yellow-700
                                            @else bg-red-100 text-red-700 @endif">
                                            {{ $source->source_status }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-5 space-y-3">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="font-medium">{{ $source->source_type }}</span>
                                </div>

                                <div class="flex items-center space-x-2">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>{{ $source->village }}, {{ $source->district }}</span>
                                </div>

                                <div class="flex items-center space-x-2">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    <span>{{ $source->capacity_flow_lps }} L/s</span>
                                </div>

                                <a href="{{ route('water-source.show', $source->id) }}"
                                    class="mt-4 block w-full text-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-medium">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Pagination -->
        @if (method_exists($waterSources, 'links'))
            <div class="mt-6">
                {{ $waterSources->links() }}
            </div>
        @endif
    </div>
</div>

@include('components.emails.contact')
@include('components.footer.index')
