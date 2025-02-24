<!-- Card Pengaduan with decorative elements -->
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
                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                    </path>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Layanan Pengaduan</h2>
                <p class="text-gray-600 leading-relaxed">Sampaikan keluhan atau saran Anda untuk pelayanan yang lebih
                    baik. Kami siap mendengar dan menindaklanjuti laporan Anda.</p>
            </div>
        </div>

        <button id="open-complaint"
            class="group w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
            <div class="flex items-center justify-center gap-3">
                <span class="text-lg font-semibold">Buat Pengaduan Baru</span>
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </div>
        </button>
        <button id="check-complaint-status"
            class="group w-full mt-4 bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
            <div class="flex items-center justify-center gap-3">
                <span class="text-lg font-semibold">Cek Status Pengaduan</span>
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
        </button>
    </div>
</div>

<!-- Modal Pengaduan with enhanced styling -->
<div id="complaint-modal" class="fixed inset-0 bg-black/60 z-[60] hidden">
    <div class="absolute inset-0 backdrop-blur-sm"></div>
    <div class="min-h-screen py-2 px-4 flex items-center justify-center">
        <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl p-6 max-h-[70vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-100">
                <div>
                    <h2
                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent mb-1">
                        Formulir Pengaduan Pelanggan</h2>
                    <p class="text-gray-500">Harap isi sesuai keterangan.</p>
                </div>
            </div>



            <form class="space-y-8" id="complaintForm">
                <!-- Personal Info Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-medium text-gray-700 block mb-2">Nama Pelapor *</label>
                            <input type="text" name="nama_pelapor" placeholder="Nama lengkap"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                required minlength="3">
                        </div>
                        <div class="relative">
                            <label class="text-sm font-medium text-gray-700 block mb-2">Nomor Telepon *</label>
                            <div class="relative">
                                <input type="tel" name="nomor_telp" placeholder="Contoh: 08123456789"
                                    class="w-full px-4 py-3 pr-12 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                    required pattern="[0-9]{11,13}" minlength="11" maxlength="13"
                                    title="Masukkan nomor telepon antara 11-13 digit"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                <div class="absolute right-3 top-1/2 -translate-y-1/2">
                                    <button type="button" class="text-gray-400 hover:text-gray-600"
                                        data-tooltip="Gunakan nomor yang terdaftar di WhatsApp untuk menerima notifikasi update">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </button>
                                    <div
                                        class="tooltip hidden absolute right-0 z-10 w-48 p-2 mt-2 text-xs text-gray-500 bg-white rounded-lg shadow-lg">
                                        Gunakan nomor yang terdaftar di WhatsApp untuk menerima notifikasi update
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const tooltipButtons = document.querySelectorAll('[data-tooltip]');
                            tooltipButtons.forEach(button => {
                                const tooltip = button.nextElementSibling;
                                button.addEventListener('mouseenter', () => tooltip.classList.remove('hidden'));
                                button.addEventListener('mouseleave', () => tooltip.classList.add('hidden'));
                            });
                        </script>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Nomor Pelanggan</label>
                        <input type="text" name="nomor_pelanggan" placeholder="Opsional (8 digit angka)"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            pattern="[0-9]{8}" minlength="8" maxlength="8" title="Masukkan 8 digit angka"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                    </div>
                </div>

                <!-- Complaint Details Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Detail Pengaduan</h3>
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Jenis Pengaduan *</label>
                        <select name="jenis_pengaduan"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            required>
                            <option value="">Pilih Jenis Pengaduan</option>
                            <option value="air_keruh">Air Keruh</option>
                            <option value="air_mati">Air Mati</option>
                            <option value="kebocoran">Kebocoran</option>
                            <option value="meteran">Meteran</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Deskripsi Pengaduan
                            *</label>
                        <textarea name="deskripsi" placeholder="Detail pengaduan"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                            required rows="4"></textarea>
                    </div>
                </div>

                <!-- Location Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Lokasi</h3>
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Alamat Lengkap *</label>
                        <textarea name="alamat" placeholder="Alamat lengkap"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                            required rows="3"></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-medium text-gray-700 block mb-2">Kecamatan *</label>
                            <select name="kecamatan" id="kecamatan"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700 block mb-2">Kelurahan *</label>
                            <select name="kelurahan" id="kelurahan"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                required disabled>
                                <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div id="searchResults"
                            class="absolute z-10 bg-white w-full max-h-48 overflow-y-auto rounded-lg shadow-lg hidden">
                        </div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Lokasi di Peta</label>
                        <div id="map" class="w-full h-96 rounded-lg border border-gray-200 mb-4"></div>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">

                    </div>
                    <div class="text-sm text-gray-600 flex items-center gap-2 mb-2">
                        <button type="button" id="get-location"
                            class="text-blue-600 hover:text-blue-700 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Gunakan Lokasi Saat Ini
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Latitude</label>
                        <input type="text" id="latitude-display" readonly
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-600">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700 block mb-2">Longitude</label>
                        <input type="text" id="longitude-display" readonly
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-600">
                    </div>
                </div>

                <div class="text-sm text-gray-500 flex items-start gap-2 mt-2">
                    <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p>Data yang dibagikan hanya digunakan untuk kepentingan perusahaan dalam rangka penanganan
                        terkait.
                        Seluruh data yang diinput telah dienkripsi guna memastikan keamanan informasi pelanggan.
                        Pastikan data yang diinput sesuai dengan keterangan yang akan disampaikan untuk
                        menghindari
                        kesalahan dalam proses penanganan.</p>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit"
                        class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-md hover:shadow-lg font-semibold">
                        Kirim Pengaduan
                    </button>
                    <button type="button" id="close-complaint"
                        class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-4 px-6 rounded-xl transition-all duration-300 font-semibold">
                        Batal
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Modal Check Complaint Status -->
<div id="check-status-modal" class="fixed inset-0 bg-black/60 z-[60] hidden">
    <div class="absolute inset-0 backdrop-blur-sm"></div>
    <div class="min-h-screen py-2 px-4 flex items-center justify-center">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-100">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Cek Status Pengaduan</h2>
                    <p class="text-gray-500">Masukkan nomor tiket pengaduan Anda</p>
                </div>
                <button id="close-check-status"
                    class="text-gray-400 hover:text-gray-600 p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form id="checkStatusForm" class="space-y-6">
                <div>
                    <label class="text-sm font-medium text-gray-700 block mb-2">Nomor Tiket Pengaduan *</label>
                    <input type="text" name="ticket_number" placeholder="Masukkan nomor tiket"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit"
                        class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-md hover:shadow-lg font-semibold">
                        Cek Status
                    </button>
                    <button type="button" id="close-check-status-btn"
                        class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-4 px-6 rounded-xl transition-all duration-300 font-semibold">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
