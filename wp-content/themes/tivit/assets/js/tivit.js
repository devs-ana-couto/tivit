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
const add_class_on_scroll_tbanks = () => header.classList.add("on-scroll-tbanks")
// Add class mobile
const add_class_page_tbanks = () => header_logo.classList.add("on-scroll-mobile-tbanks")
// Change search icon color
const change_icon_hamburguer_color_tbanks = () => header_ico_hamburguer.style['background-image'] = 'url(https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/hamburguer_purple.svg)'
// Change hamburguer icon color
const change_icon_search_color_tbanks = () => header_ico_search.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/search-purple.svg');
// Remove class on scroll
const remove_class_on_scroll_tbanks = () => header.classList.remove("on-scroll-tbanks")
// Change logo on scroll desktop
const change_logo_on_scroll_desktop = () => header_logo_desktop.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/logo-red.png');
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
const change_icon_hamburguer_color_tdx = () => header_ico_hamburguer.style['background-image'] = 'url(https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/hamburguer-orange.svg)'
// Change hamburguer icon color
const change_icon_search_color_tdx = () => header_ico_search.setAttribute('src', 'https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/icons/nav/search-orange.svg');
// Remove class on scroll
const remove_class_on_scroll_tdx = () => header.classList.remove("on-scroll-tdx")

// Check if is mobile and page is tbanks or tdx
if (window.innerWidth <= 768 && window.location.pathname === "/staged/tivit/tbanks/") {
   add_class_page_tbanks();
   change_icon_search_color_tbanks();
   change_icon_hamburguer_color_tbanks();
}else if(window.innerWidth <= 768 && window.location.pathname === "/staged/tivit/tdx/"){
   add_class_page_tdx();
   change_icon_search_color_tdx();
   change_icon_hamburguer_color_tdx();
}

// Executes after DOM loads
jQuery(document).ready(function($) {
   // Slider home counter
   var totalItems = $('.heroslide').length;
   var currentIndex = $('.heroslide.active').index() + 1;

   // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
   $('.numactive').html( currentIndex );
   $('.numseparation').html('  /  ');
   $('.numtotal').html( totalItems );

   $('#hero').carousel({
      interval: 4000
    });

   $('#hero').bind('slid.bs.carousel', function() {
      currentIndex = $('.heroslide.active').index() + 1;
      // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
      $('.numactive').html( currentIndex );
      $('.numseparation').html('  /  ');
      $('.numtotal').html( totalItems );
   });

   // Permite 2 carrossel na mesma página
   var totalItems2 = $('.heroslide2').length;
   var currentIndex2 = $('.heroslide2.active').index() + 1;

   // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
   $('.numactive2').html( currentIndex2 );
   $('.numseparation2').html('  /  ');
   $('.numtotal2').html( totalItems2 );

   $('#esg').carousel({
      interval: 4000
    });

   $('#esg').bind('slid.bs.carousel', function() {
      currentIndex2 = $('.heroslide2.active').index() + 1;
      // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
      $('.numactive2').html( currentIndex2 );
      $('.numseparation2').html('  /  ');
      $('.numtotal2').html( totalItems2 );
   });

   // Slider Inovação counter
   var totalItemsInovacao = $('.heroinovacao').length;
   var currentIndexInovacao = $('.heroinovacao.active').index() + 1;

   $('.numactiveinovacao').html( currentIndexInovacao );
   $('.numseparationinovacao').html('  /  ');
   $('.numtotalinovacao').html( totalItemsInovacao );

   $('#recipeCarousel').carousel({
      interval: 4000
    });

   $('#recipeCarousel').bind('slid.bs.carousel', function() {
      currentIndexInovacao = $('.heroinovacao.active').index() + 1;
      $('.numactiveinovacao').html( currentIndexInovacao );
      $('.numseparationinovacao').html('  /  ');
      $('.numtotalinovacao').html( totalItemsInovacao );
   });

   // Slider inovacao Labs counter
   var totalItems3 = $('.heroslide3').length;
   var currentIndex3 = $('.heroslide3.active').index() + 1;

   // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
   $('.numactive3').html( currentIndex3 );
   $('.numseparation3').html('  /  ');
   $('.numtota3l').html( totalItems3 );

   $('#labs').bind('slid.bs.carousel', function() {
      currentIndex3 = $('.heroslide3.active').index() + 1;
      // $('.numactive').html('' + currentIndex + '/' + totalItems + '');
      $('.numactive3').html( currentIndex3 );
      $('.numseparation3').html('  /  ');
      $('.numtotal3').html( totalItems3 );
   });
   
   

})

// JS executes after DOM loads
document.addEventListener("DOMContentLoaded", function(){
   var items = document.querySelectorAll('.txt > a > p')

   for(i=0; i < items.length; i++){
      items[i].addEventListener("mouseover", test, false);
   }

   function test(event){
      cleanHover();
      try{
         event.path[0].innerHTML === 'Meios de pagamento'? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner1.jpg) no-repeat top center;') : ''
      } catch(err){}
      try{
         event.path[0].innerHTML === 'Serviços financeiros'? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner2.jpg) no-repeat top center;') : ''
      } catch(err){}
      try{
         event.path[0].innerHTML === 'Manufatura'? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner3.jpg) no-repeat top center;') : ''
      } catch(err){}
      try{
         event.path[0].innerHTML === 'Utilities'? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner4.jpg) no-repeat top center;') : ''
      } catch(err){}
      try{
         event.path[0].innerHTML === 'Varejo'? document.querySelector('.home-portifolio-image').setAttribute('style', 'background:url(/staged/tivit/wp-content/themes/tivit/assets/images/home/img_banner4.jpg) no-repeat top center;') : ''
      } catch(err){}
   }
   
   function cleanHover(){
      for (let i = 0; i <= 0; i++) {
         items[i].classList.contains('active')? items[i].classList.remove('active') : ''
      }
  }

   if(window.location.pathname === '/staged/tivit/inovacao' || window.location.pathname === '/staged/tivit/inovacao/'){
      let items = document.querySelectorAll('.carousel .heroinovacao')
      items.forEach((el) => {
         const minPerSlide = 4
         let next = el.nextElementSibling
         for (var i=1; i<minPerSlide; i++) {
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
});

// Add class on scroll
window.addEventListener('scroll', function() {
  scrollpos = window.scrollY;

   if(window.location.pathname === '/staged/tivit' || window.location.pathname === '/staged/tivit/'){
      //transition vars
      var offsetsIntro = document.querySelector('.transition').getBoundingClientRect();
      var offsetsPortifolio = document.querySelector('.home-portifolio').getBoundingClientRect();
      var offsetsContent = document.querySelector('.home-content').getBoundingClientRect();
      var offsetsCases = document.querySelector('.home-cases').getBoundingClientRect();
      var offsetsPessoas = document.querySelector('.pessoasCarreiras').getBoundingClientRect();
      var offsetsPartners = document.querySelector('.partners').getBoundingClientRect();

      //Effect Intro
      if(scrollpos > offsetsIntro.top + -300){
      document.querySelector('.imgtransition').classList.add('active')
      document.querySelector('.home-intro').classList.add('active')
      document.querySelector('.pcustom').classList.add('active')
      } else {
      // document.querySelector('.imgtransition').classList.remove('active')
      // document.querySelector('.home-intro').classList.remove('active')
      // document.querySelector('.pcustom').classList.remove('active')
      }

      //Effect portifolio
      if(scrollpos > offsetsPortifolio.top + 350){
      document.querySelector('.home-portifolio').classList.add('active')
      document.querySelector('.bgport').classList.add('active')
      } else {
      // document.querySelector('.home-portifolio').classList.remove('active')
      // document.querySelector('.bgport').classList.remove('active')
      }

      //Effect Content
      if(scrollpos > offsetsContent.top + 1250){
      document.querySelector('.home-content').classList.add('active')
      document.querySelector('.transitionContent').classList.add('active')
      document.querySelector('.transitionCases').classList.add('active')
      } else {
      // document.querySelector('.home-content').classList.remove('active')
      // document.querySelector('.transitionContent').classList.remove('active')
      // document.querySelector('.transitionCases').classList.remove('active')
      }

      //Effect Cases
      if(scrollpos > offsetsCases.top + 1950){
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
      if(scrollpos > offsetsPessoas.top + 3050){
      document.querySelector('.home-pessoas-e-carreiras').classList.add('active')
      document.querySelector('.pessoasCarreiras').classList.add('active')
      document.querySelector('.transCarreiras').classList.add('deactive')
      } else {
      // document.querySelector('.home-pessoas-e-carreiras').classList.remove('active')
      // document.querySelector('.pessoasCarreiras').classList.remove('active')
      // document.querySelector('.transCarreiras').classList.remove('deactive')
      }

      //Effect Partners
      if(scrollpos > offsetsPartners.top + 3460){
      document.querySelector('.partners').classList.add('active')
      // document.querySelector('.pessoasCarreiras > #triangle-down').classList.add('active')
      } else {
      // document.querySelector('.partners').classList.remove('active')
      // document.querySelector('.pessoasCarreiras > #triangle-down').classList.remove('active')
      }
   }

   if (scrollpos >= header_height && window.location.pathname === "/staged/tivit/tbanks/") { 
      add_class_on_scroll_tbanks();
   } else if(scrollpos >= header_height && window.location.pathname === "/staged/tivit/tdx/"){
      add_class_on_scroll_tdx();
   }
   else if(scrollpos >= header_height && window.location.pathname != "/staged/tivit/" || scrollpos >= header_height && window.location.pathname != "/staged/tdx/"){
      add_class_on_scroll_global();
   }
   else {
      remove_class_on_scroll_tbanks();
      remove_class_on_scroll_tdx();
      remove_class_on_scroll_global();
   }



   if(scrollpos >= header_height && window.innerWidth > 768 && window.location.pathname === "/staged/tivit/tbanks/" || window.location.pathname === "/staged/tivit/tdx/")
      change_logo_on_scroll_desktop();
   else{
      change_logo_on_scroll_desktop_original();
   }
})

