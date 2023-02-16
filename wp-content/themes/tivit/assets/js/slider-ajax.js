var sliderCategoria = document.querySelector(".slider-categoria");
var $ = jQuery;
if (sliderCategoria !== null) {
    buscaDados();
}

function buscaDados() {

    try {
        var menuCat = document.querySelector(".menu-categoria");
        var navLink = menuCat.querySelector(".nav-link.active");

        var categoryOnly = navLink.getAttribute("id");
        // var xhr = new XMLHttpRequest;

        preparaBusca();
        // defineTitle(navLink.getAttribute("id"));

        // xhr.open("GET", "https://www.anacouto.com.br/staged/tivit/wp-content/uploads/2022/01/json/arquivos.json");
        // xhr.addEventListener("load", function () {
        // if (xhr.status === 200) {
        // var response = xhr.responseText;
        // var dados = JSON.parse(response);
        var dados = projeto_json_txt;

        var indexDados = 0;
        var indexArticle = 0;
        var indexRow = 0;
        dados.forEach(function (dado) {
            if (dado.category === categoryOnly && indexDados <= 3) {
                montaSlider(dado, indexDados);
                indexDados++;
            } else if (dado.category === categoryOnly && indexDados > 3) {

                if (indexArticle === 0) {
                    montaCarouselArticle(indexRow);
                    montaArticleSlider(dado, indexRow);
                    montaBullets(indexRow);
                    indexArticle++;
                    indexRow++;
                } else if (indexArticle > 0 && indexArticle < 3) {
                    indexRow -= 1;
                    montaArticleSlider(dado, indexRow);
                    indexRow++;
                    indexArticle++;
                } else if (indexArticle >= 3) {
                    indexArticle = 0;
                }
                indexDados++
            }
        });
        // }
    // });

    // xhr.send();

    } catch (error) {

    }
}

function preparaBusca() {
    var sliderCategoria = document.querySelector("#slider-categoria");
    var carouselInner = sliderCategoria.querySelector(".carousel-inner");

    if (carouselInner !== null) {
        deleteCarousel("slider-categoria");
        deleteCarousel("carousel-articles");
        deleteBullets();
        criaCarousel("slider-categoria");
        criaCarousel("carousel-articles");
    } else {
        criaCarousel("slider-categoria");
        criaCarousel("carousel-articles");
    }

}

function deleteBullets(){
    var carousel = document.getElementById("carousel-articles");
    var controladores = carousel.querySelector(".carousel-indicators");

    controladores.innerHTML = "";

}

function montaBullets(index){
    var carousel = document.getElementById("carousel-articles");
    var controladores = carousel.querySelector(".carousel-indicators");

    var bullet = document.createElement("button");
    bullet.setAttribute("type", "button");
    bullet.setAttribute("data-bs-target", "#carousel-articles");
    bullet.setAttribute("data-bs-slide-to", index);

    if(index == 0){
        bullet.classList.add("active");
        bullet.setAttribute("aria-current", "true");
    }
    controladores.appendChild(bullet);

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

function defineTitle(menuAtivo) {
    var boxArticle = document.querySelector(".box-article-slider")
    var titleArticle = boxArticle.querySelector("#title-articles-slider");

    var title;
    switch (menuAtivo) {
        case 'cultura-responsabilidade' :
            title = "outros projetos culturais e de responsabilidade social"
            break;
        case 'ambientais':
            title = "outros projetos ambientais"
            break;
        case 'diversidade':
            title = "outros projetos de diversidade"
            break;
        case 'capacitacao':
            title = "outros projetos de capacitação"
            break;
        case 'educacao':
            title = "outros projetos de Educação"
            break;
        default:
            title = "Outros Projetos";
            break;
    }
    titleArticle.classList.add("right-to-left");
    titleArticle.classList.remove("right-to-left");
    titleArticle.classList.add("fadein");
    titleArticle.innerHTML = title;
    titleArticle.classList.remove("fadein")

}

function deleteCarousel(idSlider) {
    var sliderCategoria = document.getElementById(idSlider);
    var carouselInner = sliderCategoria.querySelector(".carousel-inner");
    carouselInner.classList.remove("fadein");
    carouselInner.classList.add("right-to-left");
    setTimeout(function () {
        sliderCategoria.removeChild(carouselInner);
    }, 500);
    return true;

}

function criaCarousel(idSlider) {
    var sliderCategoria = document.getElementById(idSlider);
    var carouselInner = document.createElement("div");
    carouselInner.classList.remove("right-to-left");
    carouselInner.classList.add("carousel-inner", "fadein");
    sliderCategoria.appendChild(carouselInner);
}

function montaSlider(dados, index) {
    var sliderCategoria = document.querySelector("#slider-categoria");
    var carouselInner = sliderCategoria.querySelector(".carousel-inner.fadein");

    var carouselItem = document.createElement("div");
    carouselItem.classList.add("carousel-item");
    if (index === 0) {
        carouselItem.classList.add("active");
    }

    var rowMask = document.createElement("div");
    rowMask.classList.add("row", "justify-content-end", "d-none", "d-lg-flex");

    var vmask = document.createElement("div");
    vmask.classList.add("col-auto", "position-absolute", "h-100",
        "v-mask", "d-flex", "justify-content-end");
    rowMask.appendChild(vmask);

    var mask = document.createElement("img");
    // var urlMask = "https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/modulos/categoria-slider/mask-slider.svg";
    var urlMask = jQ('#projeto_mascara').val();
    mask.setAttribute("src", urlMask);
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
    boxTitle.innerHTML = '<h3 class="title-text">' + dados.title + '</h3>';
    boxTitle.classList.add("col-12", "title");
    rowCases.appendChild(boxTitle);

    var boxDesc = document.createElement("div");
    boxDesc.innerHTML = "<p>" + dados.desc + "</p>"
    boxDesc.classList.add("col-12", "box-desc");
    rowCases.appendChild(boxDesc);

    var boxTags = document.createElement("div");
    boxTags.classList.add("col-auto", "box-tags", "mt-2", "mt-lg-4");
    rowCases.appendChild(boxTags);

    var ulTags = document.createElement("ul");
    ulTags.classList.add("list-group", "list-group-horizontal");
    ulTags.innerHTML = ' <li class="list-group-item">' + dados.tag + '</li>';
    boxTags.appendChild(ulTags);

    var boxTimeSlide = document.createElement("div");
    boxTimeSlide.classList.add("col-auto", "box-time-slide", "mt-2", "mt-lg-4");
    boxTimeSlide.innerHTML = '<p>' + dados.readtime + ' de leitura</p>';
    rowCases.appendChild(boxTimeSlide);

    var boxCta = document.createElement("div");
    boxCta.classList.add("col-12", "box-link", "mt-2", "mt-lg-4");
    boxCta.innerHTML = ' <a href="' + dados.link + '">VER AÇÃO</a>';
    rowCases.appendChild(boxCta);

    var boxImg = document.createElement("div");
    boxImg.classList.add("col-12", "col-lg-8", "box-img");
    boxImg.innerHTML = '<img src="' + dados.img + '" class="d-block w-100" alt="' + dados.title + '">';
    rowContent.appendChild(boxImg);


    carouselItem.appendChild(rowMask);
    carouselItem.appendChild(rowContent);

    carouselInner.appendChild(carouselItem);
}

function montaCarouselArticle(index) {

    var carousel = document.getElementById("carousel-articles");
    var inner = carousel.querySelector(".carousel-inner.fadein");

    var carouselItem = document.createElement("div");
    carouselItem.classList.add("carousel-item");
    carouselItem.classList.add("carousel-id-"+index);
    if (index === 0) {
        carouselItem.classList.add("active");
    }
    inner.appendChild(carouselItem);


    var rowSlider = document.createElement("div");
    rowSlider.classList.add("row", "row-cols-1", "row-cols-lg-3", "article-box");
    carouselItem.appendChild(rowSlider);

}

function montaArticleSlider(dados, index) {
    var carousel = document.getElementById("carousel-articles");
    var inner = carousel.querySelector(".carousel-inner.fadein");
    var idItem = inner.querySelector(".carousel-id-"+index);
    var row = idItem.querySelector(".article-box");

    var item = document.createElement("div");
    item.classList.add("col", "item")
    row.appendChild(item);

    var globalLink = document.createElement("a");
    globalLink.setAttribute("href", dados.link);
    item.appendChild(globalLink);

    var card = document.createElement("div");
    card.classList.add("card", "mt-lg-auto");
    globalLink.appendChild(card);

    var img = document.createElement("img");
    img.classList.add("card-img-top");
    img.setAttribute("src", dados.img);
    img.setAttribute("alt", dados.title);
    card.appendChild(img);

    var cardBody = document.createElement("div");
    cardBody.classList.add("card-body");
    card.appendChild(cardBody);

    var cardTitle = document.createElement("h5");
    cardTitle.classList.add("card-title");
    cardTitle.innerHTML = dados.title;
    cardBody.appendChild(cardTitle);

    var cardText = document.createElement("p");
    cardText.innerHTML = dados.desc;
    cardText.classList.add("card-text");
    cardBody.appendChild(cardText);

    var boxCta = document.createElement("div");
    boxCta.classList.add("col-12", "box-cta", "mt-2", "mt-lg-4");
    cardBody.appendChild(boxCta);

    var cta = document.createElement("a");
    cta.setAttribute("href", dados.link);
    cta.classList.add("btn-cta");
    cta.innerHTML = "conheça a ação";
    boxCta.appendChild(cta);

}

