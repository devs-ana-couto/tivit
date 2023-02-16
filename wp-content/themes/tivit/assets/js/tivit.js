/*
 ** JS Effects
 */

let scrollpos = window.scrollY
const header = document.querySelector(".navbar")
const header_logo = document.querySelector(".header-logo")

/*
 ** Page Tbanks
 */

const header_ico_search = document.querySelector(".search-ico")
const header_ico_hamburguer = document.querySelector(".navbar-toggler-icon")
const header_logo_desktop = document.querySelector(".logo-brand")

//const header_height = header.offsetHeight
// Add class on scroll
const add_class_on_scroll_tbanks = () => header.classList.add("on-scroll-global")
// Add class mobile
const add_class_page_tbanks = () => header_logo.classList.add("on-scroll-mobile-tbanks")
// Change search icon color
const change_icon_hamburguer_color_tbanks = () => header_ico_hamburguer.style['background-image'] = 'url(' + jQuery('#change_icon_hamburguer_color_tbanks').val() + ')'
// Change hamburguer icon color
const change_icon_search_color_tbanks = () => header_ico_search.setAttribute('src', jQuery('#change_icon_search_color_tbanks').val());
// Remove class on scroll
const remove_class_on_scroll_tbanks = () => header.classList.remove("on-scroll-tbanks")
// Change logo on scroll desktop
const change_logo_on_scroll_desktop = () => header_logo_desktop.setAttribute('src', jQuery('#change_logo_on_scroll_desktop').val());
const change_logo_on_scroll_desktop_original = () => header_logo_desktop.setAttribute('src', jQuery('#change_logo_on_scroll_desktop_original').val());

/*
 ** Global
 */

// Add class on scrill global
const add_class_on_scroll_global = () => header.classList.add("on-scroll-global")
// Remove class on scroll
const remove_class_on_scroll_global = () => header.classList.remove("on-scroll-global")


/*
 ** Page Tdx
 */

// Add class on scroll Tdx
const add_class_on_scroll_tdx = () => header.classList.add("on-scroll-tdx")
// Add class mobile
const add_class_page_tdx = () => header_logo.classList.add("on-scroll-mobile-tdx")
// Change search icon color
const change_icon_hamburguer_color_tdx = () => header_ico_hamburguer.style['background-image'] = 'url(' + jQuery('#change_icon_hamburguer_color_tdx').val() + ')'
// Change hamburguer icon color
const change_icon_search_color_tdx = () => header_ico_search.setAttribute('src', jQuery('#change_icon_search_color_tdx').val());
// Remove class on scroll
const remove_class_on_scroll_tdx = () => header.classList.remove("on-scroll-tdx")

// Check if is mobile and page is tbanks or tdx
if (window.innerWidth <= 768 && window.location.pathname === "/staged/tivit/tbanks/") {
    add_class_page_tbanks();
    change_icon_search_color_tbanks();
    change_icon_hamburguer_color_tbanks();
} else if (window.innerWidth <= 768 && window.location.pathname === "/staged/tivit/tdx/") {
    add_class_page_tdx();
    change_icon_search_color_tdx();
    change_icon_hamburguer_color_tdx();
}

// Executes after DOM loads
jQuery(document).ready(function ($) {

    $('.dropdown-toggle').removeClass('dropdown-toggle');
    // Slider home counter
    var totalItems = $('.heroslide').length;
    var currentIndex = $('.heroslide.active').index() + 1;

    // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
    $('.numactive').html(currentIndex);
    $('.numseparation').html('  /  ');
    $('.numtotal').html(totalItems);

    $('#hero').carousel({
        //interval: false
    });

    $('#hero').bind('slid.bs.carousel', function () {
        currentIndex = $('.heroslide.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive').html(currentIndex);
        $('.numseparation').html('  /  ');
        $('.numtotal').html(totalItems);
    });

    $('#cases').bind('slid.bs.carousel', function () {
        currentIndex = $('.heroslide.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive').html(currentIndex);
        $('.numseparation').html('  /  ');
        $('.numtotal').html(totalItems);
    });

    $('#carouselProjetos').bind('slid.bs.carousel', function () {
        currentIndex = $('.heroslide.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive').html(currentIndex);
        $('.numseparation').html('  /  ');
        $('.numtotal').html(totalItems);
    });

    // Permite 2 carrossel na mesma página
    var totalItems2 = $('.heroslide2').length;
    var currentIndex2 = $('.heroslide2.active').index() + 1;

    // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
    $('.numactive2').html(currentIndex2);
    $('.numseparation2').html('  /  ');
    $('.numtotal2').html(totalItems2);

    $('#esg').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#esgTivit').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#labs').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#customerCarousel').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#recipeCarouselInterno').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#recipeCarouselTimeLine').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    $('#cultureCarousel').bind('slid.bs.carousel', function () {
        currentIndex2 = $('.heroslide2.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive2').html(currentIndex2);
        $('.numseparation2').html('  /  ');
        $('.numtotal2').html(totalItems2);
    });

    // Permite 3 carrosseis na mesma página
    var totalItems3 = $('.heroslide3').length;
    var currentIndex3 = $('.heroslide3.active').index() + 1;

    // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
    $('.numactive3').html(currentIndex3);
    $('.numseparation3').html('  /  ');
    $('.numtotal3').html(totalItems3);

    $('#recipeCarousel').bind('slid.bs.carousel', function () {
        currentIndex3 = $('.heroslide3.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive3').html(currentIndex3);
        $('.numseparation3').html('  /  ');
        $('.numtotal3').html(totalItems3);
    });

    $('#ativitCustomerCarousel').bind('slid.bs.carousel', function () {
        currentIndex3 = $('.heroslide3.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive3').html(currentIndex3);
        $('.numseparation3').html('  /  ');
        $('.numtotal3').html(totalItems3);
    });

    $('#customerCarouselHome').bind('slid.bs.carousel', function () {
        currentIndex3 = $('.heroslide3.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive3').html(currentIndex3);
        $('.numseparation3').html('  /  ');
        $('.numtotal3').html(totalItems3);
    });

    $('#serviceMobileCarousel').bind('slid.bs.carousel', function () {
        currentIndex3 = $('.heroslide3.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive3').html(currentIndex3);
        $('.numseparation3').html('  /  ');
        $('.numtotal3').html(totalItems3);
    });

    // Permite 4 carrosseis na mesma página
    var totalItems4 = $('.heroslide4').length;
    var currentIndex4 = $('.heroslide4.active').index() + 1;

    // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
    $('.numactive4').html(currentIndex4);
    $('.numseparation4').html('  /  ');
    $('.numtotal4').html(totalItems4);


    $('#recipeCarousel2').bind('slid.bs.carousel', function () {
        currentIndex4 = $('.heroslide4.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive4').html(currentIndex4);
        $('.numseparation4').html('  /  ');
        $('.numtotal4').html(totalItems4);
    });

    $('#paymentMobileCarousel').bind('slid.bs.carousel', function () {
        currentIndex4 = $('.heroslide4.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive4').html(currentIndex4);
        $('.numseparation4').html('  /  ');
        $('.numtotal4').html(totalItems4);
    });

    $('#valuesMobileCarousel').bind('slid.bs.carousel', function () {
        currentIndex4 = $('.heroslide4.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive4').html(currentIndex4);
        $('.numseparation4').html('  /  ');
        $('.numtotal4').html(totalItems4);
    });

    $('#esgTivit.a-tivit').bind('slid.bs.carousel', function () {
        currentIndex4 = $('.heroslide4.active').index() + 1;
        // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
        $('.numactive4').html(currentIndex4);
        $('.numseparation4').html('  /  ');
        $('.numtotal4').html(totalItems4);
    });


    //Carousel slick
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true
    });

})

// JS executes after DOM loads
document.addEventListener("DOMContentLoaded", function () {
    var items = document.querySelectorAll('.txt > a > p')

    for (i = 0; i < items.length; i++) {
        items[i].addEventListener("mouseover", test, false);
    }

    function test(event) {
        cleanHover();
        try {
            event.path[0].innerHTML === 'Meios de pagamento' ? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner1.jpg) no-repeat top center;') : ''
        } catch (err) {
        }
        try {
            event.path[0].innerHTML === 'Serviços financeiros' ? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner2.jpg) no-repeat top center;') : ''
        } catch (err) {
        }
        try {
            event.path[0].innerHTML === 'Manufatura' ? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner3.jpg) no-repeat top center;') : ''
        } catch (err) {
        }
        try {
            event.path[0].innerHTML === 'Utilities' ? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner4.jpg) no-repeat top center;') : ''
        } catch (err) {
        }
        try {
            event.path[0].innerHTML === 'Varejo' ? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner4.jpg) no-repeat top center;') : ''
        } catch (err) {
        }
    }

    function cleanHover() {
        for (let i = 0; i <= 0; i++) {
            items[i].classList.contains('active') ? items[i].classList.remove('active') : ''
        }
    }

    if (window.location.pathname === '/staged/tivit/inovacao' || window.location.pathname === '/staged/tivit/inovacao/') {
        let items = document.querySelectorAll('.carousel .heroslide')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide3')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .heroslide4')
        items3.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/a-tivit' || window.location.pathname === '/staged/tivit/a-tivit/') {
        let items = document.querySelectorAll('.carousel .heroslide4')
        items.forEach((el) => {
            const minPerSlide = 1
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide2')
        items2.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .heroslide3')
        items3.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/tbanks' || window.location.pathname === '/staged/tivit/tbanks/') {
        let items = document.querySelectorAll('.carousel .customers')

        items.forEach((el) => {
            const minPerSlide = 6
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .services')

        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .payment')

        items3.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/tdx' || window.location.pathname === '/staged/tivit/tdx/') {
        let items = document.querySelectorAll('.carousel .customers')

        items.forEach((el) => {
            const minPerSlide = 6
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .values')

        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .content')

        items3.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/esg' || window.location.pathname === '/staged/tivit/esg/') {
        let items = document.querySelectorAll('.carousel .heroslide2')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/ventures' || window.location.pathname === '/staged/tivit/ventures/') {
        let items = document.querySelectorAll('.carousel .heroslide3')
        items.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide4')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .heroslide2')
        items3.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/solucoes-ativas' || window.location.pathname === '/staged/tivit/solucoes-ativas/') {
        let items = document.querySelectorAll('.carousel .heroslide4')
        items.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/tivit-labs' || window.location.pathname === '/staged/tivit/tivit-labs/') {
        let items = document.querySelectorAll('.carousel .heroslide')
        items.forEach((el) => {
            const minPerSlide = 1
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide2')
        items2.forEach((el) => {
            const minPerSlide = 6
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .heroslide3')
        items3.forEach((el) => {
            const minPerSlide = 6
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/solucoes' || window.location.pathname === '/staged/tivit/solucoes/') {
        let items = document.querySelectorAll('.carousel .heroslide')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide2')
        items2.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit/pessoas-e-carreiras' || window.location.pathname === '/staged/tivit/pessoas-e-carreiras/') {
        let items = document.querySelectorAll('.carousel .heroslide2')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide4')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items3 = document.querySelectorAll('.carousel .heroslide6')
        items3.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items4 = document.querySelectorAll('.carousel .heroslide5')
        items4.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items4[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    }

    if (window.location.pathname === '/staged/tivit' || window.location.pathname === '/staged/tivit/') {

        let items = document.querySelectorAll('.carousel .heroslide4')
        items.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let items2 = document.querySelectorAll('.carousel .heroslide3')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

    }

});

// Global Sliders
let items = document.querySelectorAll('.carousel .global')
items.forEach((el) => {
    const minPerSlide = 6
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

let items2 = document.querySelectorAll('.carousel .global2')
items2.forEach((el) => {
    const minPerSlide = 6
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items2[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

function abre_barra_pesquisa() {
    jQuery('.barra-pesquisa').css({top: 0});
}

function close_bar_search() {
    jQuery('.barra-pesquisa').css({top: -63});
}

function infosPortfolio(url, index) {
    var boxPortfolio = document.querySelector(".portfolio__box");
    if (boxPortfolio !== null) {
        selecionaMenu(index);

        //limpa o text display
        var textDisplay = document.querySelector(".text-display");
        textDisplay.innerHTML = "";

        paragrafoDinamico(index);
        linkDinamico(index);

    }
}

function selecionaMenu(id) {
    var boxPort = document.querySelector(".portfolio__box");
    var buttons = boxPort.querySelectorAll(".links--a");
    buttons.forEach(function (button, index) {
        if (parseInt(button.getAttribute("id").valueOf()) !== id) {
            button.classList.remove("active");
        } else {
            button.classList.add("active");

            var boxPortfolio = document.querySelector(".portfolio__box");
            var imgId = "#portfolio__img__url-" + index;
            var imgUrl = document.querySelector(imgId).getAttribute("data-img");
            var bgNovo = 'url(' + imgUrl + ')';
            boxPortfolio.style.backgroundImage = bgNovo;
        }
    });
}

function paragrafoDinamico(index) {
    var idDesc = "#portfolio__desc-" + index;
    var textDesc = document.querySelector(idDesc).innerText;

    var textDisplay = document.querySelector(".text-display");

    var paragraph = document.createElement("p");
    paragraph.classList.add("fadein");
    paragraph.innerText = textDesc;
    textDisplay.appendChild(paragraph);


}

function linkDinamico(index) {
    var idLink = "#portfolio__link__url-" + index;
    var textLink = document.querySelector(idLink).innerText;

    var textDisplay = document.querySelector(".text-display");
    if (textLink !== "") {
        var ctaLink = document.createElement("a");
        ctaLink.setAttribute("href", textLink);
        ctaLink.innerText = document.querySelector(`#portfolio__link__text-${index}`).textContent;
        ctaLink.classList.add("fadein");
        textDisplay.appendChild(ctaLink);
    }
}

infosPortfolio(null, 0);

function getBaseUrl() {
    // Nome do host
    let hostName = location.hostname;

    if (hostName === "localhost") {
        // Endereço após o domínio do site
        pathname = window.location.pathname;
        // Separa o pathname com uma barra transformando o resultado em um array
        splitPath = pathname.split('/');

        // Obtém o segundo valor do array, que é o nome da pasta do servidor local
        path = splitPath[1];

        baseUrl = "http://" + hostName + "/" + path;
    } else {
        baseUrl = "http://" + hostName;
    }

    return baseUrl;
}

function imgMobileContent() {
    var headerConteudo = document.querySelector(".header-conteudo");
    var sliders = headerConteudo.querySelectorAll(".carousel-item");

    /*var altura = window.innerHeight
        || document.documentElement.clientHeight
        || document.body.clientHeight;*/
    sliders.forEach((slider, index) => {
            var indexId = slider.getAttribute('id');
            var sliderAtual = document.querySelector(`#${indexId}`);
            var sliderImage = sliderAtual.querySelector(`#imagem-${index}`);
            var getImage = sliderImage.getAttribute("src");
            sliderAtual.style.backgroundImage = `url(${getImage})`;
            console.log(sliderAtual);
        }
    );
}

var headerConteudo = document.querySelector(".header-conteudo");
if (headerConteudo !== null && headerConteudo !== "") {
    imgMobileContent();
}

function cardHoverOn(id) {
    var card = document.getElementById(id);
    var infos = card.querySelector(".infos");

    infos.classList.add("active");
}

function cardHoverLeave(id) {
    var card = document.getElementById(id);
    var infos = card.querySelector(".infos");

    infos.classList.remove("active");
}

window.onscroll = () => {
    var headerNew = jQuery("header.nav-header-new");
    var sticky = jQuery(headerNew).offset();
    var largura = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;
    if (headerNew.hasClass("sticky")) {
        if (60 >= sticky.top) {
            headerNew.removeClass("sticky");
            if (largura <= 1199) {
                headerNew.removeClass("fixed-top");
            } else {
                headerNew.addClass("fixed-top");
            }
        }
    } else {
        if (window.pageYOffset > 60) {
            headerNew.addClass("sticky");
            if (largura <= 1199) {
                headerNew.addClass("fixed-top");
            } else {
                headerNew.addClass("fixed-top");
            }
        }
    }
};

var solutionMenu = document.querySelectorAll('.solution-link-menu');
const modalSolution = new bootstrap.Modal('#open-solution-menu');
const offCanvaSolution = new bootstrap.Offcanvas('#canvaMenuMobile');
solutionMenu.forEach((menu, index) => {

    menu.addEventListener('click', () => {
        var checkSolutionShow = document.querySelector('#open-solution-menu');
        if (!checkSolutionShow.classList.contains('show')) {
            modalSolution.show();
            // jQuery('body').css('padding-right', '0');
            var menuItens = checkSolutionShow.querySelectorAll('.menu-item');
            menuItens.forEach((item, index) => {
                if (item.classList.contains('solution-link-menu')) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        } else {
            modalSolution.hide();
        }
    });
});

function closeAllMenu() {
    modalSolution.hide();
    offCanvaSolution.hide();
    var backdrop = document.querySelector(".offcanvas-backdrop");
    backdrop.classList.remove('show');
}

function redirect_article(url) {
    window.location.href = url;
}

jQuery('.owl-news-cards').owlCarousel({
    loop: false,

    responsive: {
        0: {
            items: 1,
            margin: 20,
            autoWidth: true,
        },
        600: {
            margin: 20,
            items: 2
        },
        992: {
            margin: 30,
            items: 3
        }
    }
});

const itemScroll = document.querySelectorAll('[data-anime]');
itemScroll.forEach((element) => {
    let animeColor = element.getAttribute("data-anime-color");
    element.style.backgroundColor = animeColor;
});
const animeScroll = () => {
    const windowTop = document.documentElement.scrollTop + window.innerHeight * 0.5;
    let headerHome = document.querySelector("#header-home-scroll");
    try {
        let mask = headerHome.querySelectorAll(".carousel-item .mask.mask-desk");
        itemScroll.forEach((element) => {
            if (windowTop >= element.offsetTop) {
                element.classList.add('anime');
                let animetedColor = element.getAttribute("data-animeted-color");
                element.style.backgroundColor = animetedColor;

                if (windowTop > 716) {
                    mask.forEach((element) => {
                        if (element.classList.contains("red")) {
                            element.classList.remove("active");
                        } else if (element.classList.contains("white")) {
                            element.classList.add("active");
                        }
                    });
                }
            }
        });
        if (windowTop < 716) {
            mask.forEach((element) => {
                if (element.classList.contains("red")) {
                    element.classList.add("active");
                } else if (element.classList.contains("white")) {
                    element.classList.remove("active");
                }
            });
        }
    } catch (error) {

    }

};

window.addEventListener('scroll', () => {
    animeScroll();
});