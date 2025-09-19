import './bootstrap';

// nav menu
document.querySelector('.nav-menu-button button').addEventListener('click', () => {
  const mobileMenu = document.querySelector('#mobile-menu');
  mobileMenu.toggleAttribute('hidden');
});