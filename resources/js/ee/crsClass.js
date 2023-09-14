export default class crsClass {
    constructor() {
        this.main = document.querySelector('main');
        this.count = 0;
        this.educationScore = 0;
        this.ageScore = 0;
        this.firstLangScore = 0;
        this.firstLangScoresArray = [0, 0, 0, 0];
        this.secondLangScore = 0;
        this.secondLangScoresArray = [0, 0, 0, 0];
        this.workExpeCanScore = 0;
        this.workExpeScore = 0;
        this.jobOfferScore = 0;
        this.qualificationScore = 0;
        this.nominationScore = 0;
        this.reservedJobScore = 0;
        this.studyScore = 0;
        this.workExpInCanadaScore = 0;
        this.relativesScore = 0;
        this.spouseLangScore = 0;
        this.spouseLangScoresArray = [0, 0, 0, 0];
        this.spouseEducationScore = 0;
        this.spouseWorkExpScore = 0;
        this.adaptabilityScore = 0;
        this.skillTransferabilityScore = 0;
        this.additionalPointsScore = 0;

        this.monthNamesEn = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        this.monthNamesFr = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
        ];
        this.year = new Date().getFullYear() - 10;
        this.month = window.location.href.includes('/en') ? this.monthNamesEn[new Date().getMonth()] : this.monthNamesFr[new Date().getMonth()];
        this.explanations = document.querySelectorAll('.fa-solid')

        // declare variables for the form
        this.eligibilityDiv = document.querySelector('.eligibility-div');
        this.explanations = document.querySelectorAll('.fa-solid')

        this.maritalStatusDiv = document.querySelector('.marital-status-div');
        this.maritalStatus = document.querySelector('.marital-status');

        this.spouseCanadianStatusDiv = document.querySelector('.spouseCanadianStatusDiv');
        this.spouseCanadianStatusInput = document.querySelector('[name="spouseCanadianStatus"]');

        this.spouseFollowerDiv = document.querySelector('.spouseFollowerDiv');
        this.spouseFollowerInput = document.querySelector('[name="spouseFollower"]');

        this.ageDiv = document.querySelector('.ageDiv');
        this.ageInput = document.querySelector('[name="age"]');

        this.educationDiv = document.querySelector('.educationDiv');
        this.educationInput = document.querySelector('[name="education"]');

        this.studiesInCanadaDiv = document.querySelector('.studiesInCanadaDiv');
        this.studiesInCanadaInput = document.querySelector('[name="studiesInCanada"]');

        this.studiesInCanadaTypeDiv = document.querySelector('.studiesCanadaTypeDiv');
        this.studiesInCanadaTypeInput = document.querySelector('[name="studiesCanadaType"]');

        this.firstLangDiv = document.querySelector('.first-language-div');
        this.firstLangInput = document.querySelector('[name="first-language-availability"]');
        this.firstLangTypeDiv = document.querySelector('.first-language-typeDiv');
        this.firstLangTypeInput = document.querySelector('[name="first-language-type"]');
        this.firstLangScoresDiv = document.querySelector('.first-language-scoresDiv');
        this.firstLangReadingInput = document.querySelector('[name="first-language-reading"]');
        this.firstLangWritingInput = document.querySelector('[name="first-language-writing"]');
        this.firstLangListeningInput = document.querySelector('[name="first-language-listening"]');
        this.firstLangSpeakingInput = document.querySelector('[name="first-language-speaking"]');
        this.firstLangScoresArray = [0, 0, 0, 0];

        this.secondLangDiv = document.querySelector('.second-language-div');
        this.secondLangInput = document.querySelector('[name="second-language-availability"]');
        this.secondLangTypeDiv = document.querySelector('.second-language-typeDiv');
        this.secondLangTypeInput = document.querySelector('[name="second-language-type"]');
        this.secondLangScoresDiv = document.querySelector('.second-language-scoresDiv');
        this.secondLangReadingInput = document.querySelector('[name="second-language-reading"]');
        this.secondLangWritingInput = document.querySelector('[name="second-language-writing"]');
        this.secondLangListeningInput = document.querySelector('[name="second-language-listening"]');
        this.secondLangSpeakingInput = document.querySelector('[name="second-language-speaking"]');
        this.secondLangScoresArray = [0, 0, 0, 0];

        this.workExpCanDiv = document.querySelector('.work-experience-can-div');
        this.workExpCanInput = document.querySelector('[name="work-experience-can"]');

        this.workExpDiv = document.querySelector('.work-experience-div');
        this.workExpInput = document.querySelector('[name="work-experience"]');

        this.qualificationDiv = document.querySelector('.qualification-div');
        this.qualificationInput = document.querySelector('[name="qualification"]');

        this.reservedJobDiv = document.querySelector('.reserved-job-position-in-canada-div');
        this.reservedJobInput = document.querySelector('[name="reserved-job-position-in-canada"]');

        this.nominationDiv = document.querySelector('.nomination-div');
        this.nominationInput = document.querySelector('[name="nomination"]');

        // this.studyDiv = document.querySelector('.study-canada-div');
        // this.studyInput = document.querySelector('[name="study-canada"]');

        // this.workExpInCanadaDiv = document.querySelector('.work-experience-canada-div');
        // this.workExpInCanadaInput = document.querySelector('[name="work-experience-canada"]');

        // this.jobOfferDiv = document.querySelector('.job-offer-div');
        // this.jobOfferInput = document.querySelector('[name="job-offer"]');

        this.jobOfferTeerDiv = document.querySelector('.jobOfferTeerDiv');
        this.jobOfferTeerInput = document.querySelector('[name="jobOfferTeer"]');

        this.relativesDiv = document.querySelector('.relatives-div');
        this.relativesInput = document.querySelector('[name="relatives"]');

        this.spouseEducationDiv = document.querySelector('.spouse-education-div');
        this.spouseEducationInput = document.querySelector('[name="spouse-education"]');

        this.spouseWorkExpDiv = document.querySelector('.spouse-work-experience-div');
        this.spouseWorkExpInput = document.querySelector('[name="spouse-work-experience"]');

        this.spouseLangDiv = document.querySelector('.spouse-language-div');
        this.spouseLangInput = document.querySelector('[name="spouse-language-type"]');

        this.spouseLangScoresDiv = document.querySelector('.spouse-language-scoresDiv');
        this.spouseLangReadingInput = document.querySelector('[name="spouse-language-reading"]');
        this.spouseLangWritingInput = document.querySelector('[name="spouse-language-writing"]');
        this.spouseLangListeningInput = document.querySelector('[name="spouse-language-listening"]');
        this.spouseLangSpeakingInput = document.querySelector('[name="spouse-language-speaking"]');

        this.overlay = document.querySelector('#overlay');
        this.modal = document.querySelector('#modal');
        this.modalResult = document.querySelector('#modalResult');
        this.modalConfirmation = document.querySelector('#modalConfirmation');
        this.noticeDiv = document.querySelector('.noticeCRS');
        this.btnReset = document.querySelector('.btn-reset');
        this.btnCalculate = document.querySelector('.btn-calculate');
        this.spanMarried = document.querySelector('#marriedOrNot');
        this.likeSingle = false;

        this.init();
    }

    init() {
        this.maritalStatus.addEventListener('change', () => {
            if (this.maritalStatus.value == 'married') {
                // this.ageDiv.style.display = 'none';
                this.spouseCanadianStatusDiv.style.display = 'block';
                this.highlightDiv(this.spouseCanadianStatusDiv);
                this.spouseCanadianStatusInput.value = '';
                this.spouseFollowerInput.value = '';
                this.spouseCanadianStatusInput.scrollIntoView({ behavior: 'smooth' })
            } else if (this.maritalStatus.value == 'single') {
                this.spouseCanadianStatusDiv.style.display = 'none';
                this.spouseFollowerDiv.style.display = 'none';
                this.ageDiv.style.display = 'block';
                this.highlightDiv(this.ageDiv);
                this.ageInput.scrollIntoView({ behavior: 'smooth' })
                this.likeSingle = true;
            } else {
                this.spouseCanadianStatusDiv.style.display = 'none';
                this.spouseFollowerDiv.style.display = 'none';
                // this.ageDiv.style.display = 'none';
                // this.ageInput.value = '';
                // this.spouseCanadianStatusInput.value = '';
                // this.spouseFollowerInput.value = '';
            }
            this.btnReset.disabled = false;
            this.ageInput.value = '';
            // this.educationDiv.style.display = 'none';
            // this.handleSelects(this.maritalStatus);
        })

        let spanMarried = document.querySelector('#marriedOrNot');
        this.spouseCanadianStatusInput.addEventListener('change', () => {
            if (this.spouseCanadianStatusInput.value == 'yes') {
                this.ageDiv.style.display = 'block';
                this.highlightDiv(this.ageDiv);
                this.ageInput.scrollIntoView({ behavior: 'smooth' })
                this.spouseFollowerDiv.style.display = 'none';
                this.likeSingle = true;
            } else if (this.spouseCanadianStatusInput.value == 'no') {
                this.likeSingle = false;
                this.ageDiv.style.display = 'none';
                this.ageInput.value = '';
                this.spouseFollowerDiv.style.display = 'block';
                this.highlightDiv(this.spouseFollowerDiv);
            } /* else {
            notDisplayComponents(spouseCanadianStatusDiv);
        } */
            this.spanMarriedOrSingle(spanMarried);
            // this.handleSelects(this.spouseCanadianStatusInput);
        })

        this.spouseFollowerInput.addEventListener('change', () => {
            if (this.spouseFollowerInput.value == 'yes') {
                this.likeSingle = false;
            } else if (this.spouseFollowerInput.value == 'no') {
                this.likeSingle = true;
            } /* else {
            notDisplayComponents(spouseFollowerDiv);
        } */
            this.ageDiv.style.display = 'block';
            this.highlightDiv(this.ageDiv);
            this.ageInput.scrollIntoView({ behavior: 'smooth' })
            this.ageInput.value = '';
            this.spanMarriedOrSingle(spanMarried);
            // this.handleSelects(this.spouseFollowerInput);
        })

        this.ageInput.addEventListener('change', () => {
            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                if (this.ageInput.value == 17) {
                    this.ageScore = 0;
                    this.noticeDiv.style.display = 'block';
                    this.noticeDiv.innerHTML = window.location.href.includes('/en') ? `
                You are not eligible to apply for Express Entry because you are under 18 years old.
                ` : `Vous n'êtes pas admissible à présenter une demande dans le cadre d'Entrée express car vous avez moins de 18 ans.`;

                    setTimeout(() => {
                        this.noticeDiv.style.display = 'none';
                        this.noticeDiv.innerHTML = '';
                    }, 8000);
                } else if (this.ageInput.value == 18) {
                    this.ageScore = 90;
                } else if (this.ageInput.value == 19) {
                    this.ageScore = 95;
                } else if (this.ageInput.value >= 20 && this.ageInput.value <= 29) {
                    this.ageScore = 100;
                } else if (this.ageInput.value == 30) {
                    this.ageScore = 95;
                } else if (this.ageInput.value == 31) {
                    this.ageScore = 90;
                } else if (this.ageInput.value == 32) {
                    this.ageScore = 85;
                } else if (this.ageInput.value == 33) {
                    this.ageScore = 80;
                } else if (this.ageInput.value == 34) {
                    this.ageScore = 75;
                } else if (this.ageInput.value == 35) {
                    this.ageScore = 70;
                } else if (this.ageInput.value == 36) {
                    this.ageScore = 65;
                } else if (this.ageInput.value == 37) {
                    this.ageScore = 60;
                } else if (this.ageInput.value == 38) {
                    this.ageScore = 55;
                } else if (this.ageInput.value == 39) {
                    this.ageScore = 50;
                } else if (this.ageInput.value == 40) {
                    this.ageScore = 45;
                } else if (this.ageInput.value == 41) {
                    this.ageScore = 35;
                } else if (this.ageInput.value == 42) {
                    this.ageScore = 25;
                } else if (this.ageInput.value == 43) {
                    this.ageScore = 15;
                } else if (this.ageInput.value == 44) {
                    this.ageScore = 5;
                } else if (this.ageInput.value >= 45) {
                    this.ageScore = 0;
                } else {
                    this.ageScore = 0;
                    // notDisplayComponents(ageDiv);
                }
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                if (this.ageInput.value == 17) {
                    this.ageScore = 0;
                    this.noticeDiv.style.display = 'block';
                    this.noticeDiv.innerHTML = window.location.href.includes('/en') ? `
                    You are not eligible to apply for Express Entry because you are under 18 years old.
                    ` : `Vous n'êtes pas admissible à présenter une demande dans le cadre d'Entrée express car vous avez moins de 18 ans.`;

                    setTimeout(() => {
                        this.noticeDiv.style.display = 'none';
                        this.noticeDiv.innerHTML = '';
                    }, 8000);
                } else if (this.ageInput.value == 18) {
                    this.ageScore = 99;
                } else if (this.ageInput.value == 19) {
                    this.ageScore = 105;
                } else if (this.ageInput.value >= 20 && this.ageInput.value <= 29) {
                    this.ageScore = 110;
                } else if (this.ageInput.value == 30) {
                    this.ageScore = 105;
                } else if (this.ageInput.value == 31) {
                    this.ageScore = 99;
                } else if (this.ageInput.value == 32) {
                    this.ageScore = 94;
                } else if (this.ageInput.value == 33) {
                    this.ageScore = 88;
                } else if (this.ageInput.value == 34) {
                    this.ageScore = 83;
                } else if (this.ageInput.value == 35) {
                    this.ageScore = 77;
                } else if (this.ageInput.value == 36) {
                    this.ageScore = 72;
                } else if (this.ageInput.value == 37) {
                    this.ageScore = 66;
                } else if (this.ageInput.value == 38) {
                    this.ageScore = 61;
                } else if (this.ageInput.value == 39) {
                    this.ageScore = 55;
                } else if (this.ageInput.value == 40) {
                    this.ageScore = 50;
                } else if (this.ageInput.value == 41) {
                    this.ageScore = 39;
                } else if (this.ageInput.value == 42) {
                    this.ageScore = 28;
                } else if (this.ageInput.value == 43) {
                    this.ageScore = 17;
                } else if (this.ageInput.value == 44) {
                    this.ageScore = 6;
                } else if (this.ageInput.value >= 45) {
                    this.ageScore = 0;
                } else {
                    this.ageScore = 0;
                    // notDisplayComponents(ageDiv);
                }
            }
            this.educationDiv.style.display = 'block';
            this.highlightDiv(this.educationDiv);
            this.educationInput.scrollIntoView({ behavior: 'smooth' })
            // this.handleSelects(this.ageInput);
        })

        this.educationInput.addEventListener('change', () => {
            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                if (this.educationInput.value == 'secondary') {
                    this.educationScore = 28;
                } else if (this.educationInput.value == 'one-year') {
                    this.educationScore = 84;
                } else if (this.educationInput.value == 'two-year') {
                    this.educationScore = 91;
                } else if (this.educationInput.value == 'bachelors') {
                    this.educationScore = 112;
                } else if (this.educationInput.value == 'two-or-more') {
                    this.educationScore = 119;
                } else if (this.educationInput.value == 'masters') {
                    this.educationScore = 126;
                } else if (this.educationInput.value == 'doctoral') {
                    this.educationScore = 140;
                } else {
                    this.educationScore = 0;
                    // notDisplayComponents(educationDiv);
                }
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                if (this.educationInput.value == 'secondary') {
                    this.educationScore = 30;
                } else if (this.educationInput.value == 'one-year') {
                    this.educationScore = 90;
                } else if (this.educationInput.value == 'two-year') {
                    this.educationScore = 98;
                } else if (this.educationInput.value == 'bachelors') {
                    this.educationScore = 120;
                } else if (this.educationInput.value == 'two-or-more') {
                    this.educationScore = 128;
                } else if (this.educationInput.value == 'masters') {
                    this.educationScore = 135;
                } else if (this.educationInput.value == 'doctoral') {
                    this.educationScore = 150;
                } else {
                    this.educationScore = 0;
                    // notDisplayComponents(educationDiv);
                }
            }
            this.studiesInCanadaDiv.style.display = 'block';
            this.highlightDiv(this.studiesInCanadaDiv);
            this.studiesInCanadaInput.scrollIntoView({ behavior: 'smooth' })
            this.noticeDiv.style.display = 'none';
            this.noticeDiv.innerHTML = '';
            // this.handleSelects(this.educationInput);
        })

        this.studiesInCanadaInput.addEventListener('change', () => {
            if (this.studiesInCanadaInput.value == 'yes') {
                this.studiesInCanadaTypeDiv.style.display = 'block';
                this.highlightDiv(this.studiesInCanadaTypeDiv);
                this.studiesInCanadaTypeInput.scrollIntoView({ behavior: 'smooth' })
                this.firstLangDiv.style.display = 'none';
            } else if (this.studiesInCanadaInput.value == 'no') {
                this.studiesInCanadaTypeDiv.style.display = 'none';
                this.firstLangDiv.style.display = 'block';
                this.highlightDiv(this.firstLangDiv);
                this.firstLangInput.scrollIntoView({ behavior: 'smooth' })
            }
            // this.handleSelects(this.studiesInCanadaInput);
        })

        this.studiesInCanadaTypeInput.addEventListener('change', () => {
            this.firstLangDiv.style.display = 'block';
            this.highlightDiv(this.firstLangDiv);
            this.firstLangInput.scrollIntoView({ behavior: 'smooth' })
        })

        this.firstLangInput.addEventListener('change', () => {
            if (this.firstLangInput.value == 'yes') {
                this.firstLangTypeDiv.style.display = 'block';
                this.highlightDiv(this.firstLangTypeDiv);
                this.firstLangTypeInput.scrollIntoView({ behavior: 'smooth' })
                this.noticeDiv.style.display = 'none';
                this.noticeDiv.innerHTML = '';
            } else {
                this.firstLangTypeDiv.style.display = 'none';
                this.firstLangScoresDiv.style.display = 'none';
                this.noticeDiv.classList.remove('noticeCRS');
                this.noticeDiv.style.display = 'block';
                this.noticeDiv.innerHTML = window.location.href.includes('/en') ? `You must have a language test result to be eligible for Express Entry.` : `Vous devez avoir un résultat de test de langue pour être admissible à Entrée express.`;
            }
            // this.handleSelects(this.firstLangInput);
        })

        this.firstLangTypeInput.addEventListener('change', () => {
            this.secondLangTypeInput.querySelector('option[value="ielts"]').style.display = 'block';
            this.secondLangTypeInput.querySelector('option[value="celpip"]').style.display = 'block';
            this.secondLangTypeInput.querySelector('option[value="tef-canada"]').style.display = 'block';
            this.secondLangTypeInput.querySelector('option[value="tcf-canada"]').style.display = 'block';

            if (this.firstLangTypeInput.value == 'ielts') {
                this.firstLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.firstLangScoresDiv)
                this.firstLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.secondLangTypeInput.querySelector('option[value="ielts"]').style.display = 'none';
                this.secondLangTypeInput.querySelector('option[value="celpip"]').style.display = 'none';

                this.fillLanguageReading('ielts', this.firstLangReadingInput);
                this.fillLanguageWriting('ielts', this.firstLangWritingInput);
                this.fillLanguageListening('ielts', this.firstLangListeningInput);
                this.fillLanguageSpeaking('ielts', this.firstLangSpeakingInput);
            } else if (this.firstLangTypeInput.value == 'celpip') {
                this.firstLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.firstLangScoresDiv)
                this.firstLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.secondLangTypeInput.querySelector('option[value="ielts"]').style.display = 'none';
                this.secondLangTypeInput.querySelector('option[value="celpip"]').style.display = 'none';

                this.fillLanguageReading('celpip', this.firstLangReadingInput);
                this.fillLanguageWriting('celpip', this.firstLangWritingInput);
                this.fillLanguageListening('celpip', this.firstLangListeningInput);
                this.fillLanguageSpeaking('celpip', this.firstLangSpeakingInput);
            } else if (this.firstLangTypeInput.value == 'tef-canada') {
                this.firstLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.firstLangScoresDiv)
                this.firstLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.secondLangTypeInput.querySelector('option[value="tef-canada"]').style.display = 'none';
                this.secondLangTypeInput.querySelector('option[value="tcf-canada"]').style.display = 'none';

                this.fillLanguageReading('tef-canada', this.firstLangReadingInput);
                this.fillLanguageWriting('tef-canada', this.firstLangWritingInput);
                this.fillLanguageListening('tef-canada', this.firstLangListeningInput);
                this.fillLanguageSpeaking('tef-canada', this.firstLangSpeakingInput);
            } else if (this.firstLangTypeInput.value == 'tcf-canada') {
                this.firstLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.firstLangScoresDiv)
                this.firstLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.secondLangTypeInput.querySelector('option[value="tef-canada"]').style.display = 'none';
                this.secondLangTypeInput.querySelector('option[value="tcf-canada"]').style.display = 'none';

                this.fillLanguageReading('tcf-canada', this.firstLangReadingInput);
                this.fillLanguageWriting('tcf-canada', this.firstLangWritingInput);
                this.fillLanguageListening('tcf-canada', this.firstLangListeningInput);
                this.fillLanguageSpeaking('tcf-canada', this.firstLangSpeakingInput);
            } else {
                this.firstLangScoresDiv.style.display = 'none';
                this.firstLangReadingInput.value = '';
                this.firstLangWritingInput.value = '';
                this.firstLangListeningInput.value = '';
                this.firstLangSpeakingInput.value = '';
                this.secondLangTypeInput.querySelector('option[value="ielts"]').style.display = 'block';
                this.secondLangTypeInput.querySelector('option[value="celpip"]').style.display = 'block';
                this.secondLangTypeInput.querySelector('option[value="tef-canada"]').style.display = 'block';
                this.secondLangTypeInput.querySelector('option[value="tcf-canada"]').style.display = 'block';
            }
            // this.handleSelects(this.firstLangTypeInput);
        })

        this.firstLangReadingInput.addEventListener('change', () => {
            this.getPointsFirstLanguage(this.maritalStatus.value, this.likeSingle, this.firstLangReadingInput.value, this.firstLangScoresArray, 0);
            this.firstLangScore = this.calculateLanguageScore(this.firstLangScoresArray);
            this.errorLanguageSkill(this.firstLangReadingInput, 'reading', this.firstLangWritingInput, this.secondLangDiv);
            this.triggerSecondLangDiv(this.firstLangReadingInput, this.firstLangWritingInput, this.firstLangListeningInput, this.firstLangSpeakingInput, this.secondLangDiv);
        })

        this.firstLangWritingInput.addEventListener('change', () => {
            this.getPointsFirstLanguage(this.maritalStatus.value, this.likeSingle, this.firstLangWritingInput.value, this.firstLangScoresArray, 1);
            this.firstLangScore = this.calculateLanguageScore(this.firstLangScoresArray);
            this.errorLanguageSkill(this.firstLangWritingInput, 'writing', this.firstLangListeningInput, this.secondLangDiv);
            this.triggerSecondLangDiv(this.firstLangReadingInput, this.firstLangWritingInput, this.firstLangListeningInput, this.firstLangSpeakingInput, this.secondLangDiv);
        })

        this.firstLangListeningInput.addEventListener('change', () => {
            this.getPointsFirstLanguage(this.maritalStatus.value, this.likeSingle, this.firstLangListeningInput.value, this.firstLangScoresArray, 2);
            this.firstLangScore = this.calculateLanguageScore(this.firstLangScoresArray);
            this.errorLanguageSkill(this.firstLangListeningInput, 'listening', this.firstLangSpeakingInput, this.secondLangDiv);
            this.triggerSecondLangDiv(this.firstLangReadingInput, this.firstLangWritingInput, this.firstLangListeningInput, this.firstLangSpeakingInput, this.secondLangDiv);
        })

        this.firstLangSpeakingInput.addEventListener('change', () => {
            this.getPointsFirstLanguage(this.maritalStatus.value, this.likeSingle, this.firstLangSpeakingInput.value, this.firstLangScoresArray, 3);
            this.firstLangScore = this.calculateLanguageScore(this.firstLangScoresArray);
            this.errorLanguageSkill(this.firstLangSpeakingInput, 'speaking', this.firstLangScoresDiv, this.secondLangDiv);
            this.triggerSecondLangDiv(this.firstLangReadingInput, this.firstLangWritingInput, this.firstLangListeningInput, this.firstLangSpeakingInput, this.secondLangDiv);
        })

        this.secondLangInput.addEventListener('change', () => {
            if (this.secondLangInput.value == 'yes') {
                this.secondLangTypeDiv.style.display = 'block';
                this.highlightDiv(this.secondLangTypeDiv);
                this.secondLangTypeDiv.scrollIntoView({ behavior: 'smooth' })
                this.secondLangTypeInput.value = '';
                this.workExpCanDiv.style.display = 'none';
            } else {
                this.secondLangTypeDiv.style.display = 'none';
                this.secondLangScoresDiv.style.display = 'none';
                this.workExpCanDiv.style.display = 'block';
                this.highlightDiv(this.workExpCanDiv);
                this.workExpCanDiv.scrollIntoView({ behavior: 'smooth' })
            }
            // this.handleSelects(this.secondLangInput);
        })

        this.secondLangTypeInput.addEventListener('change', () => {
            if (this.secondLangTypeInput.value == 'ielts') {
                this.secondLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.secondLangScoresDiv);
                this.secondLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('ielts', this.secondLangReadingInput);
                this.fillLanguageWriting('ielts', this.secondLangWritingInput);
                this.fillLanguageListening('ielts', this.secondLangListeningInput);
                this.fillLanguageSpeaking('ielts', this.secondLangSpeakingInput);
            } else if (this.secondLangTypeInput.value == 'celpip') {
                this.secondLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.secondLangScoresDiv);
                this.secondLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('celpip', this.secondLangReadingInput);
                this.fillLanguageWriting('celpip', this.secondLangWritingInput);
                this.fillLanguageListening('celpip', this.secondLangListeningInput);
                this.fillLanguageSpeaking('celpip', this.secondLangSpeakingInput);
            } else if (this.secondLangTypeInput.value == 'tef-canada') {
                this.secondLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.secondLangScoresDiv);
                this.secondLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('tef-canada', this.secondLangReadingInput);
                this.fillLanguageWriting('tef-canada', this.secondLangWritingInput);
                this.fillLanguageListening('tef-canada', this.secondLangListeningInput);
                this.fillLanguageSpeaking('tef-canada', this.secondLangSpeakingInput);
            } else if (this.secondLangTypeInput.value == 'tcf-canada') {
                this.secondLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.secondLangScoresDiv);
                this.secondLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('tcf-canada', this.secondLangReadingInput);
                this.fillLanguageWriting('tcf-canada', this.secondLangWritingInput);
                this.fillLanguageListening('tcf-canada', this.secondLangListeningInput);
                this.fillLanguageSpeaking('tcf-canada', this.secondLangSpeakingInput);
            } else {
                this.secondLangReadingInput.value = '';
                this.secondLangWritingInput.value = '';
                this.secondLangListeningInput.value = '';
                this.secondLangSpeakingInput.value = '';
                this.secondLangScoresDiv.style.display = 'none';
                this.workExpCanDiv.style.display = 'block';
                this.highlightDiv(this.workExpCanDiv);
                this.workExpCanDiv.scrollIntoView({ behavior: 'smooth' })
            }
            // this.handleSelects(this.secondLangTypeInput);
        })

        this.secondLangReadingInput.addEventListener('change', () => {
            this.getPointsSecondLanguage(this.secondLangReadingInput.value, this.secondLangScoresArray, 0);
            this.triggerWorkExpDiv()
            this.secondLangScore = this.calculateLanguageScore(this.secondLangScoresArray);
        })

        this.secondLangWritingInput.addEventListener('change', () => {
            this.getPointsSecondLanguage(this.secondLangWritingInput.value, this.secondLangScoresArray, 1);
            this.triggerWorkExpDiv()
            this.secondLangScore = this.calculateLanguageScore(this.secondLangScoresArray);
        })

        this.secondLangListeningInput.addEventListener('change', () => {
            this.getPointsSecondLanguage(this.secondLangListeningInput.value, this.secondLangScoresArray, 2);
            this.triggerWorkExpDiv()
            this.secondLangScore = this.calculateLanguageScore(this.secondLangScoresArray);
        })

        this.secondLangSpeakingInput.addEventListener('change', () => {
            this.getPointsSecondLanguage(this.secondLangSpeakingInput.value, this.secondLangScoresArray, 3);
            this.secondLangScore = this.calculateLanguageScore(this.secondLangScoresArray);
            this.triggerWorkExpDiv()
        })

        this.workExpCanInput.addEventListener('change', () => {
            let monthYearSpan = document.querySelector('#monthYearExp');
            monthYearSpan.textContent = window.location.href.includes('/en') ? `${this.month} 1st, ${this.year}` : `1er ${this.month} ${this.year}`;

            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                if (this.workExpCanInput.value == 1) {
                    this.workExpeCanScore = 35;
                } else if (this.workExpCanInput.value == 2) {
                    this.workExpeCanScore = 46;
                } else if (this.workExpCanInput.value == 3) {
                    this.workExpeCanScore = 56;
                } else if (this.workExpCanInput.value == 4) {
                    this.workExpeCanScore = 63;
                } else if (this.workExpCanInput.value == 5) {
                    this.workExpeCanScore = 70;
                } else {
                    this.workExpeCanScore = 0;
                    // notDisplayComponents(educationDiv);
                }
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                if (this.workExpCanInput.value == 1) {
                    this.workExpeCanScore = 40;
                } else if (this.workExpCanInput.value == 2) {
                    this.workExpeCanScore = 53;
                } else if (this.workExpCanInput.value == 3) {
                    this.workExpeCanScore = 64;
                } else if (this.workExpCanInput.value == 4) {
                    this.workExpeCanScore = 72;
                } else if (this.workExpCanInput.value == 5) {
                    this.workExpeCanScore = 80;
                } else {
                    this.workExpeCanScore = 0;
                    // notDisplayComponents(educationDiv);
                }
            }

            this.workExpDiv.style.display = 'block';
            this.highlightDiv(this.workExpDiv);
            this.workExpInput.scrollIntoView({ behavior: 'smooth' })

            if (this.workExpCanInput.value == '') {
                this.workExpeScore = 0;
                this.workExpDiv.style.display = 'none';
            }
            // this.handleSelects(this.workExpCanInput);
        })

        this.workExpInput.addEventListener('change', () => {
            this.noticeDiv.classList.remove('noticeCRS');
            if (this.workExpInput.value == '') {
                this.workExpeScore = 0;
                this.qualificationDiv.style.display = 'none';
            } else if (this.workExpInput.value == 0) {
                this.qualificationDiv.style.display = 'none';
                this.noticeDiv.style.display = 'block';
                this.noticeDiv.innerHTML = window.location.href.includes('/en') ? `
            You must have at least one year of continuous full-time or equivalent paid work experience in the past 10 years (from ${this.month} 1st, ${this.year}) in a skilled occupation.` : `Vous devez avoir au moins un an d'expérience de travail à temps plein ou l'équivalent rémunéré au cours des 10 dernières années (à partir du 1er ${this.month} ${this.year}) dans une profession admissible.`;
                // setTimeout(() => {
                //     this.noticeDiv.style.display = 'none';
                //     this.noticeDiv.innerHTML = '';
                //     workExpInput.scrollIntoView({ behavior: 'smooth' })
                // }, 8000);
            } else {
                this.qualificationDiv.style.display = 'block';
                this.highlightDiv(this.qualificationDiv);
                this.qualificationInput.scrollIntoView({ behavior: 'smooth' })
                this.noticeDiv.style.display = 'none';
                this.noticeDiv.innerHTML = '';
            }
            // this.handleSelects(this.workExpInput);
        })

        this.qualificationInput.addEventListener('change', () => {
            if (this.qualificationInput.value == 'yes') {
                this.qualificationScore = 50;
            } else if (this.qualificationInput.value == 'no') {
                this.qualificationScore = 0;
            }
            this.reservedJobDiv.style.display = 'block';
            this.highlightDiv(this.reservedJobDiv);
            this.reservedJobInput.scrollIntoView({ behavior: 'smooth' })
            if (this.qualificationInput.value == '') {
                this.workExpeScore = 0;
                this.reservedJobDiv.style.display = 'none';
            }
            // this.handleSelects(this.qualificationInput);
        })

        this.reservedJobInput.addEventListener('change', () => {
            if (this.reservedJobInput.value == 'yes') {
                this.jobOfferTeerDiv.style.display = 'block';
                this.highlightDiv(this.jobOfferTeerDiv);
                this.jobOfferTeerInput.scrollIntoView({ behavior: 'smooth' });
                this.nominationDiv.style.display = 'none';
            } else if (this.reservedJobInput.value == 'no') {
                this.jobOfferTeerDiv.style.display = 'none';
                this.nominationDiv.style.display = 'block';
                this.highlightDiv(this.nominationDiv);
                this.nominationInput.scrollIntoView({ behavior: 'smooth' })
            } else if (this.reservedJobInput.value == '') {
                this.jobOfferTeerDiv.style.display = 'none';
                this.nominationDiv.style.display = 'none';
            }
            // this.handleSelects(this.reservedJobInput);
        })

        this.jobOfferTeerInput.addEventListener('change', () => {
            if (this.jobOfferTeerInput.value == 'teer00') {
                this.reservedJobScore = 200;
            } else if (this.jobOfferTeerInput.value == 'teer0123') {
                this.reservedJobScore = 50;
            } else if (this.jobOfferTeerInput.value == 'teer45') {
                this.reservedJobScore = 0;
            }

            this.nominationDiv.style.display = 'block';
            this.highlightDiv(this.nominationDiv);
            this.nominationInput.scrollIntoView({ behavior: 'smooth' })

            if (this.jobOfferTeerInput.value == '') {
                this.reservedJobScore = 0;
                this.nominationDiv.style.display = 'none';
            }
            // this.handleSelects(this.jobOfferTeerInput);
        })

        this.nominationInput.addEventListener('change', () => {
            if (this.nominationInput.value == 'yes') {
                this.nominationScore = 600;
            } else if (this.nominationInput.value == 'no') {
                this.nominationScore = 0;
            }

            this.relativesDiv.style.display = 'block';
            this.highlightDiv(this.relativesDiv);
            this.relativesInput.scrollIntoView({ behavior: 'smooth' })

            if (this.nominationInput.value == '') {
                this.nominationScore = 0;
                this.relativesDiv.style.display = 'none';
            }
            // this.handleSelects(this.nominationInput);
        })

        this.relativesInput.addEventListener('change', () => {
            if (this.relativesInput.value == 'yes') {
                this.relativesScore = 15;
            } else if (this.relativesInput.value == 'no') {
                this.relativesScore = 0;
            }

            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                this.spouseEducationDiv.style.display = 'block';
                this.highlightDiv(this.spouseEducationDiv);
                this.spouseEducationDiv.scrollIntoView({ behavior: 'smooth' })
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                this.spouseEducationDiv.style.display = 'none';
                this.spouseWorkExpDiv.style.display = 'none';
                this.spouseLangDiv.style.display = 'none';
                this.btnCalculate.disabled = false;
            }

            if (this.relativesInput.value == '') {
                this.relativesScore = 0;
                this.spouseEducationDiv.style.display = 'none';
                this.spouseWorkExpDiv.style.display = 'none';
                this.spouseLangDiv.style.display = 'none';
            }
            // this.handleSelects(this.relativesInput);
        })

        this.spouseEducationInput.addEventListener('change', () => {
            if (this.spouseEducationInput.value == 'secondary') {
                this.spouseEducationScore = 2;
            } else if (this.spouseEducationInput.value == 'one-year') {
                this.spouseEducationScore = 6;
            } else if (this.spouseEducationInput.value == 'two-year') {
                this.spouseEducationScore = 7;
            } else if (this.spouseEducationInput.value == 'bachelors') {
                this.spouseEducationScore = 8;
            } else if (this.spouseEducationInput.value == 'two-or-more') {
                this.spouseEducationScore = 9;
            } else if (this.spouseEducationInput.value == 'masters' || this.spouseEducationInput.value == 'doctoral') {
                this.spouseEducationScore = 10;
            } else {
                this.spouseEducationScore = 0;
            }

            this.spouseWorkExpDiv.style.display = 'block';
            this.highlightDiv(this.spouseWorkExpDiv);
            this.spouseWorkExpDiv.scrollIntoView({ behavior: 'smooth' })

            if (this.spouseEducationInput.value == '') {
                this.spouseEducationScore = 0;
                this.spouseWorkExpDiv.style.display = 'none';
            }
            // this.handleSelects(this.spouseEducationInput);
        })

        this.spouseWorkExpInput.addEventListener('change', () => {
            if (this.spouseWorkExpInput.value == 0) {
                this.spouseWorkExpScore = 0;
            } else if (this.spouseWorkExpInput.value == 1) {
                this.spouseWorkExpScore = 5;
            } else if (this.spouseWorkExpInput.value == 2) {
                this.spouseWorkExpScore = 7;
            } else if (this.spouseWorkExpInput.value == 3) {
                this.spouseWorkExpScore = 8;
            } else if (this.spouseWorkExpInput.value == 4) {
                this.spouseWorkExpScore = 9;
            } else if (this.spouseWorkExpInput.value >= 5) {
                this.spouseWorkExpScore = 10;
            } else {
                this.spouseWorkExpScore = 0;
            }

            this.spouseLangDiv.style.display = 'block';
            this.highlightDiv(this.spouseLangDiv);
            this.spouseLangInput.scrollIntoView({ behavior: 'smooth' })

            if (this.spouseWorkExpInput.value == '') {
                this.spouseWorkExpScore = 0;
                this.spouseLangDiv.style.display = 'none';
            }
            // this.handleSelects(this.spouseWorkExpInput);
        })

        this.spouseLangInput.addEventListener('change', () => {
            if (this.spouseLangInput.value == 'ielts') {
                this.spouseLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.spouseLangScoresDiv);
                this.spouseLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('ielts', this.spouseLangReadingInput);
                this.fillLanguageWriting('ielts', this.spouseLangWritingInput);
                this.fillLanguageListening('ielts', this.spouseLangListeningInput);
                this.fillLanguageSpeaking('ielts', this.spouseLangSpeakingInput);
            } else if (this.spouseLangInput.value == 'celpip') {
                this.spouseLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.spouseLangScoresDiv);
                this.spouseLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('celpip', this.spouseLangReadingInput);
                this.fillLanguageWriting('celpip', this.spouseLangWritingInput);
                this.fillLanguageListening('celpip', this.spouseLangListeningInput);
                this.fillLanguageSpeaking('celpip', this.spouseLangSpeakingInput);
            } else if (this.spouseLangInput.value == 'tef-canada') {
                this.spouseLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.spouseLangScoresDiv);
                this.spouseLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('tef-canada', this.spouseLangReadingInput);
                this.fillLanguageWriting('tef-canada', this.spouseLangWritingInput);
                this.fillLanguageListening('tef-canada', this.spouseLangListeningInput);
                this.fillLanguageSpeaking('tef-canada', this.spouseLangSpeakingInput);
            } else if (this.spouseLangInput.value == 'tcf-canada') {
                this.spouseLangScoresDiv.style.display = 'block';
                this.highlightDiv(this.spouseLangScoresDiv);
                this.spouseLangScoresDiv.scrollIntoView({ behavior: 'smooth' })
                this.fillLanguageReading('tcf-canada', this.spouseLangReadingInput);
                this.fillLanguageWriting('tcf-canada', this.spouseLangWritingInput);
                this.fillLanguageListening('tcf-canada', this.spouseLangListeningInput);
                this.fillLanguageSpeaking('tcf-canada', this.spouseLangSpeakingInput);
            } else if (this.spouseLangInput.value == '') {
                this.spouseLangReadingInput.value = '';
                this.spouseLangWritingInput.value = '';
                this.spouseLangListeningInput.value = '';
                this.spouseLangSpeakingInput.value = '';
                this.spouseLangScoresDiv.style.display = 'none';
            } else {
                this.spouseLangScoresDiv.style.display = 'none';
                this.spouseLangScoresArray = [0, 0, 0, 0];
                this.btnCalculate.disabled = false;
            }
            // this.handleSelects(this.spouseLangInput);
        })

        this.spouseLangReadingInput.addEventListener('change', () => {
            this.getPointsLanguageSpouse(this.spouseLangReadingInput.value, this.spouseLangScoresArray, 0);
            this.spouseLangScore = this.calculateLanguageScore(this.spouseLangScoresArray);
            this.enableCalculateButton();
        })

        this.spouseLangWritingInput.addEventListener('change', () => {
            this.getPointsLanguageSpouse(this.spouseLangWritingInput.value, this.spouseLangScoresArray, 1);
            this.spouseLangScore = this.calculateLanguageScore(this.spouseLangScoresArray);
            this.enableCalculateButton();
        })

        this.spouseLangListeningInput.addEventListener('change', () => {
            this.getPointsLanguageSpouse(this.spouseLangListeningInput.value, this.spouseLangScoresArray, 2);
            this.spouseLangScore = this.calculateLanguageScore(this.spouseLangScoresArray);
            this.enableCalculateButton();
        })

        this.spouseLangSpeakingInput.addEventListener('change', () => {
            this.getPointsLanguageSpouse(this.spouseLangSpeakingInput.value, this.spouseLangScoresArray, 3);
            this.spouseLangScore = this.calculateLanguageScore(this.spouseLangScoresArray);
            this.enableCalculateButton();
        })

        this.btnCalculate.addEventListener('click', this.getCRS.bind(this));

        this.btnReset.addEventListener('click', this.resetAll.bind(this));


        for (let explanation of this.explanations) {
            explanation.addEventListener('click', () => {
                if (explanation.classList.contains('fa-question')) {
                    this.overlay.style.display = 'block';
                    this.overlay.style.opacity = '0.8';
                    this.overlay.style.visibility = 'visible';
                    modal.style.transform = 'translate(-50%, -50%) scale(1)';
                    modal.innerHTML = explanation.parentElement.nextElementSibling.innerHTML;
                } else {
                    return;
                }

                const cancelBtn = modal.querySelectorAll('.cancelButton');

                cancelBtn.forEach(element => {
                    element.addEventListener('click', () => {
                        this.overlay.style.display = 'none';
                        this.overlay.style.opacity = '0';
                        this.overlay.style.visibility = 'hidden';
                        modal.style.transform = 'translate(-50%, -50%) scale(0)';
                    });

                });
            })
        }
    }

    // handleSelects(currentSelect) {
    //     const selects = document.querySelectorAll('select');
    //     let foundCurrent = false;
    //     for (let sel of selects) {
    //         if (foundCurrent) {
    //             sel.value = '';
    //         } else if (sel === currentSelect) {
    //             foundCurrent = true;
    //         }
    //     }
    // }

    // handleDivs(currentDiv, nextDiv) {
    //     const crsDivs = document.querySelectorAll('.crsDiv');
    //     let foundCurrent = false;
    //     for (let div of crsDivs) {
    //         if (foundCurrent) {
    //             div.style.display = 'none';
    //             nextDiv.style.display = 'block';
    //         } else if (div === currentDiv) {
    //             foundCurrent = true;
    //         }
    //     }
    // }

    highlightDiv(div) {
        if (div.querySelector('select').value == '') {
            div.classList.add('highlighted-div');
            setTimeout(() => {
                div.classList.remove('highlighted-div');
            }, 2000);
        } // 2000 milliseconds = 2 seconds
    }

    fillLanguageReading(language, readingInput) {
        if (language == 'ielts') {
            readingInput.options[1].innerHTML = '8.0 - 9.0';
            readingInput.options[2].innerHTML = '7.0 - 7.5';
            readingInput.options[3].innerHTML = '6.5';
            readingInput.options[4].innerHTML = '6.0';
            readingInput.options[5].innerHTML = '5.0 - 5.5';
            readingInput.options[6].innerHTML = '4.0 - 4.5';
            readingInput.options[7].innerHTML = '3.5';
            readingInput.options[8].innerHTML = '0 - 3.0';
        } else if (language == 'tef-canada') {
            readingInput.options[1].innerHTML = '263 - 300';
            readingInput.options[2].innerHTML = '248 - 262';
            readingInput.options[3].innerHTML = '233 - 247';
            readingInput.options[4].innerHTML = '207 - 232';
            readingInput.options[5].innerHTML = '181 - 206';
            readingInput.options[6].innerHTML = '151 - 180';
            readingInput.options[7].innerHTML = '121 - 150';
            readingInput.options[8].innerHTML = '0 - 120';
        } else if (language == 'tcf-canada') {
            readingInput.options[1].innerHTML = '549 - 699';
            readingInput.options[2].innerHTML = '524 - 548';
            readingInput.options[3].innerHTML = '499 - 523';
            readingInput.options[4].innerHTML = '453 - 498';
            readingInput.options[5].innerHTML = '406 - 452';
            readingInput.options[6].innerHTML = '375 - 405';
            readingInput.options[7].innerHTML = '342 - 374';
            readingInput.options[8].innerHTML = '0 - 341';
        } else if (language == 'celpip') {
            readingInput.options[1].innerHTML = '10 - 12';
            readingInput.options[2].innerHTML = '9';
            readingInput.options[3].innerHTML = '8';
            readingInput.options[4].innerHTML = '7';
            readingInput.options[5].innerHTML = '6';
            readingInput.options[6].innerHTML = '5';
            readingInput.options[7].innerHTML = '4';
            readingInput.options[8].innerHTML = 'M, 0 - 3';
        }
    }

    fillLanguageWriting(language, writingInput) {
        if (language == 'ielts') {
            writingInput.options[1].innerHTML = '7.5 - 9.0';
            writingInput.options[2].innerHTML = '7.0';
            writingInput.options[3].innerHTML = '6.5';
            writingInput.options[4].innerHTML = '6.0';
            writingInput.options[5].innerHTML = '5.5';
            writingInput.options[6].innerHTML = '5.0';
            writingInput.options[7].innerHTML = '4.0 - 4.5';
            writingInput.options[8].innerHTML = '0 - 3.5';
        } else if (language == 'tef-canada') {
            writingInput.options[1].innerHTML = '393 - 450';
            writingInput.options[2].innerHTML = '371 - 392';
            writingInput.options[3].innerHTML = '349 - 370';
            writingInput.options[4].innerHTML = '310 - 348';
            writingInput.options[5].innerHTML = '271 - 309';
            writingInput.options[6].innerHTML = '226 - 270';
            writingInput.options[7].innerHTML = '181 - 225';
            writingInput.options[8].innerHTML = '0 - 180';
        } else if (language == 'tcf-canada') {
            writingInput.options[1].innerHTML = '16 - 20';
            writingInput.options[2].innerHTML = '14 - 15';
            writingInput.options[3].innerHTML = '12 - 13';
            writingInput.options[4].innerHTML = '10 - 11';
            writingInput.options[5].innerHTML = '7 - 9';
            writingInput.options[6].innerHTML = '6';
            writingInput.options[7].innerHTML = '4 - 5';
            writingInput.options[8].innerHTML = '0 - 3';
        } else if (language == 'celpip') {
            writingInput.options[1].innerHTML = '10 - 12';
            writingInput.options[2].innerHTML = '9';
            writingInput.options[3].innerHTML = '8';
            writingInput.options[4].innerHTML = '7';
            writingInput.options[5].innerHTML = '6';
            writingInput.options[6].innerHTML = '5';
            writingInput.options[7].innerHTML = '4';
            writingInput.options[8].innerHTML = 'M, 0 - 3';
        }
    }

    fillLanguageListening(language, listeningInput) {
        if (language == 'ielts') {
            listeningInput.options[1].innerHTML = '8.5 - 9.0';
            listeningInput.options[2].innerHTML = '8.0';
            listeningInput.options[3].innerHTML = '7.5';
            listeningInput.options[4].innerHTML = '6.0 - 7.0';
            listeningInput.options[5].innerHTML = '5.5';
            listeningInput.options[6].innerHTML = '5.0';
            listeningInput.options[7].innerHTML = '4.5';
            listeningInput.options[8].innerHTML = '0 - 4.0';
        } else if (language == 'tef-canada') {
            listeningInput.options[1].innerHTML = '316 - 360';
            listeningInput.options[2].innerHTML = '298 - 315';
            listeningInput.options[3].innerHTML = '280 - 297';
            listeningInput.options[4].innerHTML = '249 - 279';
            listeningInput.options[5].innerHTML = '217 - 248';
            listeningInput.options[6].innerHTML = '181 - 216';
            listeningInput.options[7].innerHTML = '145 - 180';
            listeningInput.options[8].innerHTML = '0 - 144';
        } else if (language == 'tcf-canada') {
            listeningInput.options[1].innerHTML = '549 - 699';
            listeningInput.options[2].innerHTML = '523 - 548';
            listeningInput.options[3].innerHTML = '503 - 522';
            listeningInput.options[4].innerHTML = '458 - 502';
            listeningInput.options[5].innerHTML = '398 - 457';
            listeningInput.options[6].innerHTML = '369 - 397';
            listeningInput.options[7].innerHTML = '331 - 368';
            listeningInput.options[8].innerHTML = '0 - 330';
        } else if (language == 'celpip') {
            listeningInput.options[1].innerHTML = '10 - 12';
            listeningInput.options[2].innerHTML = '9';
            listeningInput.options[3].innerHTML = '8';
            listeningInput.options[4].innerHTML = '7';
            listeningInput.options[5].innerHTML = '6';
            listeningInput.options[6].innerHTML = '5';
            listeningInput.options[7].innerHTML = '4';
            listeningInput.options[8].innerHTML = 'M, 0 - 3';
        }
    }

    fillLanguageSpeaking(language, speakingInput) {
        if (language == 'ielts') {
            speakingInput.options[1].innerHTML = '7.5 - 9.0';
            speakingInput.options[2].innerHTML = '7.0';
            speakingInput.options[3].innerHTML = '6.5';
            speakingInput.options[4].innerHTML = '6.0';
            speakingInput.options[5].innerHTML = '5.5';
            speakingInput.options[6].innerHTML = '5.0';
            speakingInput.options[7].innerHTML = '4.0 - 4.5';
            speakingInput.options[8].innerHTML = '0 - 3.5';
        } else if (language == 'tef-canada') {
            speakingInput.options[1].innerHTML = '393 - 450';
            speakingInput.options[2].innerHTML = '371 - 392';
            speakingInput.options[3].innerHTML = '349 - 370';
            speakingInput.options[4].innerHTML = '310 - 348';
            speakingInput.options[5].innerHTML = '271 - 309';
            speakingInput.options[6].innerHTML = '226 - 270';
            speakingInput.options[7].innerHTML = '181 - 225';
            speakingInput.options[8].innerHTML = '0 - 180';
        } else if (language == 'tcf-canada') {
            speakingInput.options[1].innerHTML = '16 - 20';
            speakingInput.options[2].innerHTML = '14 - 15';
            speakingInput.options[3].innerHTML = '12 - 13';
            speakingInput.options[4].innerHTML = '10 - 11';
            speakingInput.options[5].innerHTML = '7 - 9';
            speakingInput.options[6].innerHTML = '6';
            speakingInput.options[7].innerHTML = '4 - 5';
            speakingInput.options[8].innerHTML = '0 - 3';
        } else if (language == 'celpip') {
            speakingInput.options[1].innerHTML = '10 - 12';
            speakingInput.options[2].innerHTML = '9';
            speakingInput.options[3].innerHTML = '8';
            speakingInput.options[4].innerHTML = '7';
            speakingInput.options[5].innerHTML = '6';
            speakingInput.options[6].innerHTML = '5';
            speakingInput.options[7].innerHTML = '4';
            speakingInput.options[8].innerHTML = 'M, 0 - 3';
        }
    }

    getPointsFirstLanguage(statusMarital, singleOrMarried, languageSkill, langArray, index) {
        if (statusMarital == 'married' && singleOrMarried == false) {
            if (languageSkill == 'clb10') {
                langArray[index] = 32;
            } else if (languageSkill == 'clb9') {
                langArray[index] = 29;
            } else if (languageSkill == 'clb8') {
                langArray[index] = 22;
            } else if (languageSkill == 'clb7') {
                langArray[index] = 16;
            } else if (languageSkill == 'clb6') {
                langArray[index] = 8;
            } else if (languageSkill == 'clb5' || languageSkill == 'clb4') {
                langArray[index] = 6;
            } else {
                langArray[index] = 0;
            }
        } else if ((statusMarital == 'married' && singleOrMarried == true) || statusMarital == 'single') {
            if (languageSkill == 'clb10') {
                langArray[index] = 34;
            } else if (languageSkill == 'clb9') {
                langArray[index] = 31;
            } else if (languageSkill == 'clb8') {
                langArray[index] = 23;
            } else if (languageSkill == 'clb7') {
                langArray[index] = 17;
            } else if (languageSkill == 'clb6') {
                langArray[index] = 9;
            } else if (languageSkill == 'clb5' || languageSkill == 'clb4') {
                langArray[index] = 6;
            } else {
                langArray[index] = 0;
            }
        }
    }

    getPointsSecondLanguage(languageSkill, langArray, index) {
        if (languageSkill == 'clb9' || languageSkill == 'clb10') {
            langArray[index] = 6;
        } else if (languageSkill == 'clb7' || languageSkill == 'clb8') {
            langArray[index] = 3;
        } else if (languageSkill == 'clb5' || languageSkill == 'clb6') {
            langArray[index] = 1;
        } else {
            langArray[index] = 0;
        }
    }

    getPointsLanguageSpouse(languageSkill, langArray, index) {
        if (languageSkill == 'clb10' || languageSkill == 'clb9') {
            langArray[index] = 5;
        } else if (languageSkill == 'clb8' || languageSkill == 'clb7') {
            langArray[index] = 3;
        } else if (languageSkill == 'clb6' || languageSkill == 'clb5') {
            langArray[index] = 1;
        } else {
            langArray[index] = 0;
        }
    }

    triggerSecondLangDiv(reading, writing, listening, speaking, divSecondLang) {
        if ((reading.value == '' || reading.value == 'first-language-reading-clb6') || (writing.value == '' || writing.value == 'first-language-writing-clb6') || (listening.value == '' || listening.value == 'first-language-listening-clb6') || (speaking.value == '' || speaking.value == 'first-language-speaking-clb6')) {
            divSecondLang.style.display = 'none';
        } else {
            divSecondLang.style.display = 'block';
            this.highlightDiv(divSecondLang);
            divSecondLang.scrollIntoView({ behavior: 'smooth' })
        }
    }

    getScoreOfFirstLangSkill(index, skill, langSkillInput) {
        if (langSkillInput.value == '') {
            firstLangScoresArray[index] = 0;
        } else if (langSkillInput.value == `first-language-${skill}-clb6`) {
            firstLangScoresArray[index] = 0;
        } else if (langSkillInput.value == `first-language-${skill}-clb7`) {
            firstLangScoresArray[index] = 4;
        } else if (langSkillInput.value == `first-language-${skill}-clb8`) {
            firstLangScoresArray[index] = 5;
        } else if (langSkillInput.value == `first-language-${skill}-clb9`) {
            firstLangScoresArray[index] = 6;
        }
    }

    calculateLanguageScore(langArray) {
        let langScore = langArray[0] + langArray[1] + langArray[2] + langArray[3];
        return langScore;
    }

    spanMarriedOrSingle(span) {
        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            span.textContent = window.location.href.includes('/en') ? 'or your spouse or common law partner (if they will come with you to Canada)' : 'ou votre conjoint ou conjoint de fait (s\'ils vous accompagnent au Canada)';
        } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
            span.textContent = '';
        }
    }

    errorLanguageSkill(input, skill, nextInput, secondLanguageDiv) {
        const isEnglish = window.location.href.includes('/en');
        const translatedSkill = isEnglish
            ? skill
            : {
                reading: 'compréhension écrite',
                writing: 'expression écrite',
                listening: 'compréhension orale',
                speaking: 'expression orale',
            }[skill];

        const message = isEnglish
            ? `Just remember that you should get at least "CLB 7" in ${skill} skill to be eligible to Express Entry`
            : `N'oubliez pas que vous devez obtenir au moins "NCLC 7" dans la compétence ${translatedSkill} pour être admissible à Entrée express`;

        if (input.value == '' || input.value == 'clb6' || input.value == 'clb5' || input.value == 'clb4' || input.value == 'clb3') {
            this.noticeDiv.style.display = 'block';
            this.noticeDiv.innerHTML += `
            <li class="listElement">${message}</li>
            `;
            setTimeout(() => {
                this.noticeDiv.style.display = 'none';
                this.noticeDiv.innerHTML = '';
                input.scrollIntoView({ behavior: 'smooth' })
            }, 4000);
            secondLanguageDiv.style.display = 'none';
            nextInput.disabled ? nextInput.disabled = true : nextInput.disabled = false;
        } else {
            nextInput.disabled = false;
        }
    }

    triggerWorkExpDiv() {
        if (this.secondLangReadingInput.value != '' && this.secondLangWritingInput.value != '' && this.secondLangListeningInput.value != '' && this.secondLangSpeakingInput.value != '') {
            this.workExpCanDiv.style.display = 'block';
            this.highlightDiv(this.workExpCanDiv);
            this.workExpCanInput.scrollIntoView({ behavior: 'smooth' })
        } else {
            this.workExpCanDiv.style.display = 'none';
        }
    }

    enableCalculateButton() {
        if (this.spouseLangReadingInput.value != '' && this.spouseLangWritingInput.value != '' && this.spouseLangListeningInput.value != '' && this.spouseLangSpeakingInput.value != '') {
            this.btnCalculate.disabled = false;
        } else {
            this.btnCalculate.disabled = true;
        }
    }

    // checkEmptySelectAndGetCRS() {
    //     let isEnglish = window.location.href.includes('/en');
    //     const selects = document.querySelectorAll('select');
    //     const selectsWithDisplayBlock = [];
    //     let emptySelect = false;

    //     selects.forEach(select => {
    //         const parentDiv = select.closest('.crsDiv'); // Find the closest parent with class 'crsDiv'
    //         if (parentDiv) {
    //             const computedStyle = getComputedStyle(parentDiv);
    //             if (computedStyle.display === 'block') {
    //                 selectsWithDisplayBlock.push(select);
    //                 if (select.value === '') {
    //                     emptySelect = true;
    //                     select.style.border = '3px solid red';
    //                     select.scrollIntoView({ behavior: 'smooth' });
    //                 } else {
    //                     select.style.border = '3px solid green';
    //                 }

    //                 select.addEventListener('change', () => {
    //                     select.style.border = '3px solid green';
    //                     if (select.value !== '') {
    //                         emptySelect = false;
    //                     }
    //                 });
    //                 console.log(select.value + '****<br>' + emptySelect);
    //             }
    //         }
    //     });

    //     if (emptySelect) {
    //         this.noticeDiv.style.display = 'block';
    //         this.noticeDiv.innerHTML += isEnglish ? '<li class="listElement">Please fill all the fields</li>' : '<li class="listElement">Veuillez remplir tous les champs</li>';
    //         setTimeout(() => {
    //             this.noticeDiv.style.display = 'none';
    //             this.noticeDiv.innerHTML = '';
    //         }, 4000);
    //     } else {
    //         this.getCRS();
    //     }
    // }


    getCRS() {
        let studyPlusLanguage = 0
        let studyPlusWorkExpCan = 0
        let workExpPlusLanguage = 0
        let workExpPlusWorkExpCan = 0
        let qualificationPlusLanguage = 0
        let studiesEntries = 0
        let experienceEntries = 0
        let qualificationEntries = 0
        let pointsForFrenchlanguageSkills = 0
        let pointsForStudiesInCanada = 0
        let allSpouseScore = 0;

        let firstLangScoree = this.calculateLanguageScore(this.firstLangScoresArray);

        let readingSkillFirstLanguage = this.firstLangScoresArray[0];
        let writingSkillFirstLanguage = this.firstLangScoresArray[1];
        let listeningSkillFirstLanguage = this.firstLangScoresArray[2];
        let speakingSkillFirstLanguage = this.firstLangScoresArray[3];

        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            if (readingSkillFirstLanguage < 29 || writingSkillFirstLanguage < 29 || listeningSkillFirstLanguage < 29 || speakingSkillFirstLanguage < 29) {
                if (this.educationInput.value == 'secondary' || this.educationInput.value == 'notCompleted') {
                    studyPlusLanguage = 0;
                } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                    studyPlusLanguage = 13;
                } else {
                    studyPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 29 && writingSkillFirstLanguage >= 29 && listeningSkillFirstLanguage >= 29 && speakingSkillFirstLanguage >= 29) {
                if (this.educationInput.value == 'secondary' || this.educationInput.value == 'notCompleted') {
                    studyPlusLanguage = 0;
                } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                    studyPlusLanguage = 25;
                } else {
                    studyPlusLanguage = 50;
                }
            } else {
                studyPlusLanguage = 0;
            }
        } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
            if (readingSkillFirstLanguage < 31 || writingSkillFirstLanguage < 31 || listeningSkillFirstLanguage < 31 || speakingSkillFirstLanguage < 31) {
                if (this.educationInput.value == 'secondary' || this.educationInput.value == 'notCompleted') {
                    studyPlusLanguage = 0;
                } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                    studyPlusLanguage = 13;
                } else {
                    studyPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 31 && writingSkillFirstLanguage >= 31 && listeningSkillFirstLanguage >= 31 && speakingSkillFirstLanguage >= 31) {
                if (this.educationInput.value == 'secondary' || this.educationInput.value == 'notCompleted') {
                    studyPlusLanguage = 0;
                } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                    studyPlusLanguage = 25;
                } else {
                    studyPlusLanguage = 50;
                }
            } else {
                studyPlusLanguage = 0;
            }
        }


        if (this.workExpCanInput.value == 1) {
            if (this.educationInput.value == 'secondary') {
                studyPlusWorkExpCan = 0;
            } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                studyPlusWorkExpCan = 13;
            } else {
                studyPlusWorkExpCan = 25;
            }
        } else if (this.workExpCanInput.value > 1) {
            if (this.educationInput.value == 'secondary') {
                studyPlusWorkExpCan = 0;
            } else if (this.educationInput.value == 'one-year' || this.educationInput.value == 'two-year' || this.educationInput.value == 'bachelors') {
                studyPlusWorkExpCan = 25;
            } else {
                studyPlusWorkExpCan = 50;
            }
        } else {
            studyPlusWorkExpCan = 0;
        }

        studiesEntries = studyPlusLanguage + studyPlusWorkExpCan;
        studiesEntries > 50 ? studiesEntries = 50 : studiesEntries = studiesEntries;


        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            if (readingSkillFirstLanguage < 29 || writingSkillFirstLanguage < 29 || listeningSkillFirstLanguage < 29 || speakingSkillFirstLanguage < 29) {
                if (this.workExpInput.value == 0) {
                    workExpPlusLanguage = 0;
                } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                    workExpPlusLanguage = 13;
                } else {
                    workExpPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 29 && writingSkillFirstLanguage >= 29 && listeningSkillFirstLanguage >= 29 && speakingSkillFirstLanguage >= 29) {
                if (this.workExpInput.value == 0) {
                    workExpPlusLanguage = 0;
                } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                    workExpPlusLanguage = 25;
                } else {
                    workExpPlusLanguage = 50;
                }
            } else {
                workExpPlusLanguage = 0;
            }
        } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
            if (readingSkillFirstLanguage < 31 || writingSkillFirstLanguage < 31 || listeningSkillFirstLanguage < 31 || speakingSkillFirstLanguage < 31) {
                if (this.workExpInput.value == 0) {
                    workExpPlusLanguage = 0;
                } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                    workExpPlusLanguage = 13;
                } else {
                    workExpPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 31 && writingSkillFirstLanguage >= 31 && listeningSkillFirstLanguage >= 31 && speakingSkillFirstLanguage >= 31) {
                if (this.workExpInput.value == 0) {
                    workExpPlusLanguage = 0;
                } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                    workExpPlusLanguage = 25;
                } else {
                    workExpPlusLanguage = 50;
                }
            } else {
                workExpPlusLanguage = 0;
            }
        }

        if (this.workExpCanInput.value == 1) {
            if (this.workExpInput.value == 0 || this.workExpInput.value == '') {
                workExpPlusWorkExpCan = 0;
            } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                workExpPlusWorkExpCan = 13;
            } else {
                workExpPlusWorkExpCan = 25;
            }
        } else if (this.workExpCanInput.value > 1) {
            if (this.workExpInput.value == 0 || this.workExpInput.value == '') {
                workExpPlusWorkExpCan = 0;
            } else if (this.workExpInput.value == 1 || this.workExpInput.value == 2) {
                workExpPlusWorkExpCan = 25;
            } else {
                workExpPlusWorkExpCan = 50;
            }
        } else {
            workExpPlusWorkExpCan = 0;
        }

        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            if (readingSkillFirstLanguage < 29 || writingSkillFirstLanguage < 29 || listeningSkillFirstLanguage < 29 || speakingSkillFirstLanguage < 29) {
                if (this.qualificationInput.value == 'no') {
                    qualificationPlusLanguage = 0;
                } else {
                    qualificationPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 29 && writingSkillFirstLanguage >= 29 && listeningSkillFirstLanguage >= 29 && speakingSkillFirstLanguage >= 29) {
                if (this.qualificationInput.value == 'no') {
                    qualificationPlusLanguage = 0;
                } else {
                    qualificationPlusLanguage = 50;
                }
            } else {
                qualificationPlusLanguage = 0;
            }
        } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
            if (readingSkillFirstLanguage < 31 || writingSkillFirstLanguage < 31 || listeningSkillFirstLanguage < 31 || speakingSkillFirstLanguage < 31) {
                if (this.qualificationInput.value == 'no') {
                    qualificationPlusLanguage = 0;
                } else {
                    qualificationPlusLanguage = 25;
                }
            } else if (readingSkillFirstLanguage >= 31 && writingSkillFirstLanguage >= 31 && listeningSkillFirstLanguage >= 31 && speakingSkillFirstLanguage >= 31) {
                if (this.qualificationInput.value == 'no') {
                    qualificationPlusLanguage = 0;
                } else {
                    qualificationPlusLanguage = 50;
                }
            } else {
                qualificationPlusLanguage = 0;
            }
        }

        if (this.firstLangTypeInput.value == 'tef-canada' || this.firstLangTypeInput.value == 'tcf-canada') {
            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                if (firstLangScoree >= 64 && this.secondLangScore >= 4) {
                    pointsForFrenchlanguageSkills = 50;
                } else if (firstLangScoree >= 64 && this.secondLangScore < 4) {
                    pointsForFrenchlanguageSkills = 25;
                } else {
                    pointsForFrenchlanguageSkills = 0;
                }
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                if (firstLangScoree >= 68 && this.secondLangScore >= 4) {
                    pointsForFrenchlanguageSkills = 50;
                } else if (firstLangScoree >= 68 && this.secondLangScore < 4) {
                    pointsForFrenchlanguageSkills = 25;
                } else {
                    pointsForFrenchlanguageSkills = 0;
                }
            }
        } else if (this.firstLangTypeInput.value != 'tef-canada' || this.firstLangTypeInput.value != 'tcf-canada') {
            if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
                if (firstLangScoree >= 64 && this.secondLangScore >= 12) {
                    pointsForFrenchlanguageSkills = 50;
                } else {
                    pointsForFrenchlanguageSkills = 0;
                }
            } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
                if (firstLangScoree >= 68 && this.secondLangScore >= 12) {
                    pointsForFrenchlanguageSkills = 50;
                } else {
                    pointsForFrenchlanguageSkills = 0;
                }
            }
        }

        if (this.studiesInCanadaInput.value == 'yes') {
            if (this.studiesInCanadaTypeInput.value == 'diploma') {
                pointsForStudiesInCanada = 15;
            } else if (this.studiesInCanadaTypeInput.value == 'bachelor') {
                pointsForStudiesInCanada = 30;
            } else {
                pointsForStudiesInCanada = 0;
            }
        }

        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            this.secondLangScore >= 22 ? this.secondLangScore = 22 : this.secondLangScore = this.secondLangScore;
        } else if ((this.maritalStatus.value == 'married' && this.likeSingle == true) || this.maritalStatus.value == 'single') {
            this.secondLangScore >= 24 ? this.secondLangScore = 24 : this.secondLangScore = this.secondLangScore;
        }

        experienceEntries = workExpPlusLanguage + workExpPlusWorkExpCan;
        experienceEntries > 50 ? experienceEntries = 50 : experienceEntries = experienceEntries;

        qualificationEntries = qualificationPlusLanguage + this.qualificationScore;
        qualificationEntries > 50 ? qualificationEntries = 50 : qualificationEntries = qualificationEntries;

        this.skillTransferabilityScore = studiesEntries + experienceEntries + qualificationEntries;
        this.skillTransferabilityScore > 100 ? this.skillTransferabilityScore = 100 : this.skillTransferabilityScore = this.skillTransferabilityScore;

        allSpouseScore = this.spouseEducationScore + this.spouseWorkExpScore + this.spouseLangScore;


        this.additionalPointsScore = this.relativesScore + pointsForFrenchlanguageSkills + pointsForStudiesInCanada + this.reservedJobScore + this.nominationScore
        this.additionalPointsScore > 600 ? this.additionalPointsScore = 600 : this.additionalPointsScore = this.additionalPointsScore;

        this.count = this.ageScore + this.educationScore + firstLangScoree + this.secondLangScore + this.workExpeCanScore + this.skillTransferabilityScore + this.additionalPointsScore + allSpouseScore;
        this.count > 1200 ? this.count = 1200 : this.count = this.count;

        // let modalResult = document.querySelector('#modalResult');

        let humanFactors = window.location.href.includes('/en') ? 'Human capital factors' : 'Facteurs de capital humain';
        let languages = window.location.href.includes('/en') ? 'Languages' : 'Langues';
        let canWorkExp = window.location.href.includes('/en') ? 'Canadian Work Experience' : 'Expérience Professionnelle Canadienne';
        let subtotal = window.location.href.includes('/en') ? 'Subtotal' : 'Sous-total';
        let spouseFactors = window.location.href.includes('/en') ? 'Spouse\'s factors' : 'Facteurs du conjoint';
        let skillTrans = window.location.href.includes('/en') ? 'Skill transferability factors' : 'Facteurs de transférabilité des compétences';
        let to50max = window.location.href.includes('/en') ? 'to a maximum of 50 points' : 'à un maximum de 50 points';
        let offiLangProf = window.location.href.includes('/en') ? 'Official Language proficiency' : 'Compétence linguistique officielle';
        let foreignWorkExp = window.location.href.includes('/en') ? 'Foreign work experience' : 'Expérience de travail à l\'étranger';
        let certificateQual = window.location.href.includes('/en') ? 'Certificate of qualification' : 'Certificat de qualification';
        let addPoints = window.location.href.includes('/en') ? 'Additional points' : 'Points additionnels';
        let provNom = window.location.href.includes('/en') ? 'Provincial nomination' : 'Nomination provinciale';
        let jobOffer = window.location.href.includes('/en') ? 'Job offer' : 'Offre d\'emploi';
        let studiesCan = window.location.href.includes('/en') ? 'Studies in Canada' : 'Études au Canada';
        let frSkills = window.location.href.includes('/en') ? 'French language skills' : 'Compétences linguistiques en français';
        let siblingCan = window.location.href.includes('/en') ? 'Sibling in Canada' : 'Frère ou sœur au Canada';

        this.modalResult.innerHTML += `
        <div class="modalContent">
        <div class="flex flex-col md:gap-2 justify-center items-center">
            <h1 class="text-red-800 font-bold uppercase underline">${humanFactors}</h1>
            <p class="text-center">Age + Education + ${languages} + ${canWorkExp}</p>
            <p>${this.ageScore} + ${this.educationScore} + ${firstLangScoree + this.secondLangScore} + ${this.workExpeCanScore}</p>
            <h3 class="italic uppercase font-bold mt-3">${subtotal} = ${this.ageScore + this.educationScore + firstLangScoree + this.secondLangScore + this.workExpeCanScore}</h3>
        </div>
        `
        if (this.maritalStatus.value == 'married' && this.likeSingle == false) {
            this.modalResult.innerHTML += `
                <div class="flex flex-col md:gap-2 justify-center items-center mt-2">
                    <h1 class="text-red-800 font-bold uppercase underline">${spouseFactors}</h1>
                    <p class="text-center">Education + ${languages} + ${canWorkExp}</p>
                    <p>${this.spouseEducationScore} + ${this.spouseLangScore} + ${this.spouseWorkExpScore}</p>
                    <h3 class="italic uppercase font-bold mt-3">${subtotal} = ${allSpouseScore}</h3>
                </div>
                `;
        }

        this.modalResult.innerHTML += `
        <div class="flex flex-col md:gap-2 justify-center items-center mt-2">
            <h1 class="text-red-800 font-bold uppercase underline">${skillTrans}</h1>
            <p class="font-bold underline text-center mt-2">Education (${to50max})</p>
            <p class="indent-10 text-center">Education + ${offiLangProf} = ${studyPlusLanguage}</p>
            <p class="indent-10 text-center">Education + ${canWorkExp} = ${studyPlusWorkExpCan}</p>
            <h3 class="font-bold italic mt-2">${subtotal} = ${studiesEntries}</h3>
            <p class="font-bold underline text-center mt-2">${foreignWorkExp} (${to50max})</p>
            <p class="indent-10 text-center">${foreignWorkExp} + ${offiLangProf} = ${workExpPlusLanguage}</p>
            <p class="indent-10 text-center">${foreignWorkExp} + ${canWorkExp} = ${workExpPlusWorkExpCan}</p>
            <h3 class="italic font-bold mt-2 mb-2">${subtotal} = ${experienceEntries}</h3>
            <p>${certificateQual} = ${qualificationEntries}</p>
            <h3 class="italic uppercase font-bold mt-2">${subtotal} = ${this.skillTransferabilityScore}</h3>
        </div>

        <div class="flex flex-col md:gap-2 justify-center items-center mt-2">
            <h1 class="text-red-800 font-bold uppercase underline">${addPoints}</h1>
            <p class="text-center">${provNom} + ${jobOffer} + ${studiesCan} + ${frSkills} + ${siblingCan}</p>
            <p>${this.nominationScore} + ${this.reservedJobScore} + ${pointsForStudiesInCanada} + ${pointsForFrenchlanguageSkills} + ${this.relativesScore}</p>
            <h3 class="italic uppercase font-bold mt-1">${subtotal} = ${this.additionalPointsScore}</h3>
        </div>

        <h1 class="text-red-800 font-bold uppercase mt-4 text-center text-2xl md:text-3xl underline">Total:</h1>
        <p class="text-red-600 font-bold mt-2 text-center text-xl md:text-2xl">${this.ageScore + this.educationScore + firstLangScoree + this.secondLangScore + this.workExpeCanScore} + ${allSpouseScore} + ${this.skillTransferabilityScore} + ${this.additionalPointsScore}<p>
        <p class="font-bold text-green-600 text-2xl md:text-3xl mt-4 text-center">${this.count}</p>
        </div>
        `;

        this.overlay.style.display = 'block';
        this.overlay.style.opacity = '0.8';
        this.overlay.style.visibility = 'visible';
        this.modalResult.style.transform = 'translate(-50%, -50%) scale(1)';


        let cancelButton = document.querySelector('#cancel');

        cancelButton.addEventListener('click', () => {
            this.overlay.style.display = 'none';
            this.overlay.style.opacity = '0';
            this.overlay.style.visibility = 'hidden';
            this.modalResult.style.transform = 'translate(-50%, -50%) scale(0)';
            this.modalResult.innerHTML = `<button id="cancel" class="cancel absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
            <i class="fa-solid fa-xmark"></i>
        </button>`;
            this.resetAll();
        });

    }

    resetAll() {
        this.count = 0;
        this.educationScore = 0;
        this.ageScore = 0;
        this.firstLangScore = 0;
        this.firstLangScoresArray = [0, 0, 0, 0];
        this.secondLangScore = 0;
        this.workExpeScore = 0;
        this.reservedJobScore = 0;
        this.adaptabilityScore = 0;
        this.additionalPointsScore = 0;
        this.skillTransferabilityScore = 0;
        this.qualificationScore = 0;
        this.relativesScore = 0;
        this.spouseEducationScore = 0;
        this.spouseWorkExpScore = 0;
        this.spouseLangScore = 0;
        this.spouseLangScoresArray = [0, 0, 0, 0];
        // spouseLangReadingScore = 0;
        // spouseLangWritingScore = 0;
        // spouseLangListeningScore = 0;
        // spouseLangSpeakingScore = 0;

        this.maritalStatus.value = '';
        this.likeSingle = false;
        this.ageInput.value = '';
        this.educationInput.value = '';
        this.firstLangInput.value = '';
        this.firstLangTypeInput.value = '';
        this.firstLangReadingInput.value = '';
        this.firstLangWritingInput.value = '';
        this.firstLangListeningInput.value = '';
        this.firstLangSpeakingInput.value = '';
        this.secondLangInput.value = '';
        this.secondLangTypeInput.value = '';
        this.secondLangReadingInput.value = '';
        this.secondLangWritingInput.value = '';
        this.secondLangListeningInput.value = '';
        this.secondLangSpeakingInput.value = '';
        this.workExpInput.value = '';
        this.workExpCanInput.value = '';
        this.qualificationInput.value = '';
        this.reservedJobInput.value = '';
        this.jobOfferTeerInput.value = '';
        this.nominationInput.value = '';
        this.relativesInput.value = '';
        this.studiesInCanadaInput.value = '';
        this.studiesInCanadaTypeInput.value = '';
        this.spouseEducationInput.value = '';
        this.spouseWorkExpInput.value = '';
        this.spouseLangInput.value = '';
        this.spouseCanadianStatusInput.value = '';
        this.spouseFollowerInput.value = '';
        this.spouseLangReadingInput.value = '';
        this.spouseLangWritingInput.value = '';
        this.spouseLangListeningInput.value = '';
        this.spouseLangSpeakingInput.value = '';
        this.ageDiv.style.display = 'none';
        this.spouseCanadianStatusDiv.style.display = 'none';
        this.spouseFollowerDiv.style.display = 'none';
        this.educationDiv.style.display = 'none';
        this.studiesInCanadaDiv.style.display = 'none';
        this.studiesInCanadaTypeDiv.style.display = 'none';

        this.firstLangDiv.style.display = 'none';
        this.firstLangTypeDiv.style.display = 'none';
        this.firstLangScoresDiv.style.display = 'none';

        this.secondLangDiv.style.display = 'none';
        this.secondLangTypeDiv.style.display = 'none';
        this.secondLangScoresDiv.style.display = 'none';

        this.workExpCanDiv.style.display = 'none';
        this.workExpDiv.style.display = 'none';
        this.qualificationDiv.style.display = 'none';
        this.reservedJobDiv.style.display = 'none';
        this.jobOfferTeerDiv.style.display = 'none';
        this.nominationDiv.style.display = 'none';
        this.relativesDiv.style.display = 'none';
        this.spouseEducationDiv.style.display = 'none';
        this.spouseWorkExpDiv.style.display = 'none';
        this.spouseLangDiv.style.display = 'none';

        this.btnReset.disabled = true;
        this.btnCalculate.disabled = true;
        this.modalResult.style.backgroundColor = '#f7e6e6';
    }

    // hideResultModal() {
    //     console.log('hideResultModal');
    //     this.modalResult.style.transform = 'translate(-50%, -50%) scale(0)';
    //     this.overlay.style.display = 'none';
    //     this.overlay.style.opacity = '0';
    //     this.overlay.style.visibility = 'hidden';
    //     // modalResult.querySelector('div').remove();
    //     // this.cancelButton.removeEventListener('click', this.hideResultModal.bind(this));
    //     this.resetAll().bind(this);
    //     this.modalResult.innerHTML = `
    //         <button id="cancel" class="cancel absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
    //         <i class="fa-solid fa-xmark"></i>
    //     </button>
    //     `
    // }
}