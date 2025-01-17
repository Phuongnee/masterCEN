document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu'); // Vérifiez bien cette déclaration

    // Afficher le menu mobile
    menuToggle.addEventListener('click', () => {
        mobileMenu.style.display = 'flex';
    });

    // Cacher le menu mobile
    closeMenu.addEventListener('click', () => {
        console.log("Fermeture du menu");
        mobileMenu.style.display = 'none';
    });
});