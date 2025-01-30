<!-- Hero Section with Slider -->
@php
    $banners = \App\Models\HeroBanner::getActiveBanners();
@endphp

<div class="swiper-container relative overflow-hidden">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide group">
                <div class="relative w-full h-[600px] md:h-[800px] overflow-hidden">
                    <img src="{{ Storage::url($banner->image_path) }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        alt="{{ $banner->title }}">
                    <div class="absolute inset-0 bg-gradient-to-br from-black/70 to-transparent"></div>
                    <div class="relative container mx-auto px-4 h-full flex items-center">
                        <div
                            class="max-w-3xl text-white space-y-6 transform transition-all duration-700 translate-y-10 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100">
                            <h1 class="text-3xl md:text-6xl font-extralight tracking-tight leading-tight">
                                {!! $banner->title !!}
                            </h1>
                            <p class="text-base md:text-2xl font-light text-gray-300 max-w-xl">
                                {{ $banner->description }}
                            </p>
                            @if ($banner->button_text && $banner->button_link)
                                <div class="flex space-x-4">
                                    <a href="{{ $banner->button_link }}"
                                        class="px-8 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                                        {{ $banner->button_text }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Navigation dan Pagination -->
    @if ($banners->count() > 1)
        <div class="swiper-pagination absolute bottom-8 left-0 right-0 text-center z-10"></div>
        <div class="swiper-button-next text-white/80 hover:text-white transition-colors duration-300"></div>
        <div class="swiper-button-prev text-white/80 hover:text-white transition-colors duration-300"></div>
    @endif
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
@endpush
