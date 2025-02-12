<!-- Card Pengecekan Rekening -->
<div class="relative bg-white rounded-2xl shadow-lg p-8 card-hover overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full -mr-16 -mt-16 opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-24 h-24 bg-blue-50 rounded-full -ml-12 -mb-12"></div>

    <div class="relative">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 mb-6">
            <div
                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center transform rotate-3">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                    </path>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Pengecekan Tagihan</h2>
                <p class="text-gray-600 leading-relaxed">Cek tagihan rekening air Anda dengan mudah dan cepat. Lihat
                    riwayat pemakaian dan pembayaran secara detail.</p>
            </div>
        </div>
        <button id="open-check-account"
            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
            Cek Rekening
        </button>
    </div>
</div>

<!-- Modal Cek Rekening -->
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
                    <h2 class="text-lg md:text-2xl font-bold text-gray-800">Pengecekan Rekening</h2>
                </div>
            </div>

            <!-- Modal Form -->
            <form class="space-y-6">
                <!-- Account Number Input -->
                <div class="group space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Nomor Pelanggan
                    </label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center justify-center w-12 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400 transition-colors duration-300 transform
                                     group-focus-within:text-blue-500 group-hover:scale-110"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <input type="text" pattern="[0-9]{8}" maxlength="8"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            placeholder="Masukkan nomor pelanggan (8 digit)"
                            class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                            title="Masukkan 8 digit angka" required>
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
