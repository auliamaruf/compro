@php
    $banners = \App\Models\HeroBanner::getActiveBanners();
@endphp

<div class="swiper-container relative overflow-hidden bg-gradient-to-br from-blue-900 to-gray-900">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide group">
                <div class="relative w-full min-h-[600px] md:min-h-[800px] lg:min-h-screen overflow-hidden">
                    <!-- Background Image with Parallax -->
                    <div class="absolute inset-0 transform group-hover:scale-110 transition-transform duration-[2000ms]">
                        <img src="{{ Storage::url($banner->image_path) }}"
                            class="absolute inset-0 w-full h-full object-cover"
                            alt="{{ $banner->title }}">
                        <!-- Enhanced Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/50 to-transparent"></div>
                    </div>

                    <!-- Content Container - Menambahkan padding top lebih besar -->
                    <div class="relative container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-4xl space-y-6 animate-fade-in-up pt-32 md:pt-48 lg:pt-64"> <!-- Mengubah padding top -->
                            <!-- Decorative Element - Align Left -->
                            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full mb-10 transform -translate-x-4 opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 transition-all duration-1000 delay-300"></div>

                            <!-- Title - Remove text-center -->
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight tracking-tight transform -translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition-all duration-1000 mb-6">
                                {!! $banner->title !!}
                            </h1>

                            <!-- Description - Remove text-center -->
                            <p class="text-lg md:text-2xl font-light bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-transparent transform -translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition-all duration-1000 delay-200 mb-8">
                                {{ $banner->description }}
                            </p>

                            <!-- Button - Align Left -->
                            @if ($banner->button_text && $banner->button_link)
                                <div class="transform -translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition-all duration-1000 delay-400 mt-8">
                                    <a href="{{ $banner->button_link }}"
                                        class="group/btn inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg hover:from-blue-700 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-blue-500/25">
                                        <span class="text-lg font-semibold">{{ $banner->button_text }}</span>
                                        <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Enhanced Navigation Controls -->
    @if ($banners->count() > 1)
        <div class="swiper-pagination !bottom-10 [&>*]:mx-1"></div>
        
        <div class="navigation-buttons absolute bottom-1/2 w-full px-4 hidden md:block">
            <button class="swiper-button-prev !text-white after:content-[''] group">
                <span class="absolute bg-white/10 backdrop-blur-sm rounded-full p-4 transform scale-75 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </button>
            <button class="swiper-button-next !text-white after:content-[''] group">
                <span class="absolute bg-white/10 backdrop-blur-sm rounded-full p-4 transform scale-75 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </button>
        </div>
    @endif
</div>

@push('styles')
<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in-up {
        animation: fade-in-up 1s ease-out;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper-container', {
        loop: true,
        effect: 'fade',
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + ' w-3 h-3 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></span>';
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
</script>
@endpush
