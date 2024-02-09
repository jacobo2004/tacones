document.addEventListener('DOMContentLoaded', function () {
    var acceptCookiesButton = document.getElementById('accept-cookies');
    var cookieBanner = document.getElementById('cookie-banner');

    if (acceptCookiesButton && cookieBanner) {
        acceptCookiesButton.addEventListener('click', function () {
            // Oculta el banner y el botón cuando se hace clic en "ACEPTAR"
            cookieBanner.style.display = 'none';
            cookieBanner.style.visibility = 'hidden';
        });
    }


    
});