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
            this.expressEntry.innerHTML = '<i class="fa-brands fa-canadian-maple-leaf text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400"></i>';
            this.arrima.innerHTML = 'ff';
        } else {
            this.expressEntry.innerHTML = "Express Entry";
            this.arrima.innerHTML = "Arrima";
        }

        // this.burger.addEventListener('click', () => {
        //     this.toggleBurger();
        //     console.log('clicked');
        //     if (this.open) {
        //         this.burger.innerHTML = '<i class="fa-solid fa-times text-white text-2xl md:text-4xl ml-4 my-3 hover:text-red-400"></i>';
        //         this.navbarOptions.classList.remove('hidden');
        //         console.log('hidden');

        //     } else {
        //         this.burger.innerHTML = '<i class="fa-solid fa-bars text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400"></i>';
        //         this.navbarOptions.classList.add('hidden');
        //         console.log('remove');

        //     }
        // });
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