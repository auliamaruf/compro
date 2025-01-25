function switchTab(tabName, event) {
    // Pastikan event adalah objek yang valid
    if (!event || typeof event === 'undefined') {
        event = {
            preventDefault: () => {},
            stopPropagation: () => {}
        };
    }

    // Gunakan metode preventDefault dan stopPropagation hanya jika tersedia
    if (typeof event.preventDefault === 'function') {
        event.preventDefault();
    }

    if (typeof event.stopPropagation === 'function') {
        event.stopPropagation();
    }

    const tabs = document.querySelectorAll('.profile-tab');
    const contents = document.querySelectorAll('.tab-content');

    // Reset tabs
    tabs.forEach(tab => {
        tab.classList.remove('bg-blue-600', 'text-white');
        tab.classList.add('bg-blue-100', 'text-blue-600');
    });

    // Cari tab yang sesuai dengan nama tab
    const activeTab = Array.from(tabs).find(tab =>
        tab.getAttribute('data-tab') === tabName ||
        (tab.getAttribute('onclick') && tab.getAttribute('onclick').includes(tabName))
    );

    if (activeTab) {
        activeTab.classList.remove('bg-blue-100', 'text-blue-600');
        activeTab.classList.add('bg-blue-600', 'text-white');
    }

    // Reset contents
    contents.forEach(content => {
        content.style.display = 'none';
        content.classList.add('hidden');
        content.classList.remove('active');
    });

    // Show content
    const contentId = `${tabName}-content`;
    const activeContent = document.getElementById(contentId);

    if (activeContent) {
        activeContent.style.display = 'block';
        activeContent.classList.remove('hidden');
        requestAnimationFrame(() => {
            activeContent.classList.add('active');
        });
    }
}

function initializeTabs() {
    // Get all tab buttons
    const tabs = document.querySelectorAll('.profile-tab');
    const isMobile = window.matchMedia('(max-width: 768px)').matches;

    tabs.forEach(tab => {
        // Add touch event for mobile
        tab.addEventListener('touchstart', (e) => {
            e.preventDefault();
            const onclick = tab.getAttribute('onclick');
            if (onclick) {
                const tabName = onclick.match(/'(.*?)'/)[1];
                console.log('Touch event on tab:', tabName);
                switchTab(tabName, e);
            }
        }, { passive: false });

        // Add click event for desktop
        tab.addEventListener('click', (e) => {
            if (e.pointerType === 'touch') return;
            const onclick = tab.getAttribute('onclick');
            if (onclick) {
                const tabName = onclick.match(/'(.*?)'/)[1];
                console.log('Click event on tab:', tabName);
                switchTab(tabName, e);
            }
        });

        // Make tabs focusable and handle keyboard navigation
        tab.setAttribute('role', 'tab');
        tab.setAttribute('tabindex', '0');
        tab.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const onclick = tab.getAttribute('onclick');
                if (onclick) {
                    const tabName = onclick.match(/'(.*?)'/)[1];
                    switchTab(tabName, e);
                }
            }
        });
    });

    // Set initial tab
    const firstTab = tabs[0];
    if (firstTab) {
        const onclick = firstTab.getAttribute('onclick');
        if (onclick) {
            const tabName = onclick.match(/'(.*?)'/)[1];
            switchTab(tabName, { currentTarget: firstTab, preventDefault: () => {} });
        }
    }

    // Handle resize events
    window.addEventListener('resize', () => {
        const newIsMobile = window.matchMedia('(max-width: 768px)').matches;
        if (isMobile !== newIsMobile) {
            location.reload();
        }
    });
}

function initializeScrollEvents() {
    const navbar = document.querySelector('nav > div');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-opacity-95', 'backdrop-blur-md');
        } else {
            navbar.classList.remove('bg-opacity-95', 'backdrop-blur-md');
        }
    }, { passive: true });
}
