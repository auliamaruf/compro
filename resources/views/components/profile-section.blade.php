<!-- Profile Section -->
<section class="container mx-auto py-8 px-4 md:py-16">
    <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-xl p-4 md:p-8">
        <!-- Title -->
        <div class="text-center mb-8 md:mb-12 relative">
            <!-- Decorative elements -->
            <div class="absolute inset-0 flex items-center justify-center opacity-10">
                <div class="w-48 h-48 border-4 border-blue-200 rounded-full transform -rotate-12"></div>
                <div class="w-48 h-48 border-4 border-blue-300 rounded-full transform rotate-12 -ml-24"></div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold relative">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                    Profil Perusahaan
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Tab Navigation -->
        <div class="flex flex-wrap justify-center gap-2 mb-8">
            <button onclick="switchTab('visi', event)"
                class="profile-tab active px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-600 text-white">
                Visi
            </button>
            <button onclick="switchTab('misi', event)"
                class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Misi
            </button>
            <button onclick="switchTab('sejarah', event)"
                class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Sejarah Perusahaan
            </button>
            <button onclick="switchTab('struktur', event)"
                class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Struktur Organisasi
            </button>
            <button onclick="switchTab('cabang', event)"
                class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                Profil Cabang/Unit
            </button>
        </div>

        <!-- Tab Contents -->
        <div class="max-w-4xl mx-auto">
            <!-- Visi Content -->
            <div id="visi-content" class="tab-content active">
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
                    <!-- Pattern Background -->
                    <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="dots" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <circle cx="10" cy="10" r="2" fill="currentColor" class="text-blue-600" />
                            </pattern>
                            <rect x="0" y="0" width="100" height="100" fill="url(#dots)" />
                        </svg>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100">
                            <!-- Icon Header dengan efek glow -->
                            <div class="flex items-center space-x-4 mb-6 relative">
                                <div class="relative">
                                    <div class="absolute -inset-1 bg-blue-500 rounded-full blur opacity-30"></div>
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center relative ring-4 ring-white">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <!-- icon path -->
                                        </svg>
                                    </div>
                                </div>
                                <h3
                                    class="text-2xl md:text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                                    Visi Kami
                                </h3>
                            </div>

                            <!-- Content dengan efek kartu -->
                            <div
                                class="relative overflow-hidden rounded-lg p-8 bg-white shadow-inner border border-blue-50">
                                <div
                                    class="absolute top-0 right-0 transform translate-x-4 -translate-y-4 w-24 h-24 opacity-10">
                                    <!-- Decorative pattern/icon -->
                                </div>
                                <p class="text-gray-700 leading-relaxed text-lg relative z-10">
                                    Menjadi perusahaan terdepan yang memberikan layanan terbaik dan berkontribusi
                                    dalam pembangunan ekonomi nasional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi Content -->
            <div id="misi-content" class="tab-content hidden">
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Pelayanan Prima Card -->
                        <div
                            class="group hover:shadow-lg transition-all duration-300 bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100 relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                <!-- pattern SVG -->
                            </div>

                            <div class="flex items-center space-x-4 mb-6">
                                <div class="relative transform group-hover:scale-110 transition-transform duration-300">
                                    <div class="absolute -inset-1 bg-blue-500 rounded-full blur opacity-30"></div>
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center relative">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <!-- icon path -->
                                        </svg>
                                    </div>
                                </div>
                                <h4 class="text-xl font-bold text-blue-600">Pelayanan Prima</h4>
                            </div>

                            <div class="relative z-10 pl-20">
                                <p
                                    class="text-gray-700 leading-relaxed transform group-hover:translate-x-2 transition-transform duration-300">
                                    Memberikan pelayanan prima kepada seluruh pelanggan
                                </p>
                            </div>
                        </div>

                        <div
                            class="group hover:shadow-lg transition-all duration-300 bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100 relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                <!-- pattern SVG -->
                            </div>

                            <div class="flex items-center space-x-4 mb-6">
                                <div class="relative transform group-hover:scale-110 transition-transform duration-300">
                                    <div class="absolute -inset-1 bg-blue-500 rounded-full blur opacity-30"></div>
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center relative">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <!-- icon path -->
                                        </svg>
                                    </div>
                                </div>
                                <h4 class="text-xl font-bold text-blue-600">Pelayanan Prima</h4>
                            </div>

                            <div class="relative z-10 pl-20">
                                <p
                                    class="text-gray-700 leading-relaxed transform group-hover:translate-x-2 transition-transform duration-300">
                                    Memberikan pelayanan prima kepada seluruh pelanggan
                                </p>
                            </div>
                        </div>

                        <!-- Similar structure for Inovasi card -->
                    </div>
                </div>
            </div>

            <!-- Sejarah Content -->
            <div id="sejarah-content" class="tab-content hidden">
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
                    <div class="relative">
                        <!-- Timeline garis tengah -->
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-blue-400 to-blue-600">
                        </div>

                        <div class="space-y-12">
                            <!-- 1980 -->
                            <div class="relative group">
                                <div class="flex items-center justify-center space-x-6">
                                    <!-- Left Content -->
                                    <div class="w-1/2 pr-8 text-right">
                                        <div
                                            class="transform group-hover:-translate-x-2 transition-transform duration-300">
                                            <h4 class="text-2xl font-bold text-blue-600 mb-2">1980</h4>
                                            <p class="text-gray-600">Pendirian perusahaan sebagai bentuk komitmen
                                                dalam memberikan layanan terbaik kepada masyarakat.</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Dot -->
                                    <div
                                        class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="absolute -inset-2 bg-blue-500 rounded-full blur opacity-30">
                                        </div>
                                        <div class="w-6 h-6 bg-white border-4 border-blue-500 rounded-full"></div>
                                    </div>

                                    <!-- Right Empty Space -->
                                    <div class="w-1/2"></div>
                                </div>
                            </div>

                            <!-- 1995 -->
                            <div class="relative group">
                                <div class="flex items-center justify-center space-x-6">
                                    <!-- Left Empty Space -->
                                    <div class="w-1/2"></div>

                                    <!-- Timeline Dot -->
                                    <div
                                        class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="absolute -inset-2 bg-blue-500 rounded-full blur opacity-30">
                                        </div>
                                        <div class="w-6 h-6 bg-white border-4 border-blue-500 rounded-full"></div>
                                    </div>

                                    <!-- Right Content -->
                                    <div class="w-1/2 pl-8">
                                        <div
                                            class="transform group-hover:translate-x-2 transition-transform duration-300">
                                            <h4 class="text-2xl font-bold text-blue-600 mb-2">1995</h4>
                                            <p class="text-gray-600">Ekspansi bisnis dan pembukaan cabang pertama
                                                di berbagai wilayah Indonesia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2010 -->
                            <div class="relative group">
                                <div class="flex items-center justify-center space-x-6">
                                    <!-- Left Content -->
                                    <div class="w-1/2 pr-8 text-right">
                                        <div
                                            class="transform group-hover:-translate-x-2 transition-transform duration-300">
                                            <h4 class="text-2xl font-bold text-blue-600 mb-2">2010</h4>
                                            <p class="text-gray-600">Transformasi digital dan modernisasi sistem
                                                pelayanan.</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Dot -->
                                    <div
                                        class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="absolute -inset-2 bg-blue-500 rounded-full blur opacity-30">
                                        </div>
                                        <div class="w-6 h-6 bg-white border-4 border-blue-500 rounded-full"></div>
                                    </div>

                                    <!-- Right Empty Space -->
                                    <div class="w-1/2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Struktur Content -->
            <div id="struktur-content" class="tab-content hidden">
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
                    <div class="max-w-4xl mx-auto">
                        <!-- Direktur Utama -->
                        <div class="mb-12 relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-blue-50 to-transparent -z-10"></div>
                            <div class="relative transform hover:-translate-y-1 transition-all duration-300">
                                <div
                                    class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl blur opacity-25">
                                </div>
                                <div class="bg-white border border-blue-100 rounded-xl p-6 text-center relative">
                                    <div class="absolute top-0 right-0 w-24 h-24 opacity-10">
                                        <!-- Decorative pattern -->
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-4">
                                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <!-- User icon path -->
                                            </svg>
                                        </div>
                                        <h4 class="text-xl font-bold text-blue-600">Direktur Utama</h4>
                                        <p class="text-gray-600 mt-1">Nama Direktur</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Connecting Lines -->
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0.5 h-8 bg-blue-200">
                            </div>
                        </div>

                        <!-- Divisi Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Repeat for each division -->
                            <div class="group">
                                <div class="relative transform hover:-translate-y-2 transition-all duration-300">
                                    <div
                                        class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-xl blur opacity-25 group-hover:opacity-50">
                                    </div>
                                    <div class="bg-white border border-blue-100 rounded-xl p-6 text-center relative">
                                        <div
                                            class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 transition-transform duration-300">
                                            <!-- Division icon -->
                                        </div>
                                        <h4 class="text-lg font-bold text-blue-600">Direktur Operasional</h4>
                                        <p class="text-gray-600 mt-1">Nama Direktur</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for other divisions -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cabang Content -->
            <div id="cabang-content" class="tab-content hidden">
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Jakarta Branch -->
                        <div class="group relative">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                            </div>
                            <div
                                class="relative bg-gradient-to-br from-white to-blue-50 p-6 rounded-xl border border-blue-100">
                                <!-- Header -->
                                <div class="flex items-center space-x-4 mb-6">
                                    <div
                                        class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                    </div>
                                    <h4
                                        class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                                        Cabang Jakarta
                                    </h4>
                                </div>

                                <!-- Contact Info -->
                                <div class="space-y-4">
                                    <div
                                        class="flex items-center space-x-3 group-hover:translate-x-2 transition-transform duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-gray-700"><span class="font-medium">Alamat:</span> Jl.
                                            Sudirman No. 123</p>
                                    </div>
                                    <div
                                        class="flex items-center space-x-3 group-hover:translate-x-2 transition-transform duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <p class="text-gray-700"><span class="font-medium">Telepon:</span> (021)
                                            555-0123</p>
                                    </div>
                                    <div
                                        class="flex items-center space-x-3 group-hover:translate-x-2 transition-transform duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <p class="text-gray-700"><span class="font-medium">Email:</span>
                                            jakarta@perusahaan.com</p>
                                    </div>
                                </div>

                                <!-- Action Button -->
                                <div class="mt-6">
                                    <button
                                        class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 px-4 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-colors duration-300 flex items-center justify-center space-x-2">
                                        <span>Lihat Detail</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Ulangi struktur yang sama untuk Cabang Surabaya -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
