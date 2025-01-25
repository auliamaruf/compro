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
                     <h4 class="font-bold text-lg md:text-xl text-white mb-6 flex items-center space-x-2">
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
                                 <p class="text-sm md:text-base text-white/90">Jalan Contoh No. 123<br>Kota, Provinsi
                                     12345</p>
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
                             <p class="text-sm md:text-base text-white/90">(021) 1234-5678</p>
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
                             <p class="text-sm md:text-base text-white/90">info@perusahaan.com</p>
                         </div>
                     </div>
                 </div>

                 <!-- Quick Links -->
                 <div class="transform hover:-translate-y-1 transition-transform duration-300">
                     <h4 class="font-bold text-lg md:text-xl text-white mb-6 flex items-center space-x-2">
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
                     <h4 class="font-bold text-lg md:text-xl text-white mb-6 flex items-center space-x-2">
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
