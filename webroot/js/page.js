window.onload = function() {
    $('.preload-icon').fadeOut('slow');
    $('.header-text').addClass('animated').addClass('bounceInRight');

    $('.bottom-navigation-bar a, .dropdown-button').addClass('animated').addClass('bounceIn');
}

window.onscroll = adjustNavbar;

function adjustNavbar() {
    var bottomNavbar = document.getElementById('bottom-navbar');

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        // Scrolling
        bottomNavbar.style.top = 0;
        bottomNavbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
    } else {
        // Not scrolling
        var media = window.matchMedia("(max-width: 600px)");
        bottomNavbar.style.top = media.matches ? '138px' : '46px';
        bottomNavbar.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    }
}