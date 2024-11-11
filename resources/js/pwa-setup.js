// pwa-install.js
let deferredPrompt;
const pwaInstallation = document.getElementById('pwa-installation');
const installButton = document.getElementById('install-button');
const closeButton = document.getElementById('close-button');
// close-forever
const closeForever = document.getElementById('close-forever');

// Initially hide the prompt
pwaInstallation.style.display = 'none';

// Function to show the prompt
function showInstallPrompt() {
    pwaInstallation.style.display = 'block';
}

// Check if running as installed PWA
function isRunningStandalone() {
    return (window.matchMedia('(display-mode: standalone)').matches) || (window.navigator.standalone === true);
}

// Main installation prompt event
window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing on mobile
    e.preventDefault();
    // Stash the event so it can be triggered later
    deferredPrompt = e;

    // Don't show if already installed
    if (!isRunningStandalone() && !localStorage.getItem('pwa-installation-modal-open')) {
        showInstallPrompt();
    }
});

// Handle install button click
installButton.addEventListener('click', async () => {
    if (!deferredPrompt) {
        // For iOS devices
        if (navigator.userAgent.match(/iPhone|iPad|iPod/)) {
            alert('To install: tap the share button (rectangle with arrow) at the bottom of your browser and select "Add to Home Screen"');
            return;
        }
        return;
    }

    // Show the prompt
    deferredPrompt.prompt();

    // Wait for the user to respond to the prompt
    const { outcome } = await deferredPrompt.userChoice;

    // Clear the saved prompt
    deferredPrompt = null;

    if (outcome === 'accepted') {
        console.log('User accepted the install prompt');
        pwaInstallation.style.display = 'none';
    }
});

// Handle close button click
closeButton.addEventListener('click', () => {
    pwaInstallation.style.display = 'none';
});

closeForever.addEventListener('click', () => {
    pwaInstallation.style.display = 'none';
    localStorage.setItem('pwa-installation-modal-open', false);
});

// Hide prompt if app gets installed
window.addEventListener('appinstalled', (e) => {
    console.log('PWA was installed');
    pwaInstallation.style.display = 'none';
});
