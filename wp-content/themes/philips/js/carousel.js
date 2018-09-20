var owl = $('#owl-carousel');
owl.owlCarousel({
    items:2,
    transitionStyle: true,
    slideSpeed: 5000,
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [979,2]  
}); 

var owl = $('#owl-carousel1');
owl.owlCarousel({
    items:2,
    slideSpeed: 5000,
    transitionStyle: true,
    rtl: true,
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [979,2]
});