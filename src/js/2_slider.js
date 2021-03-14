/*********************************** 
  Swiper
************************************/
class HeroSlider {
    constructor(element, speed, delay) {
        this.element = element;
        this.speed = speed;
        this.delay = delay
        this.swiper = this._initSwiper();
    }
    _initSwiper() {
        return new Swiper(this.element, {
            //Optional parameters
            loop: true,
            effect: "fade",
            speed: this.speed,
        });
    }
    start() {
        this.swiper.params.autoplay = {
            delay: this.delay,
            disableOnInteraction: false
        }
        this.swiper.autoplay.start();
    }
}