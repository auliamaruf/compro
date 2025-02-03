function initializeMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');

    if (mobileMenu && mobileMenuToggle && closeMobileMenu) {
        const toggleMobileMenu = () => {
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
        };

        mobileMenuToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });

        closeMobileMenu.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (mobileMenu.classList.contains('active') &&
                !mobileMenu.contains(e.target) &&
                !mobileMenuToggle.contains(e.target)) {
                toggleMobileMenu();
            }
        });
    }

    mobileDropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('button');
        const content = dropdown.querySelector('.dropdown-content');
        const arrow = dropdown.querySelector('.dropdown-arrow');

        if (button && content && arrow) {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                mobileDropdowns.forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        const otherContent = otherDropdown.querySelector('.dropdown-content');
                        const otherArrow = otherDropdown.querySelector('.dropdown-arrow');
                        if (otherContent && otherArrow) {
                            otherContent.classList.add('hidden');
                            otherArrow.style.transform = 'rotate(0deg)';
                        }
                    }
                });

                content.classList.toggle('hidden');
                arrow.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        }
    });
}

function showTab(sectionId, tabName = null) {
    // Close mobile menu if open
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu && mobileMenu.classList.contains('active')) {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Scroll to section first
    scrollToSection(sectionId);

    // If a specific tab is specified, switch to it after a small delay
    if (tabName) {
        setTimeout(() => {
            const tabButton = document.querySelector(`[data-tab="${tabName}"]`);
            if (tabButton) {
                switchTab(tabName, { preventDefault: () => {} });
            }
        }, 100); // Small delay to ensure smooth scrolling
    }
}

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        const navHeight = document.querySelector('nav').offsetHeight;
        const targetPosition = section.getBoundingClientRect().top + window.pageYOffset - navHeight - 20; // Added 20px padding
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}
