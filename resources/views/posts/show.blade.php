<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    @vite('resources/css/app.css')
</head>
@include('components.navbar')
<body class="bg-gray-50">
    <div class="relative bg-gradient-to-br from-blue-600 to-blue-800 h-[250px]">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                class="w-full h-full object-cover opacity-25">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/100 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto -mt-32 relative">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6 md:p-10">
                    <!-- Meta info -->
                    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-6 gap-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $post->created_at->format('d M Y') }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ $post->author->name }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            {{ $post->category->name }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h1 class="text-4xl font-bold text-gray-900 mb-8">{{ $post->title }}</h1>

                    <!-- Content -->
                    <div class="prose max-w-none space-y-6 leading-relaxed text-gray-700">
                        <!-- Featured Image -->
                        <div class="my-8">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-96 object-cover rounded-lg shadow-lg">
                        </div>

                        <!-- Article Content -->
                        <div class="text-lg space-y-6">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back button -->
            <div class="mt-8 mb-16">
                <a href="{{ url('/posts') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
