@php
    $histories = \App\Models\CompanyHistory::orderBy('year')->get();
@endphp

<div id="sejarah-content" class="tab-content hidden">
    <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
        @if ($histories->count() > 0)
            <div class="relative">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-blue-400 to-blue-600">
                </div>

                <div class="space-y-12">
                    @foreach ($histories as $index => $history)
                        <div class="relative group">
                            <div class="flex items-center justify-center space-x-6">
                                @if ($index % 2 == 0)
                                    <div class="w-1/2 pr-8 text-right">
                                        <div
                                            class="transform group-hover:-translate-x-2 transition-transform duration-300">
                                            <h4 class="text-2xl font-bold text-blue-600 mb-2">{{ $history->year }}</h4>
                                            <p class="text-gray-600">{{ $history->description }}</p>
                                        </div>
                                    </div>
                                    <div
                                        class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="absolute -inset-2 bg-blue-500 rounded-full blur opacity-30"></div>
                                        <div class="w-6 h-6 bg-white border-4 border-blue-500 rounded-full"></div>
                                    </div>
                                    <div class="w-1/2"></div>
                                @else
                                    <div class="w-1/2"></div>
                                    <div
                                        class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="absolute -inset-2 bg-blue-500 rounded-full blur opacity-30"></div>
                                        <div class="w-6 h-6 bg-white border-4 border-blue-500 rounded-full"></div>
                                    </div>
                                    <div class="w-1/2 pl-8">
                                        <div
                                            class="transform group-hover:translate-x-2 transition-transform duration-300">
                                            <h4 class="text-2xl font-bold text-blue-600 mb-2">{{ $history->year }}</h4>
                                            <p class="text-gray-600">{{ $history->description }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="flex flex-col items-center justify-center py-12">
                <div class="rounded-full bg-blue-50 p-3 mb-4">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-1">Belum Ada Data Sejarah</h3>
                <p class="text-sm text-gray-500">Sejarah perusahaan akan ditampilkan di sini.</p>
            </div>
        @endif
    </div>
</div>
