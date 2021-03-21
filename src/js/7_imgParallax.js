class ImgParallax {
    constructor(el, speed) {
        this.speed = speed;
        this.target = el.firstElementChild;
        this._init();
    }
    _init() {
        window.addEventListener('scroll', () => {
            console.log(this.target);
            const scroll = window.scrollY;
            const position = this.target.scrollTop;
            const value = (scroll - position) / this.speed;
            this.target.style.transform = "translateY(" + value + "px)";
        });

    }
}