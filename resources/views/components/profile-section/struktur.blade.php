@php
    $direkturUtama = \App\Models\OrganizationStructure::where('level', 0)->first();
    $direkturUmum = $direkturUtama
        ? \App\Models\OrganizationStructure::where('supervisor_id', $direkturUtama->id)->where('level', 1)->first()
        : null;
    $kepalaBagian = $direkturUmum
        ? \App\Models\OrganizationStructure::where('supervisor_id', $direkturUmum->id)->where('level', 2)->orderBy('order')->get()
        : collect([]);

    // Kepala Sub Bagian (Level 3)
    $kepalaSubBagian = [];
    foreach ($kepalaBagian as $kepala) {
        $kepalaSubBagian[$kepala->id] = \App\Models\OrganizationStructure::where('supervisor_id', $kepala->id)
            ->where('level', 3)
            ->orderBy('order')
            ->get();
    }
@endphp

<div id="struktur-content" class="tab-content hidden">
    <div class="bg-white rounded-xl shadow-md p-4 md:p-6">
        <div class="max-w-5xl mx-auto">
            @if ($direkturUtama)
                <!-- Level 0: Direktur Utama -->
                <div class="flex justify-center mb-12">
                    <div class="relative w-48">
                        <div class="relative">
                            <div class="bg-white border border-blue-100 rounded-lg p-4 text-center">
                                <h4 class="text-lg font-bold text-blue-600">{{ $direkturUtama->position_name }}</h4>
                                <p class="text-gray-600 mt-1">{{ $direkturUtama->name }}</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 left-1/2 w-0.5 h-6 bg-blue-200"></div>
                    </div>
                </div>

                @if ($direkturUmum)
                    <!-- Level 1: Direktur Umum -->
                    <div class="flex justify-center mb-12">
                        <div class="relative w-48">
                            <div class="relative">
                                <div class="bg-white border border-blue-100 rounded-lg p-4 text-center">
                                    <h4 class="text-md font-bold text-blue-600">{{ $direkturUmum->position_name }}</h4>
                                    <p class="text-gray-600 mt-1">{{ $direkturUmum->name }}</p>
                                </div>
                            </div>
                            <div class="absolute -bottom-6 left-1/2 w-0.5 h-6 bg-blue-200"></div>
                        </div>
                    </div>
                @endif

                <!-- Level 2: Kepala Bagian -->
                <div class="flex justify-center space-x-12 mb-12">
                    @foreach($kepalaBagian as $kepala)
                        <div class="relative">
                            <div class="bg-white border border-blue-100 rounded-lg p-4 text-center w-48">
                                <h4 class="text-md font-bold text-blue-600">{{ $kepala->position_name }}</h4>
                                <p class="text-gray-600 mt-1">{{ $kepala->name }}</p>
                            </div>

                            <!-- Garis hierarki ke Kepala Sub Bagian jika ada -->
                            @if(isset($kepalaSubBagian[$kepala->id]) && $kepalaSubBagian[$kepala->id]->isNotEmpty())
                                <div class="absolute -bottom-6 left-1/2 w-0.5 h-6 bg-blue-200"></div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- Level 3: Kepala Sub Bagian -->
                <div class="flex justify-center space-x-12">
                    @foreach($kepalaBagian as $kepala)
                        @if(isset($kepalaSubBagian[$kepala->id]) && $kepalaSubBagian[$kepala->id]->isNotEmpty())
                            <div class="relative flex flex-col items-center space-y-4">
                                <!-- Garis lurus dari Kepala Bagian ke Kepala Sub Bagian -->
                                <div class="w-0.5 h-6 bg-blue-200"></div>

                                <!-- Gunakan flex-row untuk membuat sub bagian sejajar -->
                                <div class="flex justify-center space-x-4">
                                    @foreach($kepalaSubBagian[$kepala->id] as $subBagian)
                                        <div class="bg-white border border-blue-100 rounded-lg p-3 text-center w-40">
                                            <h4 class="text-sm font-bold text-blue-600">{{ $subBagian->position_name }}</h4>
                                            <p class="text-xs text-gray-600 mt-1">{{ $subBagian->name }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                <div class="text-center p-6 bg-gray-50 rounded-xl">
                    <p class="text-gray-500">Struktur organisasi belum tersedia.</p>
                </div>
            @endif
        </div>
    </div>
</div>
