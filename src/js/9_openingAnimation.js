class OpeningAnimation {
    constructor() {
        this.body = document.querySelector('body');
        this._init();
    }
    _init() {
        this._openingWrap();
        this._openingCover();
        this._openingInner();
        this._titleLogo();

        setTimeout(() => {
            this.OpeningWrap.remove();
        }, 2500);
    }


    _openingWrap() {
        const createOpeningWrap = document.createElement("div")
        createOpeningWrap.setAttribute("class", "opening-wrap");
        this.body.appendChild(createOpeningWrap);
        this.OpeningWrap = document.querySelector(".opening-wrap");
    }


    _openingCover() {
        for (let i = 1; i <= 6; i++) {
            const createOpeningCover = document.createElement("div")
            createOpeningCover.setAttribute("class", "opening-cover" + i);
            this.OpeningWrap.appendChild(createOpeningCover);
        }
    }

    _openingInner() {
        const createOpeningInner = document.createElement("div")
        createOpeningInner.setAttribute("class", "opening-inner");
        this.OpeningWrap.appendChild(createOpeningInner);
        this.OpeningInner = document.querySelector(".opening-inner");
    }

    _titleLogo() {
        const createH1 = document.createElement("h1")
        createH1.setAttribute("class", "opening-title js-openingTitle");
        this.OpeningInner.appendChild(createH1);
        const openingTitle = document.querySelector('.opening-title');
        openingTitle.innerHTML = "Dummy</br>Architects";
    }
}