var $ = jQuery;
$('.slider-parceiros').owlCarousel({
    loop: false,
    margin:50,
    //nav:true,
    //autoWidth: true,
    stagePadding: Number,
    responsive:{
        0:{
            items:2,
            margin:20,
            autoWidth: true,
            dots: false
        },
        1000:{
            items:4
        }
    }
});
$('.slider-cliente').owlCarousel({
    loop: false,
    margin:65,
    //nav:true,
    //autoWidth: true,
    //stagePadding: Number,
    responsive:{
        0:{
            items:2,
            margin:20,
            autoWidth: true,
            dots: false,
            stagePadding: 50,
        },
        1000:{
            items:6,
        }
    }
})