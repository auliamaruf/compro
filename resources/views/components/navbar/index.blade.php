<!DOCTYPE html>
<html lang="id">

@php
    $general = \App\Models\General::first();
@endphp


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->nama_perusahaan }}</title>
    <link rel="icon" href="{{ asset('storage/' . $general->logo) }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/hero-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/quick-action-cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/profile-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/news-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui@4/material-ui.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 top-0 pb-16">
        <!-- Navbar Background with Enhanced Gradient -->
        <div class="bg-gradient-to-r from-blue-800 via-blue-600 to-blue-800 shadow-lg backdrop-blur-sm bg-opacity-90">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <!-- Enhanced Logo Section -->
                    <div class="flex items-center space-x-3">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('storage/' . $general->logo) }}" alt="{{ $general->nama_perusahaan }}"
                                class="h-10 md:h-12 hover:opacity-90 transition-all duration-200">
                        </a>
                        <div class="hidden md:block">
                            <a href="{{ url('/') }}"
                                class="font-bold text-xl text-white hover:text-blue-200 transition-colors duration-300">
                                {{ $general->nama_perusahaan }}
                            </a>
                        </div>
                    </div>

                    <!-- Enhanced Desktop Menu -->
                    <div class="hidden md:flex space-x-6">
                        <a href="{{ url('/') }}"
                            class="nav-link relative text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                            <span>Beranda</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 hover:w-full"></span>
                        </a>

                        <!-- Enhanced Dropdown Menu -->
                        <div class="relative group" tabindex="0">
                            <button
                                class="nav-link flex items-center text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                                <span>Profil</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Enhanced Dropdown Content -->
                            <div
                                class="absolute left-0 top-full w-64 invisible opacity-0 transform -translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <!-- Gap Cover -->
                                <div class="h-2 bg-transparent"></div>

                                <div
                                    class="bg-white rounded-xl shadow-xl border border-blue-50/50 backdrop-blur-sm p-2">
                                    <a href="#visi-misi"
                                        onclick="event.preventDefault(); showTab('profile-section', 'visi')"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Visi Perusahaan</span>
                                    </a>
                                    <a href="#visi-misi"
                                        onclick="event.preventDefault(); showTab('profile-section', 'misi')"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Misi Perusahaan</span>
                                    </a>
                                    <a href="#sejarah"
                                        onclick="event.preventDefault(); showTab('profile-section', 'sejarah')"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="font-medium">Sejarah Perusahaan</span>
                                    </a>
                                    <a href="#struktur"
                                        onclick="event.preventDefault(); showTab('profile-section', 'struktur')"
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
                                        onclick="event.preventDefault(); showTab('profile-section', 'cabang')"
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

                        <!-- Add Water Sources Menu -->
                        <div class="relative group" tabindex="0">
                            <button
                                class="nav-link flex items-center text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                                <span>Sumber Air</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div
                                class="absolute left-0 top-full w-64 invisible opacity-0 transform -translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <div class="h-2 bg-transparent"></div>
                                <div
                                    class="bg-white rounded-xl shadow-xl border border-blue-50/50 backdrop-blur-sm p-2">
                                    <a href="{{ route('water-source.index') }}"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                        <span class="font-medium">Semua Sumber</span>
                                    </a>
                                    <a href="{{ route('water-source.active') }}"
                                        class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="font-medium">Sumber Aktif</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Pelanggan Dropdown -->
                        <div class="relative group" tabindex="0">
                            <button
                                class="nav-link flex items-center text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                                <span>Tarif</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div
                                class="absolute left-0 top-full w-48 invisible opacity-0 transform -translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <div class="h-2 bg-transparent"></div>
                                <div
                                    class="bg-white rounded-xl shadow-xl border border-blue-50/50 backdrop-blur-sm p-2">
                                    <a href="{{ url('/biaya-tetap') }}"
                                        class="flex items-center space-x-2 px-3 py-2.5 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span class="font-medium">Biaya Tetap</span>
                                    </a>
                                    <a href="{{ url('/tarif-dasar') }}"
                                        class="flex items-center space-x-2 px-3 py-2.5 text-gray-700 hover:bg-blue-50 rounded-lg group transition-all duration-300">
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

                        <button onclick="openContactModal()"
                            class="nav-link relative text-white font-medium px-3 py-2 hover:text-blue-200 transition-colors duration-300">
                            <span>Kontak</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 group-hover:w-full"></span>
                        </button>
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
                                    <span
                                        class="font-bold text-2xl text-white tracking-wide">{{ $general->nama_perusahaan }}</span>
                                    <div class="h-0.5 w-0 bg-blue-300 transition-all duration-300 group-hover:w-full">
                                    </div>
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
                                                onclick="event.preventDefault(); showTab('profile-section', 'visi')"
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
                                                <span>Visi Perusahaan</span>
                                            </a>
                                            <a href="#visi-misi"
                                                onclick="event.preventDefault(); showTab('profile-section', 'misi')"
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
                                                <span>Misi Perusahaan</span>
                                            </a>
                                            <a href="#sejarah"
                                                onclick="event.preventDefault(); showTab('profile-section', 'sejarah')"
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
                                                onclick="event.preventDefault(); showTab('profile-section', 'struktur')"
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
                                                onclick="event.preventDefault(); showTab('profile-section', 'cabang')"
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

                                    <!-- Mobile Menu - Pelanggan Dropdown -->
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
                                                <span class="font-medium">Tarif</span>
                                            </div>
                                            <svg class="dropdown-arrow w-5 h-5 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-content hidden pl-12 pr-4 space-y-2 mt-2">
                                            <a href="{{ url('/biaya-tetap') }}"
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
                                            <a href="{{ url('/tarif-dasar') }}"
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

                                    <!-- Water Sources Mobile Menu -->
                                    <div class="mobile-dropdown">
                                        <button
                                            class="w-full flex items-center justify-between p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                            <div class="flex items-center space-x-3">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                                <span class="font-medium">Sumber Air</span>
                                            </div>
                                            <svg class="dropdown-arrow w-5 h-5 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-content hidden pl-12 pr-4 space-y-2 mt-2">
                                            <a href="{{ route('water-source.index') }}"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <span>Semua Sumber</span>
                                            </a>
                                            <a href="{{ route('water-source.active') }}"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <span>Sumber Aktif</span>
                                            </a>
                                            <div class="text-sm text-gray-300 px-4 pt-2">Tipe Sumber:</div>
                                            <a href="{{ route('water-source.type', 'spring') }}"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <span>Spring</span>
                                            </a>
                                            <a href="{{ route('water-source.type', 'well') }}"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <span>Well</span>
                                            </a>
                                            <a href="{{ route('water-source.type', 'river') }}"
                                                class="flex items-center space-x-3 p-4 rounded-xl text-white hover:bg-blue-700/50 transition-colors duration-200">
                                                <span>River</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Kontak -->
                                    <a href="#"
                                        onclick="event.preventDefault(); openContactModal(); document.getElementById('mobile-menu').classList.add('hidden');"
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

    <!-- Include Contact Modal -->
    @include('components.emails.contact')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize mobile menu functionality
            // ...existing code...

            // Make sure contact modal functions are globally available
            window.openContactModal = function() {
                const modal = document.getElementById('contact-modal');
                const backdrop = document.getElementById('modal-backdrop');
                const content = document.getElementById('modal-content');

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                requestAnimationFrame(() => {
                    backdrop.classList.add('opacity-100');
                    content.classList.remove('scale-95', 'opacity-0', 'translate-y-4');
                });
            }

            window.closeContactModal = function() {
                const modal = document.getElementById('contact-modal');
                const backdrop = document.getElementById('modal-backdrop');
                const content = document.getElementById('modal-content');

                backdrop.classList.remove('opacity-100');
                content.classList.add('scale-95', 'opacity-0', 'translate-y-4');

                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }, 300);
            }
        });
    </script>
</body>

</html>
