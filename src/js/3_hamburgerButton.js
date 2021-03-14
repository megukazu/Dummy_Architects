/*********************************** 
  HamburgerButton
************************************/

class HamburgerButton {
    constructor(element) {
        this.element = element;
        this.trigger = document.querySelector(this.element);
        this.target = document.querySelector('body');
        this._addEvent()
    }
    _toggleClass() {
        this.target.classList.toggle('is-active-drawer');
    }
    _getAttr() {
        this.attr = this.trigger.getAttribute('aria-expanded');
    }
    _trueAttr() {
        this.trigger.setAttribute('aria-expanded', 'true');
    }
    _falseAttr() {
        this.trigger.setAttribute('aria-expanded', 'false');
    }
    _addEvent() {
        if (this.trigger) {
            this.trigger.addEventListener('click', () => {
                this._toggleClass();
                this._getAttr();
                if (this.attr === 'false') {
                    this._trueAttr();
                } else {
                    this._falseAttr();
                }
            })
        }
    }
}