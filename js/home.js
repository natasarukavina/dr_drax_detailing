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
    loop:true,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:false,
		nav:true,
		navText: ["<img src='images/left-arrow.png'>","<img src='images/right-arrow.png'>"],
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


function Dodatne_usluge (value) {
    var i;
	  var window_width = window.innerWidth;
    for (i = 1; i < 11; i++) {
        if ( window_width > 779) {
					if (i == value) {
            document.getElementById(i+'1').style.opacity = '1';
            document.getElementById(i).style.color = '#1eacc7';
            // console.log('nova', i);
            
					} else {
							document.getElementById(i+'1').style.opacity = '0';
							document.getElementById(i).style.color = '#aeaeae';
							// console.log('stara', i);
							
					}
				} else {
					if (i == value) {
            document.getElementById(i+'01').style.opacity = '1';
						document.getElementById(i+'01').style.height = 'auto';
						document.getElementById(i+'01').style.marginBottom = '40px';
            document.getElementById(i).style.color = '#1eacc7';
            
					} else {
						document.getElementById(i+'01').style.opacity = '0';
						document.getElementById(i+'01').style.height = '0';
						document.getElementById(i+'01').style.marginBottom = '0px';
						document.getElementById(i).style.color = '#aeaeae';
					}
				}
    }
}
status = false;
function resize(id) {
	status = !status;
	console.log(status, !status);
	
	// console.log(document.getElementById(id))
	if (status) {
		document.getElementById(id).style.position = 'absolute';
		document.getElementById(id).style.width = '200%';
		document.getElementById(id).style.maxHeight = '100%';
		console.log(!status);
		
	} else {
		document.getElementById(id).style.position = 'relative';
		document.getElementById(id).style.width = '100%';
		// document.getElementById(id).style.maxHeight = '100%';
	}
	

}

var lastScrollTop = 0;
var st = $(this).scrollTop();
        $(window).scroll(function(event){
          
          if (window.innerWidth > 1023) {
            if (st<112) { 
							$( ".header" ).css( "top", "0rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0)" ); 
							return }
            if (st > lastScrollTop){
              // downscroll code
							$( ".header" ).css( "top", "-7rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0.8)" );
            } else {
              // upscroll code
							$( ".header" ).css( "top", "0rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0.8)" );
            }
          }
          if (window.innerWidth < 1023) {
            if (st<75) { 
							$( ".header" ).css( "top", "0rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0)" ); 
							return }
            if (st > lastScrollTop){
              // downscroll code
							$( ".header" ).css( "top", "-5rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0.8)" );
            } else {
              // upscroll code
							$( ".header" ).css( "top", "0rem" );
							$( ".header" ).css( "background-color", "rgba(17,17,17,0.8)" );
            }
          }
          lastScrollTop = st;
				});
var open = false;
function OpenClose(){
	// var st = $(this).scrollTop();
	if (open === true) {
		open = false;
		$( ".ham" ).css( "right", "-20rem" );
		$( "body" ).css( "overflow", "auto" );
		if (st<75) {
			$( ".header" ).css( "background-color", "rgba(17,17,17,0)" );
		} else {
			$( ".header" ).css( "background-color", "rgba(17,17,17,0.8)" );
		}
	} else {
		open = true;
		$( ".ham" ).css( "right", "0rem" );
		$( ".header" ).css( "background-color", "rgba(17,17,17,0.9)" );
		$( "body" ).css( "overflow", "hidden" );
	}
}