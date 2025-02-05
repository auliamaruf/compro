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
                <div class="space-y-6">
                    <!-- Nama -->
                    <div class="relative">
                        <label for="name" class="absolute -top-2.5 left-2 bg-white px-2 text-sm text-gray-600">
                            Nama Lengkap
                        </label>
                        <input type="text" 
                               id="name"
                               name="name" 
                               required
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition-colors duration-300">
                    </div>

                    <!-- Email -->
                    <div class="relative">
                        <label for="email" class="absolute -top-2.5 left-2 bg-white px-2 text-sm text-gray-600">
                            Email
                        </label>
                        <input type="email" 
                               id="email"
                               name="email" 
                               required
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition-colors duration-300">
                    </div>

                    <!-- Subjek -->
                    <div class="relative">
                        <label for="subject" class="absolute -top-2.5 left-2 bg-white px-2 text-sm text-gray-600">
                            Subjek
                        </label>
                        <input type="text" 
                               id="subject"
                               name="subject" 
                               required
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition-colors duration-300">
                    </div>

                    <!-- Pesan -->
                    <div class="relative">
                        <label for="message" class="absolute -top-2.5 left-2 bg-white px-2 text-sm text-gray-600">
                            Pesan
                        </label>
                        <textarea id="message"
                                 name="message" 
                                 rows="4" 
                                 required
                                 class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition-colors duration-300 resize-none"></textarea>
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
