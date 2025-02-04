// In js/components/profile-section.js
function initializeTabSwitching() {
    return function switchTab(tabName, event) {
        // Update tab buttons
        const tabs = document.querySelectorAll('.profile-tab');
        tabs.forEach(tab => {
            tab.classList.remove('bg-blue-600', 'text-white');
            tab.classList.add('bg-blue-100', 'text-blue-600');
        });

        // Update active tab
        const currentTab = event.currentTarget || document.querySelector(`[data-tab="${tabName}"]`);
        if (currentTab) {
            currentTab.classList.remove('bg-blue-100', 'text-blue-600');
            currentTab.classList.add('bg-blue-600', 'text-white');
        }

        // Update content with animation
        const contents = document.querySelectorAll('.tab-content');
        contents.forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('active');
        });

        const activeContent = document.getElementById(`${tabName}-content`);
        if (activeContent) {
            activeContent.classList.remove('hidden');
            requestAnimationFrame(() => {
                activeContent.classList.add('active');
            });
        }
    };
}

// Add navigation function
function navigateToProfileTab(tabName) {
    // First scroll to the profile section
    const profileSection = document.querySelector('.container');
    profileSection.scrollIntoView({ behavior: 'smooth' });

    // Wait for scroll to complete before switching tab
    setTimeout(() => {
        const switchTabFunc = initializeTabSwitching();
        switchTabFunc(tabName, { currentTarget: document.querySelector(`[data-tab="${tabName}"]`) });
    }, 500);
}

// Make functions globally available
window.switchTab = initializeTabSwitching();
window.navigateToProfileTab = navigateToProfileTab;
