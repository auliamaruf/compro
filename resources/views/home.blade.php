@include('components.navbar')
@include('components.hero-section')
<div class="container mx-auto px-4 -mt-16 relative z-10">
    <div class="grid md:grid-cols-2 gap-8">
        @include('components.quick-action-cards.cek-rekening')
        @include('components.quick-action-cards.pengaduan')
    </div>
</div>
@include('components.profile-section.index')
@include('components.news-section')
@include('components.floating-contact')
@include('components.footer')
