document.addEventListener('DOMContentLoaded', () => {

    // HeroSlider(引数: element, speed, delay)
    // const hero = new HeroSlider('.swiper-container', 2000, 4000);
    // hero.start();


    const main = new Main();
});

class Main {
    constructor() {
        this.body = document.querySelector('body');
        this._observers = [];
        this._init();
    }
    set setObservers(val) {
        this._observers.push(val);
    }
    get getObservers() {
        return this._observers;
    }
    _init() {
        this.hero = new HeroSlider('.swiper-container', 2000, 4000);
        new HamburgerButton();
        new FormLabelFloat();
        this._scrollInit();
    }
    _toggleHeroSlider(el, inview) {
        if (inview) {
            this.hero.start();
        } else {
            this.hero.stop();
        }
    }
    _headerAnimation(el, inview) {
        if (inview) {
            this.body.classList.remove('inview');
        } else {
            this.body.classList.add('inview');
        }
    }
    _destroyObservers() {
        this.observers.forEach(ob => {
            ob.destroy();
        });
    }
    destroy() {
        this._destroyObservers();
    }
    _scrollInit() {
        this.observers = new ScrollObserver('.js-headerFloatTrigger', this._headerAnimation.bind(this), { once: false });
        this.observers = new ScrollObserver('.swiper-container', this._toggleHeroSlider.bind(this), { once: false });
    }
}