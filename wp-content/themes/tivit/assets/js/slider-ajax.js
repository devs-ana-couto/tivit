var sliderCategoria = document.querySelector(".slider-categoria");

if (sliderCategoria !== null) {
    buscaDados();
}

function defineAtivo(menu) {
    var menuCat = document.querySelector(".menu-categoria");
    var navLink = menuCat.querySelectorAll(".nav-link");
    navLink.forEach(function (iteMenu) {
        if (iteMenu.classList.contains("active")
            || iteMenu.getAttribute("id") !== menu) {
            iteMenu.classList.remove("active");
        } else if (iteMenu.getAttribute("id") === menu) {
            iteMenu.classList.add("active");
            buscaDados();
        }
    });
}
function fadeIn(){

}
function fadeOut(){

}
function buscaDados() {
    var menuCat = document.querySelector(".menu-categoria");
    var navLink = menuCat.querySelector(".nav-link.active");

    var categoryOnly = navLink.getAttribute("id");
    var xhr = new XMLHttpRequest;

    var sliderCategoria = document.querySelector("#slider-categoria");
    var carouselInner = sliderCategoria.querySelector(".carousel-inner");

    if(carouselInner !== null){
        sliderCategoria.removeChild(carouselInner);
        criaCarousel();
    }else{
        criaCarousel();
    }


    xhr.open("GET", "http://tivit.local/wp-content/uploads/2022/01/json/arquivos.json");
    xhr.addEventListener("load", function () {
        if (xhr.status === 200) {
            var response = xhr.responseText;
            var dados = JSON.parse(response);

            var indexDados = 0;
            dados.forEach(function (dado) {
                if (dado.category === categoryOnly && indexDados <= 3) {
                    montaSlider(dado, indexDados);
                    indexDados++;
                }else if(dado.category === categoryOnly && indexDados >= 4){

                }
            });
        }
    });
    xhr.send();
}
function criaCarousel(){
    var sliderCategoria = document.querySelector("#slider-categoria");
    var carouselInner = document.createElement("div");
    carouselInner.classList.add("carousel-inner", "fadein");
    sliderCategoria.appendChild(carouselInner);
}
function montaSlider(dados, index) {
    var sliderCategoria = document.querySelector("#slider-categoria");
    var carouselInner = sliderCategoria.querySelector(".carousel-inner");

    var carouselItem = document.createElement("div");
    carouselItem.classList.add("carousel-item");
    if(index === 0){
        carouselItem.classList.add("active");
    }

    var rowMask = document.createElement("div");
    rowMask.classList.add("row", "justify-content-end", "d-none", "d-lg-flex");

    var vmask = document.createElement("div");
    vmask.classList.add("col-auto", "position-absolute", "h-100",
        "v-mask", "d-flex", "justify-content-end");
    rowMask.appendChild(vmask);

    var mask = document.createElement("img");
    mask.setAttribute("src", "/wp-content/themes/tivit/assets/images/modulos/categoria-slider/mask-slider.svg");
    mask.classList.add("w-100")
    mask.classList.add("img-fluid")
    vmask.appendChild(mask);

    var rowContent = document.createElement("div");
    rowContent.classList.add("row", "gx-0", "h-100", "justify-content-between");

    var boxInfos = document.createElement("div");
    boxInfos.classList.add("col-12", "col-lg-4", "box-infos", "p-4", "p-lg-5");
    rowContent.appendChild(boxInfos);

    var caseInfos = document.createElement("div");
    caseInfos.classList.add("container", "h-100", "case-infos", "d-flex", "align-items-end");
    boxInfos.appendChild(caseInfos);

    var rowCases = document.createElement("div");
    rowCases.classList.add("row", "justify-content-start", "align-items-end");
    caseInfos.appendChild(rowCases);

    var nameAction = document.createElement("div");
    nameAction.classList.add("col-12", "n-acao");
    nameAction.innerHTML = "<p>Nome da Ação: <strong>" + dados.action + "</strong></p>";
    rowCases.appendChild(nameAction);

    var boxTitle = document.createElement("div");
    boxTitle.innerHTML = '<h3 class="title-text">'+ dados.title +'</h3>';
    boxTitle.classList.add("col-12", "title");
    rowCases.appendChild(boxTitle);

    var boxDesc = document.createElement("div");
    boxDesc.innerHTML = "<p>"+ dados.desc +"</p>"
    boxDesc.classList.add("col-12", "box-desc");
    rowCases.appendChild(boxDesc);

    var boxTags = document.createElement("div");
    boxTags.classList.add("col-auto", "box-tags", "mt-2", "mt-lg-4");
    rowCases.appendChild(boxTags);

    var ulTags = document.createElement("ul");
    ulTags.classList.add("list-group", "list-group-horizontal");
    ulTags.innerHTML = ' <li class="list-group-item">'+ dados.tag +'</li>';
    boxTags.appendChild(ulTags);

    var boxTimeSlide = document.createElement("div");
    boxTimeSlide.classList.add("col-auto", "box-time-slide", "mt-2", "mt-lg-4");
    boxTimeSlide.innerHTML = '<p>'+ dados.readtime +' de leitura</p>';
    rowCases.appendChild(boxTimeSlide);

    var boxCta = document.createElement("div");
    boxCta.classList.add("col-12", "box-link", "mt-2", "mt-lg-4");
    boxCta.innerHTML =' <a href="'+ dados.link +'">VER AÇÃO</a>';
    rowCases.appendChild(boxCta);

    var boxImg = document.createElement("div");
    boxImg.classList.add("col-12", "col-lg-8", "box-img");
    boxImg.innerHTML = '<img src="'+ dados.img +'" class="d-block w-100" alt="'+ dados.title +'">';
    rowContent.appendChild(boxImg);


    carouselItem.appendChild(rowMask);
    carouselItem.appendChild(rowContent);

    carouselInner.appendChild(carouselItem);

}


