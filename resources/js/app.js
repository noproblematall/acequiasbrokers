import './bootstrap';

// Global toast function
window.toast = (message, type = 'success') => {
    window.dispatchEvent(new CustomEvent('toast', {
        detail: { message, type }
    }));
};
