/*********************************** 
  FormLabelFloat
************************************/

class FormLabelFloat {
    constructor() {
        this.els = document.querySelectorAll('.js-input');
        this._init()
    }
    _init() {
        if (this.els) {
            this.els.forEach((el) => {
                el.addEventListener('focus', () => {
                    this.parent = el.parentNode;
                    this.parent.classList.add('is-float')
                });
                el.addEventListener('blur', () => {
                    this.parent.classList.remove('is-float')
                });
            });
        }
    }
}