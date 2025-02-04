@include('components.navbar')

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-blue-600 to-blue-800 py-24 mt-16"> <!-- Tambahkan mt-16 -->
    <!-- Decorative Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute right-0 bottom-0">
            <svg class="w-64 h-64" viewBox="0 0 200 200">
                <path fill="currentColor"
                    d="M45,-50C58.4,-34.3,69.2,-17.2,71.1,1.9C73,21,66,42,51.9,54.8C37.8,67.7,18.9,72.3,0.7,71.4C-17.5,70.5,-34.9,64,-47.2,51.4C-59.5,38.8,-66.7,20.4,-65.7,3.3C-64.7,-13.8,-55.5,-27.7,-43.3,-43.3C-31.1,-58.9,-15.5,-76.2,1,-77.2C17.4,-78.2,34.9,-66,45,-50Z"
                    transform="translate(100 100)" />
            </svg>
        </div>
    </div>

    <!-- Title Section -->
    <div class="relative container mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita & Pengumuman</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
            Temukan informasi terkini seputar perkembangan dan kegiatan perusahaan kami
        </p>
    </div>
</div>

<!-- News Grid Section -->
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <!-- News Cards -->
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                    </div>
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        <!-- Image Section -->
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                {{ $post->created_at->format('d M Y') }}
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    {{ $post->author->name }}
                                </span>
                            </div>

                            <h3
                                class="font-bold text-xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $post->title }}
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($post->body), 150) }}
                            </p>
                            <a href="{{ url('/posts/' . $post->id) }}"
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
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $posts->links() }}
        </div>
        <!-- Back Button -->
        <div class="container mx-auto px-4 pt-8 flex justify-center">
            <a href="{{ url('/') }}"
                class="inline-flex items-center space-x-2 text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span>Kembali ke Beranda</span>
            </a>
        </div>
    </div>

</div>

@include('components.floating-contact')
@include('components.footer')
