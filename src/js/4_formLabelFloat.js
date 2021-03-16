/*********************************** 
  FormLabelFloat
************************************/

class FormLabelFloat {
    constructor(element) {
        this.element = element;
        this.trigger = document.querySelectorAll(this.element)
        this._addEvent()
    }
    _addEvent() {
        if (this.trigger) {
            this.trigger.forEach((value) => {
                value.addEventListener('focus', () => {
                    this.parent = value.parentNode;
                    this.parent.classList.add('is-float')
                });
                value.addEventListener('blur', () => {
                    this.parent.classList.remove('is-float')
                });
            });
        }
    }
}