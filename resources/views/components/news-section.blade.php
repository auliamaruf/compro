@php
    $posts = \App\Models\Post::with(['author', 'category'])
        ->latest()
        ->take(3)
        ->get();
@endphp

<section class="container mx-auto py-16 px-4">
    <div class="text-center mb-12 relative">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 flex items-center justify-center opacity-10">
            <div class="w-48 h-48 border-4 border-blue-200 rounded-full transform -rotate-12"></div>
            <div class="w-48 h-48 border-4 border-blue-300 rounded-full transform rotate-12 -ml-24"></div>
        </div>

        <h2 class="text-3xl md:text-4xl font-bold relative">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-800">
                Berita & Pengumuman
            </span>
        </h2>
        <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-blue-600 mx-auto mt-4 rounded-full"></div>
    </div>
    <!-- Header section tetap sama -->
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            <div class="group relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-400 rounded-2xl blur opacity-25 group-hover:opacity-50 transition-all duration-300">
                </div>
                <div
                    class="relative bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex space-x-2">
                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                {{ $post->category->name }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
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

    <div class="text-center mt-12">
        <a href="{{ url('/posts') }}"
            class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-3 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-colors duration-300">
            <span>Lihat Semua Berita</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>
