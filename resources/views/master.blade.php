<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/hero-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/quick-action-cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/profile-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/news-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 top-0">
        <!-- Navbar Background with Enhanced Gradient -->
        <div class="bg-gradient-to-r from-blue-800 via-blue-600 to-blue-800 shadow-lg backdrop-blur-sm bg-opacity-90">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <!-- Enhanced Logo Section -->
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-blue-500 rounded-full blur opacity-25 group-hover:opacity-75 transition duration-300">
                            </div>
                            <img src="logo.png" alt="Logo"
                                class="h-12 md:h-14 relative transform group-hover:scale-105 transition-all duration-300">
                        </div>
                        <div class="hidden md:block">
                            <span class="font-bold text-2xl text-white tracking-wide">Nama Perusahaan</span>
                            <div class="h-0.5 w-0 bg-blue-300 transition-all duration-300 group-hover:w-full"></div>
                        </div>
                    </div>

                    <!-- Enhanced Desktop Menu -->
                    <div class="hidden md:flex space-x-6">
                        <a href="#beranda"
                            class="nav-link relative text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                            <span>Beranda</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 hover:w-full"></span>
                        </a>

                        <!-- Enhanced Dropdown Menu -->
                        <div class="relative group">
                            <button
                                class="nav-link flex items-center text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                                <span>Profil</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 group-hover:w-full"></span>
                            </button>

                            <!-- Enhanced Dropdown Content -->
                            <div
                                class="absolute left-0 mt-2 w-56 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto">
                                <div class="p-2 bg-white rounded-xl shadow-xl backdrop-blur-sm border border-blue-50">
                                    <a href="#visi-misi"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Visi dan Misi</span>
                                    </a>
                                    <a href="#sejarah"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="font-medium">Sejarah Perusahaan</span>
                                    </a>
                                    <a href="#struktur"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Struktur Organisasi</span>
                                    </a>
                                    <a href="#cabang"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Profil Cabang/Unit</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="#pelayanan"
                            class="nav-link relative text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                            <span>Pelayanan</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 hover:w-full"></span>
                        </a>

                        <!-- Enhanced Pelanggan Dropdown -->
                        <div class="relative group">
                            <button
                                class="nav-link flex items-center text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                                <span>Pelanggan</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 group-hover:w-full"></span>
                            </button>

                            <div
                                class="absolute left-0 mt-2 w-56 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto">
                                <div class="p-2 bg-white rounded-xl shadow-xl backdrop-blur-sm border border-blue-50">
                                    <a href="#biaya-tetap"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Biaya Tetap</span>
                                    </a>
                                    <a href="#tarif-dasar"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Tarif Dasar</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="#kontak"
                            class="nav-link relative text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                            <span>Kontak</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 hover:w-full"></span>
                        </a>
                    </div>

                    <!-- Mobile Menu Structure -->
                    <div class="flex items-center md:hidden">
                        <!-- Mobile Menu Toggle Button -->
                        <button id="mobile-menu-toggle" class="lg:hidden">
                            <div
                                class="relative flex items-center justify-center rounded-full w-12 h-12 transform transition-all bg-blue-700 ring-0 ring-gray-300 hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md">
                                <div
                                    class="flex flex-col justify-between w-5 h-5 transform transition-all duration-300 origin-center overflow-hidden">
                                    <div class="bg-white h-0.5 w-6 transform transition-all duration-300 origin-left">
                                    </div>
                                    <div class="bg-white h-0.5 w-6 rounded transform transition-all duration-300">
                                    </div>
                                    <div class="bg-white h-0.5 w-6 transform transition-all duration-300 origin-left">
                                    </div>
                                </div>
                            </div>
                        </button>

                        <!-- Mobile Menu Panel -->
                        <div id="mobile-menu" class="mobile-menu">
                            <!-- Mobile Menu Header -->
                            <div class="flex items-center justify-between p-4 border-b border-blue-700">
                                <div class="flex items-center space-x-3">
                                    <img src="logo.png" alt="Logo" class="h-8 w-8">
                                    <span class="text-white font-medium">Nama Perusahaan</span>
                                </div>
                                <button id="close-mobile-menu" class="p-2 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Mobile Menu Content -->
                            <div class="h-[calc(100vh-64px)] overflow-y-auto">
                                <nav class="px-4 py-6 space-y-4">
                                    <!-- Beranda -->
                                    <a href="#beranda"
                                        class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Beranda</span>
                                    </a>

                                    <!-- Profil Dropdown -->
                                    <div class="mobile-dropdown">
                                        <button
                                            class="w-full flex items-center justify-between p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                            <div class="flex items-center space-x-3">
                                                <svg class="menu-icon w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                    </path>
                                                </svg>
                                                <span class="font-medium">Profil</span>
                                            </div>
                                            <svg class="dropdown-arrow w-5 h-5 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <div
                                            class="dropdown-content mobile-dropdown-content hidden pl-12 pr-4 space-y-2 mt-2">
                                            <a href="#visi-misi"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                                <span>Visi dan Misi</span>
                                            </a>
                                            <a href="#sejarah"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span>Sejarah Perusahaan</span>
                                            </a>
                                            <a href="#struktur"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                    </path>
                                                </svg>
                                                <span>Struktur Organisasi</span>
                                            </a>
                                            <a href="#cabang"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                    </path>
                                                </svg>
                                                <span>Profil Cabang/Unit</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Pelayanan -->
                                    <a href="#pelayanan"
                                        class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Pelayanan</span>
                                    </a>

                                    <!-- Pelanggan Dropdown -->
                                    <div class="mobile-dropdown">
                                        <button
                                            class="w-full flex items-center justify-between p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                            <div class="flex items-center space-x-3">
                                                <svg class="menu-icon w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                    </path>
                                                </svg>
                                                <span class="font-medium">Pelanggan</span>
                                            </div>
                                            <svg class="dropdown-arrow w-5 h-5 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-content hidden pl-12 pr-4 space-y-2 mt-2">
                                            <a href="#biaya-tetap"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                                <span>Biaya Tetap</span>
                                            </a>
                                            <a href="#tarif-dasar"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <svg class="w-5 h-5 text-blue-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <span>Tarif Dasar</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Kontak -->
                                    <a href="#kontak"
                                        class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Kontak</span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section with Slider -->
    <div class="swiper-container relative overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide group">
                <div class="relative w-full h-[600px] md:h-[800px] overflow-hidden">
                    <img src="slider1.jpg"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-black/70 to-transparent"></div>
                    <div class="relative container mx-auto px-4 h-full flex items-center">
                        <div
                            class="max-w-3xl text-white space-y-6 transform transition-all duration-700 translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100">
                            <h1 class="text-4xl md:text-6xl font-extralight tracking-tight leading-tight">
                                Transforming <span class="font-bold text-blue-400">Digital Solutions</span>
                            </h1>
                            <p class="text-xl md:text-2xl font-light text-gray-300 max-w-xl">
                                Innovative strategies that drive business growth and technological excellence
                            </p>
                            <div class="flex space-x-4">
                                <a href="#contact"
                                    class="px-8 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                                    Explore Services
                                </a>
                                <a href="#about"
                                    class="px-8 py-3 border border-white/30 text-white rounded-full backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide group">
                <div class="relative w-full h-[600px] md:h-[800px] overflow-hidden">
                    <img src="slider2.jpg"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-black/70 to-transparent"></div>
                    <div class="relative container mx-auto px-4 h-full flex items-center">
                        <div
                            class="max-w-3xl text-white space-y-6 transform transition-all duration-700 translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100">
                            <h1 class="text-4xl md:text-6xl font-extralight tracking-tight leading-tight">
                                Empowering <span class="font-bold text-blue-400">Business Transformation</span>
                            </h1>
                            <p class="text-xl md:text-2xl font-light text-gray-300 max-w-xl">
                                Cutting-edge solutions designed to elevate your business to new heights
                            </p>
                            <div class="flex space-x-4">
                                <a href="#services"
                                    class="px-8 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                                    Our Solutions
                                </a>
                                <a href="#about"
                                    class="px-8 py-3 border border-white/30 text-white rounded-full backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                                    About Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide group">
                <div class="relative w-full h-[600px] md:h-[800px] overflow-hidden">
                    <img src="slider3.jpg"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-black/70 to-transparent"></div>
                    <div class="relative container mx-auto px-4 h-full flex items-center">
                        <div
                            class="max-w-3xl text-white space-y-6 transform transition-all duration-700 translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100">
                            <h1 class="text-4xl md:text-6xl font-extralight tracking-tight leading-tight">
                                Innovative <span class="font-bold text-blue-400">Technology Solutions</span>
                            </h1>
                            <p class="text-xl md:text-2xl font-light text-gray-300 max-w-xl">
                                Seamless integration of advanced technologies to drive your business forward
                            </p>
                            <div class="flex space-x-4">
                                <a href="#contact"
                                    class="px-8 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                                    Get Started
                                </a>
                                <a href="#about"
                                    class="px-8 py-3 border border-white/30 text-white rounded-full backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                                    Discover More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation dan Pagination -->
        <div class="swiper-pagination absolute bottom-8 left-0 right-0 text-center z-10"></div>
        <div class="swiper-button-next text-white/80 hover:text-white transition-colors duration-300"></div>
        <div class="swiper-button-prev text-white/80 hover:text-white transition-colors duration-300"></div>
    </div>



    <!-- Quick Action Cards -->
    <div class="container mx-auto px-4 -mt-16 relative z-10">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Card Pengecekan Rekening -->
            <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Pengecekan Rekening</h2>
                        <p class="text-gray-600">Cek saldo dan mutasi rekening Anda</p>
                    </div>
                </div>
                <button id="open-check-account"
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                    Cek Rekening
                </button>
            </div>

            <!-- Card Pengaduan -->
            <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Pengaduan</h2>
                        <p class="text-gray-600">Sampaikan keluhan atau saran Anda</p>
                    </div>
                </div>
                <button id="open-complaint"
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                    Kirim Pengaduan
                </button>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div id="check-account-modal" class="fixed inset-0 z-[60] hidden">
        <!-- Backdrop with blur -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <!-- Modal Container -->
        <div class="min-h-screen px-4 flex items-center justify-center">
            <div
                class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 transform transition-all duration-300 scale-95 opacity-0 modal-content relative">
                <!-- Decorative Pattern -->
                <div class="absolute top-0 right-0 w-32 h-32 opacity-5">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <pattern id="modal-pattern" width="10" height="10" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="1" fill="currentColor" class="text-blue-600" />
                        </pattern>
                        <rect width="100" height="100" fill="url(#modal-pattern)" />
                    </svg>
                </div>

                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Pengecekan Rekening</h2>
                    </div>
                </div>

                <!-- Modal Form -->
                <form class="space-y-6">
                    <!-- Account Number Input -->
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Rekening</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002  2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <input type="text" placeholder="Masukkan nomor rekening"
                                class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                required>
                        </div>
                    </div>

                    <!-- PIN Input -->
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">PIN</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" placeholder="Masukkan PIN"
                                class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="group relative w-full">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg blur opacity-30 group-hover:opacity-50 transition-all duration-300">
                        </div>
                        <div
                            class="relative w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 flex items-center justify-center space-x-2">
                            <span>Cek Rekening</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div id="complaint-modal" class="fixed inset-0 bg-black/50 z-[60] hidden modal-transition">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="min-h-screen px-4 flex items-center justify-center">
            <div
                class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 transform transition-all duration-300 scale-95 opacity-0">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Pengaduan</h2>
                    <button id="close-complaint" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb -2">Email</label>
                        <input type="email" placeholder="Masukkan email"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pesan Pengaduan</label>
                        <textarea placeholder="Tuliskan pesan pengaduan Anda"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 h-32 resize-none"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                        Kirim Pengaduan
                    </button>
                </form>
            </div>
        </div>
    </div>


    <!-- Profile Section -->
    <section class="container mx-auto py-8 px-4 md:py-16">
        <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-xl p-4 md:p-8">
            <!-- Title -->
            <div class="text-center mb-8 md:mb-12 relative">
                <h2 class="text-3xl md:text-4xl font-bold relative">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                        Profil Perusahaan
                    </span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-2 mb-8">
                <button onclick="switchTab('visi', event)" data-tab="visi"
                    class="profile-tab active px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-600 text-white">
                    Visi
                </button>
                <button onclick="switchTab('misi', event)" data-tab="misi"
                    class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                    Misi
                </button>
                <button onclick="switchTab('sejarah', event)" data-tab="sejarah"
                    class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                    Sejarah Perusahaan
                </button>
                <button onclick="switchTab('struktur', event)" data-tab="struktur"
                    class="profile-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-100 text-blue-600 hover:bg-blue-200">
                    Struktur Organisasi
                </button>
                <button onclick="switchTab('cabang', event)" data-tab="cabang"
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
                                    <circle cx="10" cy="10" r="2" fill="currentColor"
                                        class="text-blue-600" />
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
                                    <div
                                        class="relative transform group-hover:scale-110 transition-transform duration-300">
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
                                    <div
                                        class="relative transform group-hover:scale-110 transition-transform duration-300">
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
                                                <svg class="w-10 h-10 text-white" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <!-- User icon path -->
                                                </svg>
                                            </div>
                                            <h4 class="text-xl font-bold text-blue-600">Direktur Utama</h4>
                                            <p class="text-gray-600 mt-1">Nama Direktur</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Connecting Lines -->
                                <div
                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0.5 h-8 bg-blue-200">
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
                                        <div
                                            class="bg-white border border-blue-100 rounded-xl p-6 text-center relative">
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


    <!-- News Section -->
    <section class="container mx-auto py-16 px-4">
        <div class="text-center mb-12 relative">
            <!-- Decorative Elements -->
            <div class="absolute inset-0 flex items-center justify-center opacity-10">
                <div class="w-48 h-48 border-4 border-blue-200 rounded-full transform -rotate-12"></div>
                <div class="w-48 h-48 border-4 border-blue-300 rounded-full transform rotate-12 -ml-24"></div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold relative">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                    Berita & Pengumuman
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- News Card -->
            <div class="group relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                </div>
                <div
                    class="relative bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <!-- Image Wrapper -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="berita1.jpg" alt="Berita 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <!-- Date Badge -->
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            22 Jan 2025
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3
                            class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            Berita 1
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Deskripsi singkat berita...
                        </p>
                        <a href="#"
                            class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-medium group">
                            <span>Baca selengkapnya</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                </div>
                <div
                    class="relative bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <!-- Image Wrapper -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="berita1.jpg" alt="Berita 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <!-- Date Badge -->
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            22 Jan 2025
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3
                            class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            Berita 2
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Deskripsi singkat berita...
                        </p>
                        <a href="#"
                            class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-medium group">
                            <span>Baca selengkapnya</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                </div>
                <div
                    class="relative bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <!-- Image Wrapper -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="berita1.jpg" alt="Berita 1"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <!-- Date Badge -->
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            22 Jan 2025
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3
                            class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            Berita 3
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Deskripsi singkat berita...
                        </p>
                        <a href="#"
                            class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-medium group">
                            <span>Baca selengkapnya</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ulangi struktur yang sama untuk berita lainnya -->
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="#"
                class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-3 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-colors duration-300">
                <span>Lihat Semua Berita</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>


    <!-- Enhanced Footer -->
    <footer class="relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-800 to-blue-900">
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <!-- Pattern design -->
                    <pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse">
                        <path d="M 100 0 L 0 0 0 100" fill="none" stroke="white" stroke-width="0.5" />
                    </pattern>
                    <rect width="100" height="100" fill="url(#grid)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-16 pb-8">
            <div class="container mx-auto px-4">
                <!-- Upper Footer -->
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <!-- Contact Info -->
                    <div class="transform hover:-translate-y-1 transition-transform duration-300">
                        <h4 class="font-bold text-xl text-white mb-6 flex items-center space-x-2">
                            <span class="w-8 h-0.5 bg-blue-400"></span>
                            <span>Kontak Kami</span>
                        </h4>
                        <div class="space-y-4">
                            <!-- Address -->
                            <div class="flex items-start group">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-white/90">Jalan Contoh No. 123<br>Kota, Provinsi 12345</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-center group">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <p class="text-white/90">(021) 1234-5678</p>
                            </div>

                            <!-- Email -->
                            <div class="flex items-center group">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="text-white/90">info@perusahaan.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="transform hover:-translate-y-1 transition-transform duration-300">
                        <h4 class="font-bold text-xl text-white mb-6 flex items-center space-x-2">
                            <span class="w-8 h-0.5 bg-blue-400"></span>
                            <span>Tautan Cepat</span>
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="group flex items-center text-white/90 hover:text-white transition-colors duration-300">
                                    <svg class="w-4 h-4 mr-2 text-blue-400 transform group-hover:translate-x-1 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span>Beranda</span>
                                </a>
                            </li>
                            <!-- Repeat for other links -->
                        </ul>
                    </div>

                    <!-- Social Media -->
                    <div class="transform hover:-translate-y-1 transition-transform duration-300">
                        <h4 class="font-bold text-xl text-white mb-6 flex items-center space-x-2">
                            <span class="w-8 h-0.5 bg-blue-400"></span>
                            <span>Sosial Media</span>
                        </h4>
                        <div class="flex space-x-4">
                            <a href="#" class="group">
                                <div
                                    class="w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300 group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </div>
                            </a>
                            <!-- Repeat for other social media -->
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="text-center border-t border-blue-700/50 pt-8">
                    <p class="text-white/80">© 2024 Nama Perusahaan. Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/components/navbar.js') }}"></script>
    <script src="{{ asset('js/components/hero-section.js') }}"></script>
    <script src="{{ asset('js/components/quick-action-cards.js') }}"></script>
    <script src="{{ asset('js/components/profile-section.js') }}"></script>
    <script src="{{ asset('js/components/news-section.js') }}"></script>
    <script src="{{ asset('js/components/footer.js') }}"></script>
</body>

</html>
