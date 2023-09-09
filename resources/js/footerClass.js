export default class FooterClass {
    constructor() {
        this.spanYearFooter = document.querySelector('#year');
        this.init()
    }

    init() {
        this.spanYearFooter.textContent = new Date().getFullYear();
    }
}