@php
    $branches = \App\Models\BranchProfile::all();
@endphp

<div id="cabang-content" class="tab-content hidden">
    <div class="bg-white rounded-3xl shadow-md p-4 sm:p-6 md:p-8 lg:p-10 my-4">
        @if ($branches->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                @foreach ($branches as $branch)
                    <div class="group relative transform transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-2xl blur opacity-15 group-hover:opacity-30 transition-all duration-300">
                        </div>
                        <div
                            class="relative bg-gradient-to-br from-white to-blue-50 p-4 sm:p-5 lg:p-6 rounded-2xl border border-blue-100 shadow-sm hover:shadow transition-all duration-300">
                            <div class="flex items-center space-x-3 sm:space-x-4 mb-3 sm:mb-4">
                                <div
                                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-blue-600 to-blue-500 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <h4
                                    class="text-base sm:text-lg lg:text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-blue-500">
                                    {{ $branch->branch_name }}
                                </h4>
                            </div>

                            <div class="space-y-2 sm:space-y-3 text-gray-600">
                                <div class="grid grid-cols-[auto_1fr] items-start gap-2">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-500 group-hover/item:text-blue-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <p class="text-sm sm:text-base">{{ $branch->branch_head_name }}</p>
                                </div>
                                <div class="grid grid-cols-[auto_1fr] items-start gap-2">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-500 group-hover/item:text-blue-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p class="text-sm sm:text-base">{{ $branch->branch_address }}</p>
                                </div>
                                <div class="grid grid-cols-[auto_1fr] items-start gap-2">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-500 group-hover/item:text-blue-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="text-sm sm:text-base">{{ $branch->branch_phone }}</p>
                                </div>
                                @if ($branch->branch_email)
                                    <div class="grid grid-cols-[auto_1fr] items-start gap-2">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-500 group-hover/item:text-blue-600"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <p class="text-sm sm:text-base break-all">{{ $branch->branch_email }}</p>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-4 sm:mt-6">
                                <a href="{{ $branch->google_maps_link }}" target="_blank"
                                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-2.5 sm:py-3 px-4 sm:px-5 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 flex items-center justify-center space-x-1 sm:space-x-2 shadow hover:shadow-md transform hover:-translate-y-0.5">
                                    <span class="text-sm sm:text-base font-semibold">Lihat di Maps</span>
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="flex flex-col items-center justify-center py-12 sm:py-16">
                <svg class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 text-gray-300 mb-4 sm:mb-6" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
                <p class="text-xl sm:text-2xl font-semibold text-gray-600">Data cabang belum tersedia</p>
                <p class="text-gray-500 mt-2 sm:mt-3 text-base sm:text-lg">Silakan tambahkan data cabang terlebih dahulu
                </p>
            </div>
        @endif
    </div>
</div>
