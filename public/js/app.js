// Initialize everything
document.addEventListener('DOMContentLoaded', function() {
    initializeSwiper();
    initializeMobileMenu();
    initializeModals();
    initializeScrollEvents();

    // Inisialisasi Tab
    const tabs = document.querySelectorAll('.profile-tab');

    tabs.forEach(tab => {
        ['click', 'touchstart'].forEach(eventType => {
            tab.addEventListener(eventType, (e) => {
                // Gunakan event asli atau buat objek event palsu
                const safeEvent = e || {
                    preventDefault: () => {},
                    stopPropagation: () => {}
                };

                const tabName = tab.getAttribute('data-tab') ||
                                (tab.getAttribute('onclick') &&
                                 tab.getAttribute('onclick').match(/'(.*?)'/)[1]);

                if (tabName) {
                    switchTab(tabName, safeEvent);
                }
            }, { passive: false });
        });

        // Tambahkan dukungan keyboard
        tab.addEventListener('keydown', (e) => {
            const safeEvent = e || {
                preventDefault: () => {},
                stopPropagation: () => {}
            };

            if (e.key === 'Enter' || e.key === ' ') {
                const tabName = tab.getAttribute('data-tab') ||
                                (tab.getAttribute('onclick') &&
                                 tab.getAttribute('onclick').match(/'(.*?)'/)[1]);

                if (tabName) {
                    switchTab(tabName, safeEvent);
                }
            }
        });
    });

    // Aktifkan tab pertama secara default
    const firstTab = tabs[0];
    if (firstTab) {
        const tabName = firstTab.getAttribute('data-tab') ||
                        (firstTab.getAttribute('onclick') &&
                         firstTab.getAttribute('onclick').match(/'(.*?)'/)[1]);

        if (tabName) {
            switchTab(tabName, {
                preventDefault: () => {},
                stopPropagation: () => {}
            });
        }
    }
});
