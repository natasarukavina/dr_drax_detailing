var owl1 = $('#owl1');

owl1.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    animateOut: 'fadeOut',
});

var owl2 = $('#owl2');

owl2.owlCarousel({
    items:1,
    loop:false,
    autoplay:false,
    autoplayTimeout:3500,
    autoplayHoverPause:false,
    nav:true,
    dots:false,
    animateOut: 'fadeOut',
});

var owl3 = $('#owl3');

owl3.owlCarousel({
    items:3,
    loop:true,
    autoplay:false,
    autoplayTimeout:3500,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    animateOut: 'fadeOut',
});

var owl4 = $('.owl4');

owl4.owlCarousel({
    items:1,
    loop:false,
    lazyLoad : true,
    autoplay:false,
    autoplayTimeout:3500,
    autoplayHoverPause:false,
    nav:false,
    dots:true,
    dotsClass: 'kruzici',
    dotClass: 'krug',
    animateOut: 'fadeOut',
});