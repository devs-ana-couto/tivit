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

const header_height = header.offsetHeight
// Add class on scroll
const add_class_on_scroll_tbanks = () => header.classList.add("on-scroll-global")
// Add class mobile
const add_class_page_tbanks = () => header_logo.classList.add("on-scroll-mobile-tbanks")
// Change search icon color
const change_icon_hamburguer_color_tbanks = () => header_ico_hamburguer.style['background-image'] = 'url(https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/hamburguer-white.svg)'
// Change hamburguer icon color
const change_icon_search_color_tbanks = () => header_ico_search.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/search-white.svg');
// Remove class on scroll
const remove_class_on_scroll_tbanks = () => header.classList.remove("on-scroll-tbanks")
// Change logo on scroll desktop
const change_logo_on_scroll_desktop = () => header_logo_desktop.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/logo.svg');
const change_logo_on_scroll_desktop_original = () => header_logo_desktop.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/logo.svg');

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
const change_icon_hamburguer_color_tdx = () => header_ico_hamburguer.style['background-image'] = 'url(https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/hamburguer-white.svg)'
// Change hamburguer icon color
const change_icon_search_color_tdx = () => header_ico_search.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/search-white.svg');
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

// Add class on scroll
window.addEventListener('scroll', function () {
    scrollpos = window.scrollY;

    if (window.location.pathname === '/staged/tivit' || window.location.pathname === '/staged/tivit/' ||
    window.location.pathname === '/' || window.location.pathname === '/home') {
        //transition vars
        var offsetsIntro = document.querySelector('.transition').getBoundingClientRect();
        var offsetsPortifolio = document.querySelector('.home-portifolio').getBoundingClientRect();
        var offsetsContent = document.querySelector('.home-content').getBoundingClientRect();
        var offsetsCases = document.querySelector('.home-cases').getBoundingClientRect();
        var offsetsPessoas = document.querySelector('.pessoasCarreiras').getBoundingClientRect();
        var offsetsPartners = document.querySelector('.partners').getBoundingClientRect();

        //Effect Intro
        if (scrollpos > offsetsIntro.top + -300) {
            document.querySelector('.imgtransition').classList.add('active')
            document.querySelector('.home-intro').classList.add('active')
            document.querySelector('.pcustom').classList.add('active')
        } else {
            // document.querySelector('.imgtransition').classList.remove('active')
            // document.querySelector('.home-intro').classList.remove('active')
            // document.querySelector('.pcustom').classList.remove('active')
        }

        //Effect portifolio
        if (scrollpos > offsetsPortifolio.top + 350) {
            document.querySelector('.home-portifolio').classList.add('active')
            document.querySelector('.bgport').classList.add('active')
        } else {
            // document.querySelector('.home-portifolio').classList.remove('active')
            // document.querySelector('.bgport').classList.remove('active')
        }

        //Effect Content
        if (scrollpos > offsetsContent.top + 1250) {
            document.querySelector('.home-content').classList.add('active')
            document.querySelector('.transitionContent').classList.add('active')
            document.querySelector('.transitionCases').classList.add('active')
        } else {
            // document.querySelector('.home-content').classList.remove('active')
            // document.querySelector('.transitionContent').classList.remove('active')
            // document.querySelector('.transitionCases').classList.remove('active')
        }

        //Effect Cases
        if (scrollpos > offsetsCases.top + 1950) {
            document.querySelector('.transitionCases').classList.add('deactive')
            document.querySelector('.home-cases').classList.add('active')
            document.querySelector('.divOpacity').classList.add('active')
            document.querySelector('.bgtriangulo').classList.add('active')
            document.querySelector('.transCarreiras').classList.add('active')
        } else {
            // document.querySelector('.transitionCases').classList.remove('deactive')
            // document.querySelector('.home-cases').classList.remove('active')
            // document.querySelector('.divOpacity').classList.remove('active')
            // document.querySelector('.bgtriangulo').classList.remove('active')
            // document.querySelector('.transCarreiras').classList.remove('active')
        }

        //Effect Pessoas e Carreiras
        if (scrollpos > offsetsPessoas.top + 3050) {
            document.querySelector('.home-pessoas-e-carreiras').classList.add('active')
            document.querySelector('.pessoasCarreiras').classList.add('active')
            document.querySelector('.transCarreiras').classList.add('deactive')
        } else {
            // document.querySelector('.home-pessoas-e-carreiras').classList.remove('active')
            // document.querySelector('.pessoasCarreiras').classList.remove('active')
            // document.querySelector('.transCarreiras').classList.remove('deactive')
        }

        //Effect Partners
        if (scrollpos > offsetsPartners.top + 3460) {
            document.querySelector('.partners').classList.add('active')
            // document.querySelector('.pessoasCarreiras > #triangle-down').classList.add('active')
        } else {
            // document.querySelector('.partners').classList.remove('active')
            // document.querySelector('.pessoasCarreiras > #triangle-down').classList.remove('active')
        }
    }

    if (scrollpos >= header_height && window.location.pathname === "/staged/tivit/tbanks/") {
        add_class_on_scroll_tbanks();
    } else if (scrollpos >= header_height && window.location.pathname === "/staged/tivit/tdx/") {
        add_class_on_scroll_tdx();
    } else if (scrollpos >= header_height && window.location.pathname != "/staged/tivit/" || scrollpos >= header_height && window.location.pathname != "/staged/tdx/") {
        add_class_on_scroll_global();
    } else {
        remove_class_on_scroll_tbanks();
        remove_class_on_scroll_tdx();
        remove_class_on_scroll_global();
    }


    if (scrollpos >= header_height && window.innerWidth > 768 && window.location.pathname === "/staged/tivit/tbanks/" || window.location.pathname === "/staged/tivit/tdx/")
        change_logo_on_scroll_desktop();
    else {
        change_logo_on_scroll_desktop_original();
    }
})

//Function on Solutions Menu
window.addEventListener("DOMContentLoaded", function () {
    document.getElementById('solutions').addEventListener('click', function () {
        document.querySelector('.solution-menu').classList.contains('solution-menu-open') ?
            document.querySelector('.solution-menu').classList.remove('solution-menu-open')
            :
            document.querySelector('.solution-menu').classList.add('solution-menu-open')

        //Red background on menu
        document.querySelector('.navbar-expand-md').classList.contains('navbar-expand-md-red') ?
            document.querySelector('.navbar-expand-md').classList.remove('navbar-expand-md-red')
            :
            document.querySelector('.navbar-expand-md').classList.add('navbar-expand-md-red')

        //Do not allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')

        //rotate menu arrow
        document.getElementById('solutions').classList.contains('rotate180') ?
            document.getElementById('solutions').classList.remove('rotate180')
            :
            document.getElementById('solutions').classList.add('rotate180')
    }, false);

    //Open services and Products mobile
    document.getElementById('service-product').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile').classList.add('solutions-service-mobile-open')

        //Do not allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Close open services and procuts mobile
    document.querySelector('.solutions-service-mobile > .container > .intro > h2').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile').classList.add('solutions-service-mobile-open')

        //Allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Open Industry mobile
    document.getElementById('industry').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile-cards.por-industria').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-industria').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile-cards.por-industria').classList.add('solutions-service-mobile-open')

        //Do not allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Close industry mobile
    document.querySelector('.solutions-service-mobile-cards.por-industria > .container > .intro > h2').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile-cards.por-industria').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-industria').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile-cards.por-industria').classList.add('solutions-service-mobile-open')

        //Allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Open Challenge mobile
    document.getElementById('challenge').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.add('solutions-service-mobile-open')

        //Do not allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Close Challenge mobile
    document.querySelector('.solutions-service-mobile-cards.por-desafios > .container > .intro > h2').addEventListener('click', function () {
        document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.remove('solutions-service-mobile-open')
            :
            document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.add('solutions-service-mobile-open')

        //Allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            document.body.classList.add('nomove')
    }, false);

    //Close everything on main menu closed click
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        //Services and products
        document.querySelector('.solutions-service-mobile').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile').classList.remove('solutions-service-mobile-open')
            :
            ''

        //Industry
        document.querySelector('.solutions-service-mobile-cards.por-industria').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-industria').classList.remove('solutions-service-mobile-open')
            :
            ''

        //Challenge
        document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.contains('solutions-service-mobile-open') ?
            document.querySelector('.solutions-service-mobile-cards.por-desafios').classList.remove('solutions-service-mobile-open')
            :
            ''

        //Allow overflow on body
        document.body.classList.contains('nomove') ?
            document.body.classList.remove('nomove')
            :
            ''

    }, false);
}, false);

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