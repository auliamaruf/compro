@include('components.navbar.index')
@include('components.hero-section.index')
<div class="container mx-auto px-4 -mt-16 relative z-10">
    <div class="grid md:grid-cols-2 gap-8">
        @include('components.quick-action-cards.card.cek-rekening')
        @include('components.quick-action-cards.card.pengaduan')
    </div>
</div>
@include('components.profile-section.index')
@include('components.news-section.index')
@include('components.emails.contact')
@include('components.footer.index')
