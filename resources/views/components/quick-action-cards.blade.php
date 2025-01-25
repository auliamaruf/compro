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
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
