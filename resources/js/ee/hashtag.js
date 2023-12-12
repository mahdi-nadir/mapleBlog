export default class HashtagClass {
    constructor() {
        // this.modalResult = document.querySelector('#modalResult');
        // this.cancelBtn = this.modalResult.querySelectorAll('.cancel');
        this.hashtagSelect = document.querySelector('#hashtag');
        this.getHashtagBtn = document.querySelector('#getHashtagBtn');
        // this.overlay = document.querySelector('#overlay');
        this.result = document.querySelector('#resultHashtag');
        this.isEnglish = window.location.href.includes('/en');
        this.init();
    }

    init() {
        // this.overlay.style.display = 'block';
        // this.overlay.style.opacity = '0.8';
        // this.overlay.style.visibility = 'visible';
        // this.modalResult.style.transform = 'translate(-50%, -50%) scale(1)';

        this.getHashtagBtn.addEventListener('click', () => {
            const selectedOption = this.hashtagSelect.value;
            if (selectedOption) {
                const currentDate = new Date();
                const month = currentDate.getMonth() + 1; // Month is 0-based
                const day = currentDate.getDate();
                const hours = currentDate.getHours();
                const minutes = currentDate.getMinutes();
                const hashtag = `#maplemind_${selectedOption}_${month}${day}_${hours}${minutes}`;
                const hashtagWithIcon = `<h1 class="flex flex-col justify-center items-center gap-2"><span class="font-bold">#maplemind_${selectedOption}_${month}${day}_${hours}${minutes}</span><div class="flex flex-row gap-2"><i id="copyHashtag" class="copy-icon fas fa-copy cursor-pointer text-slate-500 hover:text-slate-800 text-xl" title="Click to copy"></i><span id="copied" class="text-sm text-green-600 animate-pulse"></span></div></h1>`;

                this.result.innerHTML = hashtagWithIcon;

                const copyHashtagIcon = document.querySelector('#copyHashtag');
                copyHashtagIcon.addEventListener('click', () => {
                    this.copyToClipboard(hashtag);
                });
            } else {
                this.result.innerHTML = `<h1 class="text-sm md:text-lg font-bold text-red-700 italic">${this.isEnglish ? 'Please select an option' : 'Veuillez sélectionner une option'}</h>`;
            }
        });

        // this.cancelBtn.forEach(element => {
        //     element.addEventListener('click', () => {
        //         this.overlay.style.display = 'none';
        //         this.overlay.style.opacity = '0';
        //         this.overlay.style.visibility = 'hidden';
        //         this.modalResult.style.transform = 'translate(-50%, -50%) scale(0)';
        //         this.modalResult.innerHTML = `
        //             <button id="cancel" class="cancel absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
        //                 <i class="fa-solid fa-xmark"></i>
        //             </button>
        //         `;
        //     });
        // });
    }

    copyToClipboard(text) {
        const textarea = document.createElement('textarea');
        const copied = document.querySelector('#copied');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        copied.innerHTML = `${this.isEnglish ? 'Copied!' : 'Copié !'}`;
        setTimeout(() => {
            copied.innerHTML = '';
        }, 2000);
    }
}
