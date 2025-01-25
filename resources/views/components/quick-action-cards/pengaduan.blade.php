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
            <h2 class="text-lg md:text-2xl font-bold text-gray-800">Pengaduan</h2>
            <p class="text-sm md:text-base text-gray-600">Sampaikan keluhan atau saran Anda</p>
        </div>
    </div>
    <button id="open-complaint"
        class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
        Kirim Pengaduan
    </button>
</div>

<!-- Modal Pengaduan -->
<div id="complaint-modal" class="fixed inset-0 bg-black/50 z-[60] hidden modal-transition">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="min-h-screen px-4 flex items-center justify-center">
        <div
            class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 transform transition-all duration-300 scale-95 opacity-0">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg md:text-2xl font-bold text-gray-800">Pengaduan</h2>
                <button id="close-complaint" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
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
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
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
