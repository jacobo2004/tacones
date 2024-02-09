document.addEventListener('DOMContentLoaded', function () {
    var toggleButton = document.getElementById('toggle-menu');
    var mobileNav = document.querySelector('.mobile-nav');

    toggleButton.addEventListener('click', function () {
        mobileNav.classList.toggle('show-mobile-nav');
    });
});