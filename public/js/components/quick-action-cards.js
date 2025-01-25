function initializeModals() {
    const modals = {
        checkAccount: {
            modal: document.getElementById('check-account-modal'),
            content: document.querySelector('#check-account-modal .modal-content'),
            openBtn: document.getElementById('open-check-account'),
            closeBtn: document.getElementById('close-check-account')
        },
        complaint: {
            modal: document.getElementById('complaint-modal'),
            content: document.querySelector('#complaint-modal > div > div'),
            openBtn: document.getElementById('open-complaint'),
            closeBtn: document.getElementById('close-complaint')
        }
    };

    function toggleModal(modal, content, action) {
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
    }

    Object.values(modals).forEach(({ modal, content, openBtn, closeBtn }) => {
        if (modal && content && openBtn) {
            openBtn.addEventListener('click', () => toggleModal(modal, content, 'open'));
            modal.addEventListener('click', (e) => {
                if (!content.contains(e.target)) {
                    toggleModal(modal, content, 'close');
                }
            });
            if (closeBtn) {
                closeBtn.addEventListener('click', () => toggleModal(modal, content, 'close'));
            }
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            Object.values(modals).forEach(({ modal, content }) => {
                if (modal && !modal.classList.contains('hidden')) {
                    toggleModal(modal, content, 'close');
                }
            });
        }
    });
}
