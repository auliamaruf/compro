@php
    $histories = \App\Models\CompanyHistory::orderBy('year')->get();
@endphp

<div id="sejarah-content" class="tab-content hidden">
    <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
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
                                    <div class="transform group-hover:-translate-x-2 transition-transform duration-300">
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
                                    <div class="transform group-hover:translate-x-2 transition-transform duration-300">
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
    </div>
</div>
