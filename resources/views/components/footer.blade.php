@php
    $general = \App\Models\General::first();
@endphp

<footer class="relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-800 to-blue-900">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="white" stroke-width="0.5" />
                </pattern>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
    </div>

    <div class="relative pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
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
                                <p class="text-sm md:text-base text-white/90">{{ $general->alamat }}</p>
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
                            <p class="text-sm md:text-base text-white/90">{{ $general->telepon }}</p>
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
                            <p class="text-sm md:text-base text-white/90">{{ $general->email }}</p>
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
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <h4 class="font-bold text-lg md:text-xl text-white mb-6 flex items-center space-x-2">
                        <span class="w-8 h-0.5 bg-blue-400"></span>
                        <span>Sosial Media</span>
                    </h4>
                    <div class="flex space-x-4">
                        @if ($general->sosial_media_1)
                            <a href="{{ $general->sosial_media_1 }}" class="group" target="_blank">
                                <div
                                    class="w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300 group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </div>
                            </a>
                        @endif

                        @if ($general->sosial_media_2)
                            <a href="{{ $general->sosial_media_2 }}" class="group" target="_blank">
                                <div
                                    class="w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300 group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </div>
                            </a>
                        @endif

                        @if ($general->sosial_media_3)
                            <a href="{{ $general->sosial_media_3 }}" class="group" target="_blank">
                                <div
                                    class="w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300 group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </div>
                            </a>
                        @endif

                        @if ($general->sosial_media_4)
                            <a href="{{ $general->sosial_media_4 }}" class="group" target="_blank">
                                <div
                                    class="w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center hover:bg-blue-600/50 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-300 group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Operating Hours -->
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <h4 class="font-bold text-lg md:text-xl text-white mb-6 flex items-center space-x-2">
                        <span class="w-8 h-0.5 bg-blue-400"></span>
                        <span>Jam Operasional</span>
                    </h4>
                    <div class="text-white/90 space-y-2">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-blue-700/30 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-600/50 transition-colors duration-300">
                                <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                {!! nl2br(e($general->jam_operasional)) !!}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Copyright -->
            <div class="text-center border-t border-blue-700/50 pt-8">
                <p class="text-white/80">© {{ date('Y') }} {{ $general->nama_perusahaan }}. Hak Cipta
                    Dilindungi.</p>
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
