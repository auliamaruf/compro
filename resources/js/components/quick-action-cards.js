// quick-action-card.js
const QuickActionCard = {
    // Constants
    PURBALINGGA_BOUNDS: [
        [-7.4391, 109.2656], // Southwest
        [-7.2391, 109.4656]  // Northeast
    ],

    // State variables
    map: null,
    marker: null,

    // Initialize all functionality
    init() {
        this.initializeModals();
        this.initializeTooltips();
        this.setupFormValidation();
    },

    // Modal handling
    initializeModals() {
        const modals = {
            complaint: {
                modal: document.getElementById('complaint-modal'),
                content: document.querySelector('#complaint-modal > div > div'),
                openBtn: document.getElementById('open-complaint'),
                closeBtn: document.getElementById('close-complaint')
            },
            checkStatus: {
                modal: document.getElementById('check-status-modal'),
                content: document.querySelector('#check-status-modal > div > div'),
                openBtn: document.getElementById('check-complaint-status'),
                closeBtn: document.getElementById('close-check-status'),
                additionalCloseBtn: document.getElementById('close-check-status-btn')
            }
        };

        this.setupModalListeners(modals);
        this.setupComplaintModalMap(modals.complaint);
    },

    setupModalListeners(modals) {
        Object.values(modals).forEach(({ modal, content, openBtn, closeBtn, additionalCloseBtn }) => {
            if (modal && content && openBtn) {
                openBtn.addEventListener('click', () => this.toggleModal(modal, content, 'open'));

                modal.addEventListener('click', (e) => {
                    if (!content.contains(e.target)) {
                        this.toggleModal(modal, content, 'close');
                    }
                });

                if (closeBtn) {
                    closeBtn.addEventListener('click', () => this.toggleModal(modal, content, 'close'));
                }

                if (additionalCloseBtn) {
                    additionalCloseBtn.addEventListener('click', () => this.toggleModal(modal, content, 'close'));
                }
            }
        });
    },

    toggleModal(modal, content, action) {
        if (action === 'open') {
            modal.classList.remove('hidden');
            setTimeout(() => {
                content.classList.add('scale-100', 'opacity-100');
                content.classList.remove('scale-95', 'opacity-0');
            }, 10);
        } else {
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        document.body.style.overflow = action === 'open' ? 'hidden' : 'auto';
    },

    // Map functionality
    setupComplaintModalMap(complaintModal) {
        complaintModal.openBtn.addEventListener('click', () => {
            setTimeout(() => {
                this.initializeMap();
                this.setupLocationSearch();
                this.setupGeolocationButton();
            }, 100);
        });
    },

    initializeMap() {
        this.map = L.map('map', {
            center: [-7.3391, 109.3656],
            zoom: 12,
            minZoom: 11,
            maxZoom: 18,
            maxBounds: this.PURBALINGGA_BOUNDS
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(this.map);

        this.map.on('click', (e) => this.handleMapClick(e));
        this.map.invalidateSize();
    },

    handleMapClick(e) {
        if (this.marker) this.map.removeLayer(this.marker);
        this.marker = L.marker(e.latlng).addTo(this.map);
        this.updateCoordinates(e.latlng.lat, e.latlng.lng);
    },

    updateCoordinates(lat, lng) {
        const latInput = document.getElementById('latitude');
        const lngInput = document.getElementById('longitude');
        const latDisplay = document.getElementById('latitude-display');
        const lngDisplay = document.getElementById('longitude-display');

        latInput.value = lat;
        lngInput.value = lng;
        if (latDisplay) latDisplay.value = lat;
        if (lngDisplay) lngDisplay.value = lng;

        latInput.dispatchEvent(new Event('change'));
        lngInput.dispatchEvent(new Event('change'));
    },

    // Location search functionality
    setupLocationSearch() {
        const searchInput = document.getElementById('searchLocation');
        const searchResults = document.getElementById('searchResults');

        if (!searchInput || !searchResults) return;

        searchInput.addEventListener('input', this.debounce((e) => {
            this.handleSearchInput(e.target.value, searchResults);
        }, 500));

        document.addEventListener('click', (e) => {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.add('hidden');
            }
        });
    },

    async handleSearchInput(query, searchResults) {
        if (!query || query.length < 3) {
            searchResults.classList.add('hidden');
            return;
        }

        try {
            const response = await fetch(
                `https://nominatim.openstreetmap.org/search?format=json&q=${query}+Purbalingga&viewbox=109.2656,-7.4391,109.4656,-7.2391&bounded=1`
            );
            const data = await response.json();
            this.displaySearchResults(data, searchResults);
        } catch (error) {
            console.error('Error fetching location data:', error);
        }
    },

    displaySearchResults(results, searchResults) {
        searchResults.innerHTML = '';
        searchResults.classList.remove('hidden');

        results.forEach(result => {
            const div = document.createElement('div');
            div.className = 'p-2 hover:bg-gray-100 cursor-pointer';
            div.textContent = result.display_name;
            div.onclick = () => this.handleLocationSelect(result, searchResults);
            searchResults.appendChild(div);
        });
    },

    handleLocationSelect(result, searchResults) {
        const lat = parseFloat(result.lat);
        const lng = parseFloat(result.lon);

        if (this.marker) this.map.removeLayer(this.marker);
        this.marker = L.marker([lat, lng]).addTo(this.map);
        this.map.setView([lat, lng], 16);

        this.updateCoordinates(lat, lng);
        document.getElementById('searchLocation').value = result.display_name;
        searchResults.classList.add('hidden');
    },

    // Geolocation functionality
    setupGeolocationButton() {
        const getLocationBtn = document.getElementById('get-location');
        if (getLocationBtn) {
            getLocationBtn.addEventListener('click', () => this.getCurrentLocation());
        }
    },

    getCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;

                if (!this.isWithinBounds(lat, lng)) {
                    alert('Lokasi berada di luar area Purbalingga');
                    return;
                }

                this.updateCoordinates(lat, lng);

                if (this.marker) this.map.removeLayer(this.marker);
                this.marker = L.marker([lat, lng]).addTo(this.map);
                this.map.setView([lat, lng], 16);
            });
        }
    },

    isWithinBounds(lat, lng) {
        return lat >= this.PURBALINGGA_BOUNDS[0][0] &&
               lat <= this.PURBALINGGA_BOUNDS[1][0] &&
               lng >= this.PURBALINGGA_BOUNDS[0][1] &&
               lng <= this.PURBALINGGA_BOUNDS[1][1];
    },

    // Tooltip functionality
    initializeTooltips() {
        const tooltipButtons = document.querySelectorAll('[data-tooltip]');
        tooltipButtons.forEach(button => {
            const tooltip = button.nextElementSibling;
            button.addEventListener('mouseenter', () => tooltip.classList.remove('hidden'));
            button.addEventListener('mouseleave', () => tooltip.classList.add('hidden'));
        });
    },

    // Form validation
    setupFormValidation() {
        const complaintForm = document.getElementById('complaintForm');
        const checkStatusForm = document.getElementById('checkStatusForm');

        if (complaintForm) {
            complaintForm.addEventListener('submit', (e) => this.handleComplaintSubmit(e));
        }

        if (checkStatusForm) {
            checkStatusForm.addEventListener('submit', (e) => this.handleStatusCheck(e));
        }
    },

    handleComplaintSubmit(e) {
        e.preventDefault();
        // Add your form submission logic here
    },

    handleStatusCheck(e) {
        e.preventDefault();
        // Add your status check logic here
    },

    // Utility functions
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
};

// Initialize the module when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => QuickActionCard.init());

// Export the module for use in other files if needed
export default QuickActionCard;
