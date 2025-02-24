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
        <!-- Water Source Navigation -->
        <div class="mb-6">
            <nav class="bg-white shadow-md rounded-lg p-4">
                <div class="flex flex-wrap items-center justify-between">
                    <!-- Search Bar -->
                    <div class="w-full md:w-auto mb-4 md:mb-0">
                        <form action="{{ route('water-source.search') }}" method="GET" class="flex space-x-2">
                            <input type="text" name="query" placeholder="Cari sumber air..."
                                class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                                Cari
                            </button>
                        </form>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ route('water-source.index') }}"
                            class="px-4 py-2 rounded-lg {{ request()->routeIs('water-source.index') && !request()->query() ? 'bg-blue-500 text-white' : 'bg-gray-100 hover:bg-gray-200' }}">
                            Semua
                        </a>
                        <a href="{{ route('water-source.active') }}"
                            class="px-4 py-2 rounded-lg {{ request()->routeIs('water-source.active') ? 'bg-blue-500 text-white' : 'bg-gray-100 hover:bg-gray-200' }}">
                            Aktif
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-bold mb-4">Sumber Air</h2>

                @if (isset($searchAlert))
                    <div class="mb-4 p-4 rounded-lg bg-yellow-50 text-yellow-800 flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span>{{ $searchAlert }}</span>
                        </div>
                        <a href="{{ route('water-source.index') }}"
                            class="text-sm bg-yellow-100 px-3 py-1 rounded-lg hover:bg-yellow-200 transition-colors">
                            Tampilkan Semua
                        </a>
                    </div>
                @endif

                @if (isset($searchQuery))
                    <div class="mb-4 p-4 rounded-lg bg-blue-50 text-blue-800 flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span>Menampilkan hasil pencarian untuk "{{ $searchQuery }}"</span>
                        </div>
                        <a href="{{ route('water-source.index') }}"
                            class="text-sm bg-blue-100 px-3 py-1 rounded-lg hover:bg-blue-200 transition-colors">
                            Reset
                        </a>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($waterSources as $source)
                        <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow">
                            <h3 class="text-xl font-semibold mb-2">{{ $source->source_name }}</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium">Kode:</span> {{ $source->source_code }}</p>
                                <p><span class="font-medium">Tipe:</span> {{ $source->source_type }}</p>
                                <p><span class="font-medium">Status:</span>
                                    <span
                                        class="px-2 py-1 rounded text-sm
                                            @if ($source->source_status === 'active') bg-green-100 text-green-800
                                            @elseif($source->source_status === 'maintenance') bg-yellow-100 text-yellow-800
                                            @else bg-red-100 text-red-800 @endif">
                                        {{ $source->source_status }}
                                    </span>
                                </p>
                                <p><span class="font-medium">Lokasi:</span> {{ $source->village }},
                                    {{ $source->district }}</p>
                                <p><span class="font-medium">Kapasitas:</span> {{ $source->capacity_flow_lps }} L/s
                                </p>

                                <a href="{{ route('water-source.show', $source->id) }}"
                                    class="inline-block mt-3 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors">
                                    Detail
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
