let timeLine = document.querySelector("#timeline-new");

let arrObj = [];


if (timeLine !== null && timeLine !== "") {
    let itens = timeLine.querySelectorAll("#itens-time-line .item");

    var active = document.querySelector(".row-active .active");
    var imgRight = document.querySelector(".img-right");
    var imgLeft = document.querySelector(".img-left");
    var descActive = document.querySelector(".desc-active p");
    var descMobileActive = document.querySelector(".desc-active.mobile-desc p")


    setDadosLocal(itens);
    timeLine.querySelector("#itens-time-line").remove();

    var localStoregTime = JSON.parse(localStorage.getItem("timeline-itens"));
    geraTimeline();
}

function setDadosLocal(itens) {
    itens.forEach((item, index) => {
        let dadosObj = {
            id: index,
            img: item.querySelector("img").getAttribute('src'),
            data: parseInt(item.querySelector(".data").textContent),
            desc: item.querySelector(".desc").textContent,
        };
        arrObj.push(dadosObj);
    });
    return localStorage.setItem('timeline-itens', JSON.stringify(arrObj));
}

function geraTimeline() {
    localStoregTime.forEach((time, index) => {
        if (index === 0) {
            active.style.backgroundImage = `url(${time.img})`;
            descActive.textContent = time.desc;
            descMobileActive.textContent = time.desc;
            timeLine.querySelector('.mask-red p').textContent = time.data;
            timeLine.querySelector('.mask-red-desk p').textContent = time.data;
            active.setAttribute('tmn-id', time.id);
        } else if (index === 1) {
            imgRight.style.backgroundImage = `url(${time.img})`;
            imgRight.setAttribute('tmn-id', time.id)
        } else if (index === localStoregTime.length - 1) {
            imgLeft.style.backgroundImage = `url(${time.img})`;
            imgLeft.setAttribute('tmn-id', time.id);
        }
    });
}

function lastItem() {
    var activeActual = parseInt(active.getAttribute("tmn-id").valueOf());
    var leftActual = parseInt(imgLeft.getAttribute("tmn-id").valueOf());
    var rightActual = parseInt(imgRight.getAttribute("tmn-id").valueOf());
    var index = 0;
    while (index < localStoregTime.length) {

        if (activeActual === localStoregTime[index].id) {
            if (localStoregTime[index].id === 0)
                var lastI = localStoregTime.length - 1;
            else
                var lastI = parseInt(localStoregTime[index].id) - 1;

            active.style.backgroundImage = `url(${localStoregTime[lastI].img})`;
            descActive.textContent = localStoregTime[lastI].desc;
            descMobileActive.textContent = localStoregTime[lastI].desc;
            timeLine.querySelector('.mask-red p').textContent = localStoregTime[lastI].data;
            timeLine.querySelector('.mask-red-desk p').textContent = localStoregTime[lastI].data;
            active.setAttribute('tmn-id', lastI);
        } else if (leftActual === localStoregTime[index].id) {
            if (localStoregTime[index].id === 0)
                var lastI = localStoregTime.length - 1;
            else
                var lastI = parseInt(localStoregTime[index].id) - 1;

            imgLeft.style.backgroundImage = `url(${localStoregTime[lastI].img})`;
            imgLeft.setAttribute('tmn-id', lastI);
        } else if (rightActual === localStoregTime[index].id) {
            if (localStoregTime[index].id === 0)
                var lastI = localStoregTime.length - 1;
            else
                var lastI = parseInt(localStoregTime[index].id) - 1;

            imgRight.style.backgroundImage = `url(${localStoregTime[lastI].img})`;
            imgRight.setAttribute('tmn-id', lastI);
        }
        index++;
    }
}

function nextItem() {
    var activeActual = parseInt(active.getAttribute("tmn-id").valueOf());
    var leftActual = parseInt(imgLeft.getAttribute("tmn-id").valueOf());
    var rightActual = parseInt(imgRight.getAttribute("tmn-id").valueOf());
    var index = 0;
    var totalArray = localStoregTime.length - 1;
    while (index < localStoregTime.length) {

        if (activeActual === localStoregTime[index].id) {

            if (localStoregTime[index].id >= totalArray)
                var nextI = 0;
            else
                var nextI = index + 1;

            active.setAttribute('tmn-id', nextI);
            timeLine.querySelector('.mask-red p').textContent = localStoregTime[nextI].data;
            timeLine.querySelector('.mask-red-desk p').textContent = localStoregTime[nextI].data;
            descActive.textContent = localStoregTime[nextI].desc;
            descMobileActive.textContent = localStoregTime[nextI].desc;
            active.style.backgroundImage = `url(${localStoregTime[nextI].img})`;

        } else if (leftActual === localStoregTime[index].id) {

            if (localStoregTime[index].id >= totalArray)
                var nextI = 0;
            else
                var nextI = index + 1;

            imgLeft.setAttribute('tmn-id', nextI);
            imgLeft.style.backgroundImage = `url(${localStoregTime[nextI].img})`;

        } else if (rightActual === localStoregTime[index].id) {

            if (localStoregTime[index].id >= totalArray)
                var nextI = 0;
            else
                var nextI = index + 1;

            imgRight.setAttribute('tmn-id', nextI);
            imgRight.style.backgroundImage = `url(${localStoregTime[nextI].img})`;

        }
        index++;
    }
}