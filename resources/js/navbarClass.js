export default class NavbarClass {
    constructor() {
        this.eeBtn = document.querySelector('#expressEntryBtn');
        this.arrimaBtn = document.querySelector('#arrimaBtn');
        this.navbarOptions = document.querySelector('#navbarOptions');
        this.mobileMenu = document.querySelector('#mobileMenu');
        this.userMenu = document.querySelector('#userMenu');
        this.expressEntry = document.querySelector('#expressEntry');
        this.arrima = document.querySelector('#arrima');
        this.windowWidth = window.innerWidth;
        this.burger = document.querySelector('#burgerr');
        this.open = false;
        window.addEventListener('resize', this.handleWindowResize.bind(this));
        this.init()
    }

    init() {
        if (this.windowWidth < 768) {
            this.expressEntry.innerHTML = '<i class="fa-brands fa-canadian-maple-leaf text-white text-2xl"></i>';
            this.arrima.innerHTML = '<div class="w-[40px] h-[40px]" mt-1><img src="/img/quebeclily.png" alt"arrima system"/></div>';
        } else {
            this.expressEntry.innerHTML = window.location.href.includes('/fr') ? "Entrée express" : "Express Entry";
            this.arrima.innerHTML = "Arrima";
        }
    }

    handleWindowResize() {
        this.windowWidth = window.innerWidth;
        this.init();
    }

    getInnerWidth() {
        return window.innerWidth;
    }

    toggleBurger() {
        this.open = !this.open;
    }
}