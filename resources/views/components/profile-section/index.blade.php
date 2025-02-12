@php
    $general = \App\Models\General::first();
@endphp

<!-- Profile Section -->
<section id="profile-section" class="container mx-auto min-h-screen px-4 py-6 md:py-12">
    <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-xl p-4 md:p-8 max-w-6xl mx-auto">
        <!-- Title -->
        <div class="text-center mb-6 md:mb-8 relative">
            <h2 class="text-2xl md:text-4xl font-bold relative">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                    Profil Perusahaan
                </span>
            </h2>
            <div
                class="w-24 md:w-32 h-1 md:h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto mt-3 md:mt-4 rounded-full">
            </div>
        </div>

        <!-- Tab Navigation - Mobile & Desktop -->
        <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-6 md:mb-10">
            <button onclick="switchTab('visi', event)" data-tab="visi"
                class="profile-tab active px-4 md:px-6 py-2 md:py-2.5 rounded-lg text-sm md:text-base font-medium transition-all duration-300 bg-blue-600 text-white hover:shadow-lg">
                Visi
            </button>
            <button onclick="switchTab('misi', event)" data-tab="misi"
                class="profile-tab px-4 md:px-6 py-2 md:py-2.5 rounded-lg text-sm md:text-base font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Misi
            </button>
            <button onclick="switchTab('sejarah', event)" data-tab="sejarah"
                class="profile-tab px-4 md:px-6 py-2 md:py-2.5 rounded-lg text-sm md:text-base font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Sejarah
            </button>
            <button onclick="switchTab('struktur', event)" data-tab="struktur"
                class="profile-tab px-4 md:px-6 py-2 md:py-2.5 rounded-lg text-sm md:text-base font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Struktur
            </button>
            <button onclick="switchTab('cabang', event)" data-tab="cabang"
                class="profile-tab px-4 md:px-6 py-2 md:py-2.5 rounded-lg text-sm md:text-base font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Cabang
            </button>
        </div>

        <!-- Tab Contents - Responsive Height -->
        <div class="max-w-4xl mx-auto h-[calc(100vh-280px)] md:h-[calc(100vh-400px)] overflow-y-auto px-2 md:px-4">
            @include('components.profile-section.visi')
            @include('components.profile-section.misi')
            @include('components.profile-section.sejarah')
            @include('components.profile-section.struktur')
            @include('components.profile-section.cabang')
        </div>
    </div>
</section>
