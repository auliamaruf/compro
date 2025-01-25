function initializeMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');

    // Console log untuk debugging
    console.log('Mobile menu:', mobileMenu);
    console.log('Toggle button:', mobileMenuToggle);
    console.log('Close button:', closeMobileMenu);

    const toggleMobileMenu = (e) => {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }

        if (mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        } else {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', toggleMobileMenu);
    }

    if (closeMobileMenu) {
        closeMobileMenu.addEventListener('click', toggleMobileMenu);
    }

    mobileDropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('button');
        const content = dropdown.querySelector('.dropdown-content');
        const arrow = dropdown.querySelector('.dropdown-arrow');

        if (button && content && arrow) {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                content.classList.toggle('hidden');
                arrow.style.transform = content.classList.contains('hidden')
                    ? 'rotate(0deg)'
                    : 'rotate(180deg)';
            });
        }
    });

    // Tutup menu saat klik di luar
    document.addEventListener('click', (e) => {
        if (mobileMenu && mobileMenu.classList.contains('active') &&
            !mobileMenu.contains(e.target) &&
            !mobileMenuToggle.contains(e.target)) {
            toggleMobileMenu();
        }
    });
}
