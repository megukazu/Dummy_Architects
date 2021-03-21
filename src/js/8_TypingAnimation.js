class TypingAnimation {
    constructor(el) {
        this.el = el;
        this._init();
    }
    _init() {
        const str = this.el.innerHTML.trim();
        let count = 0
        this.el.innerHTML = '';
        let typingEffect = () => {
            this.el.style.opacity = "1";
            if (count < str.length) {
                setTimeout(() => {
                    this.el.innerHTML += str[count]
                    count++
                    typingEffect()
                }, Math.floor(Math.random(10) * 100))
            }
        }
        typingEffect()
    }
}