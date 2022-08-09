jQuery(document).ready(function(){
    // slider 1
    jQuery('.slider-wrapper').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000,
    });
    // slider 2
    jQuery('.client-slider-cont').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        // fade: true,
        cssEase: 'linear',
        // autoplay: true,
        autoplaySpeed: 4000,
    });

   // menu burger
   jQuery('.icon_menu, .menu__link').click(function () {
    jQuery('.icon_menu, .mobile-menu-cont').toggleClass('active')
});

// close mobile menu when click outside of it
jQuery('body').click(function(e){
    const menu = document.querySelector('.mobile-menu-cont');
    if(!menu.contains(e.target) && !e.target.classList.contains('icon_menu')){
        jQuery('.icon_menu, .mobile-menu-cont').removeClass('active');
    }
})
})