<div id="contact-modal" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 to-black/50 backdrop-blur-sm transition-opacity duration-300 ease-in-out opacity-0" 
         id="modal-backdrop" onclick="closeContactModal()"></div>
    
    <!-- Modal Container -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div class="bg-gradient-to-b from-white/95 to-blue-50/95 backdrop-blur-xl rounded-2xl shadow-2xl shadow-blue-500/10 w-full max-w-lg transform transition-all duration-300 ease-out scale-95 opacity-0 translate-y-4"
             id="modal-content">
            
            <!-- Header -->
            <div class="relative px-6 pt-6">
                <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl p-3 shadow-lg shadow-blue-500/30">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="text-center mt-6">
                    <h3 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                        Hubungi Kami
                    </h3>
                    <p class="mt-2 text-gray-600">Silakan tinggalkan pesan Anda, kami akan segera merespons</p>
                </div>
                <button onclick="closeContactModal()" 
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Form -->
            <form id="contact-form" class="p-6 space-y-4">
                @csrf
                <div class="space-y-4">
                    <!-- Nama -->
                    <div class="group">
                        <div class="relative">
                            <input type="text" name="name" required
                                   class="peer w-full h-12 px-4 border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:border-blue-500 focus:outline-none transition-colors duration-300"
                                   placeholder="Nama Lengkap">
                            <label class="absolute left-4 -top-2 text-xs text-gray-600 transition-all 
                                        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base 
                                        peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-600">
                                Nama Lengkap
                            </label>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="group">
                        <div class="relative">
                            <input type="email" name="email" required
                                   class="peer w-full h-12 px-4 border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:border-blue-500 focus:outline-none transition-colors duration-300"
                                   placeholder="Email">
                            <label class="absolute left-4 -top-2 text-xs text-gray-600 transition-all 
                                        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base 
                                        peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-600">
                                Email
                            </label>
                        </div>
                    </div>

                    <!-- Subjek -->
                    <div class="group">
                        <div class="relative">
                            <input type="text" name="subject" required
                                   class="peer w-full h-12 px-4 border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:border-blue-500 focus:outline-none transition-colors duration-300"
                                   placeholder="Subjek">
                            <label class="absolute left-4 -top-2 text-xs text-gray-600 transition-all 
                                        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base 
                                        peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-600">
                                Subjek
                            </label>
                        </div>
                    </div>

                    <!-- Pesan -->
                    <div class="group">
                        <div class="relative mt-2">
                            <textarea name="message" rows="4" required
                                      class="peer w-full p-4 border-2 border-gray-300 rounded-lg text-gray-900 placeholder-transparent focus:border-blue-500 focus:outline-none transition-colors duration-300 resize-none"
                                      placeholder="Pesan"></textarea>
                            <label class="absolute left-4 -top-2 text-xs text-gray-600 bg-white px-2 transition-all
                                        peer-placeholder-shown:top-4 peer-placeholder-shown:text-base 
                                        peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-600">
                                Pesan
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submit-button"
                        class="w-full h-12 mt-6 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg transform transition-all duration-300 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50">
                    <span id="button-text">Kirim Pesan</span>
                    <div id="button-loader" class="hidden">
                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('contact-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const form = e.target;
    const submitButton = document.getElementById('submit-button');
    const buttonText = document.getElementById('button-text');
    const buttonLoader = document.getElementById('button-loader');
    
    submitButton.disabled = true;
    buttonText.classList.add('hidden');
    buttonLoader.classList.remove('hidden');
    
    try {
        const formData = new FormData(form);
        const response = await fetch('/send-email', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        });
        
        const result = await response.json();
        
        if (response.ok) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Pesan Anda telah berhasil dikirim.',
                showConfirmButton: false,
                timer: 2000
            });
            closeContactModal();
            form.reset();
        } else {
            throw new Error(result.message || 'Terjadi kesalahan saat mengirim pesan');
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: error.message || 'Terjadi kesalahan saat mengirim pesan'
        });
    } finally {
        submitButton.disabled = false;
        buttonText.classList.remove('hidden');
        buttonLoader.classList.add('hidden');
    }
});

// Close modal when clicking escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeContactModal();
    }
});
</script>
