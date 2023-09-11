<x-app-layout>
    <section id="eligibility_calculator">
        <div>
            <h1 class='eligTitle text-4xl font-bold mt-10'>{{ __('eligibility_calculator') }}</h1>
            <p class='text-xl mt-5'>{{ __('eligibilityMsg') }}</p>
            <p class='text-xl mt-5'>{{ __('eligibilityMsg2') }}</p>
        
            <div class='eligibility-div bg-slate-200 w-[90%] md:w-2/3 mt-10 mx-auto text-center p-6 border-2 border-black rounded'>
                <div class="flex flex-col justify-center items-center gap-4">
                    <h1 class='maritalTitle text-xl md:text-2xl font-bold'>{{ __('maritalStatus') }}</h1>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="marital-status rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis" name="marital-status" id="marital-status">
                            <option value="">{{ __('select') }}</option>
                            <option value="single">{{ __('singleEquivalent') }}</option>
                            <option value="married">{{ __('marriedEquivalent') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white questionMaritalStatus"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationMaritalStatus">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600 absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="maritalModalExplanation pt-5">
                                <li><b>{{ __('single') }}</b> {{ __('singleMsg') }}</li>
                                <li class="mt-1"><b>{{ __('annulMarriage') }}</b> {{ __('annulMarriageMsg') }}</li>
                                <li class="mt-1"><b>{{ __('widowed') }}</b> {{ __('widowedMsg') }}</li>
                                <li class="mt-1"><b>{{ __('separated') }}</b> {{ __('separatedMsg') }}</li>
                                <li class="mt-1"><b>{{ __('divorced') }}</b> {{ __('divorcedMsg') }}</li>
                                <li class="mt-1"><b>{{ __('married') }}</b> {{ __('marriedMsg') }}</li>
                                <li class="mt-1"><b>{{ __('commonLaw') }}</b> {{ __('commonLawMsg') }}</li>
                            </p>
                    </div>
                </div>
        
                <div class="ageDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold'>Age</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="age" id="age">
                            <option value="">{{ __('select') }}</option>
                            <option value="17">17 & -</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47 & +</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionAge"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationAge">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="ageModalExplanation pt-5">
                            <b>{{ __('ageMsg') }}</b>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="educationDiv flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Education</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="education" id="education">
                            <option value="">{{ __('select') }}</option>
                            <option value="secondary">{{ __('secondaryEdu') }}</option>
                            <option value="one-year">{{ __('oneYear') }}</option>
                            <option value="two-year">{{ __('twoYear') }}</option>
                            <option value="bachelors">{{ __('bachelors') }}</option>
                            <option value="two-or-more">{{ __('twoOrMore') }}</option>
                            <option value="masters">{{ __('masters') }}</option>
                            <option value="doctoral">{{ __('phd') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="educationModalExplanation pt-5">
                            <b><u>{{ __('eduMsg1') }}</u></b>

                            <li>{{ __('eduMsg2') }}</li>
                            <li>{{ __('eduMsg3') }}</li>
                            <b><u>Note:</u></b> {{ __('eduMsg4') }}
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="first-language-div">
                    <h1 class='firstLangTitle text-xl md:text-2xl font-bold mt-10'>{{ __('firstLang') }}</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="first-language-availability">{{ __('testValid') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="first-language-availability" id="first-language-availability">
                                <option value="">{{ __('select') }}</option>
                                <option value="no">{{ __('no') }}</option>
                                <option value="yes">{{ __('yes') }}</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionFirstLangAvailability"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationFirstLangAvailability">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b>{{ __('firstLangMsg') }}</b>
                            </p>
                        </div>
                    </div>
        
                    <div style="display: none;" class="first-language-typeDiv flex justify-center items-center gap-4 mt-8">
                            <label class="font-bold italic text-slate-600" htmlFor="first-language-type">{{ __('whichLang1') }}</label><br>
                            <div class="flex flex-row justify-center items-center gap-2"></div>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="first-language-type" id="first-language-type">
                                <option value="">{{ __('select') }}</option>
                                <option value="ielts">IELTS</option>
                                <option value="celpip">CELPIP</option>
                                <option value="tef-canada">TEF Canada</option>
                                <option value="tcf-canada">TCF Canada</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionFirstLangScores"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationFirstLangScores">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b><u>{{ __('firstLangExp') }}</u></b>
                                <div class="text-start">
                                    <li><b>Reading</b> = Compréhension de l'écrit</li>
                                    <li><b>Writing</b> = Expression écrite</li>
                                    <li><b>Listening</b> = Compréhension de l'oral</li>
                                    <li><b>Speaking</b> = Expression orale</li>
                                </div>
                            </p>
                        </div>
                    </div>
                    
                    <div style="display: none;" class="first-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">{{ __('setUrScores') }}</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-reading">{{ __('reading') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-reading" id="first-language-reading">
                                <option value="">{{ __('select') }}</option>
                                <option value="first-language-reading-clb6">{{ __('clb') }} 6 {{ __('orLess') }}</option>
                                <option value="first-language-reading-clb7">{{ __('clb') }} 7</option>
                                <option value="first-language-reading-clb8">{{ __('clb') }} 8</option>
                                <option value="first-language-reading-clb9">{{ __('clb') }} 9 {{ __('orMore') }}</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-writing">{{ __('writing') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-writing" id="first-language-writing">
                                <option value="">{{ __('select') }}</option>
                                <option value="first-language-writing-clb6">{{ __('clb') }} 6 {{ __('orLess') }}</option>
                                <option value="first-language-writing-clb7">{{ __('clb') }} 7</option>
                                <option value="first-language-writing-clb8">{{ __('clb') }} 8</option>
                                <option value="first-language-writing-clb9">{{ __('clb') }} 9 {{ __('orMore') }}</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-listening">{{ __('listening') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-listening" id="first-language-listening">
                                <option value="">{{ __('select') }}</option>
                                <option value="first-language-listening-clb6">{{ __('clb') }} 6 {{ __('orLess') }}</option>
                                <option value="first-language-listening-clb7">{{ __('clb') }} 7</option>
                                <option value="first-language-listening-clb8">{{ __('clb') }} 8</option>
                                <option value="first-language-listening-clb9">{{ __('clb') }} 9 {{ __('orMore') }}</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-speaking">{{ __('speaking') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-speaking" id="first-language-speaking">
                                <option value="">{{ __('select') }}</option>
                                <option value="first-language-speaking-clb6">{{ __('clb') }} 6 {{ __('orLess') }}</option>
                                <option value="first-language-speaking-clb7">{{ __('clb') }} 7</option>
                                <option value="first-language-speaking-clb8">{{ __('clb') }} 8</option>
                                <option value="first-language-speaking-clb9">{{ __('clb') }} 9 {{ __('orMore') }}</option>
                            </select>
                        </div>
                </div>
        
                <div style="display: none;" class="second-language-div">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('secondLang') }}</h1>
                    <div class="flex flex-col justify-center items-center gap-4">
                        <label class="font-bold italic text-slate-600" htmlFor="second-language-availability">{{ __('secondLangValid') }}</label>
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="second-language-availability" id="second-language-availability">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                    </div>

                    <div style="display: none;" class="flex flex-col justify-center items-center gap-4 mt-10 second-language-typeDiv">
                        <label class="font-bold italic text-slate-600" htmlFor="second-language-type">{{ __('whichLang2') }}</label><br>
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="second-language-type" id="second-language-type">
                            <option value="">{{ __('select') }}</option>
                            <option value="ielts">IELTS</option>
                            <option value="celpip">CELPIP</option>
                            <option value="tef-canada">TEF Canada</option>
                            <option value="tcf-canada">TCF Canada</option>
                        </select>
                    </div>
                    
        
                    <div style="display: none;" class="second-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-10">
                        <label class="font-bold italic text-slate-600">{{ __('gotClb') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2 mt-3">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="second-language-scores" id="second-language-scores">
                                <option value="">{{ __('select') }}</option>
                                <option value="no">{{ __('no') }}</option>
                                <option value="yes">{{ __('yes') }}</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSecondLangScores"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationSecondLangScores">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b><u>{{ __('secondLangExp') }}</u></b>
                                <div class="text-start">
                                    <li><b>Reading</b> = Compréhension de l'écrit</li>
                                    <li><b>Writing</b> = Expression écrite</li>
                                    <li><b>Listening</b> = Compréhension de l'oral</li>
                                    <li><b>Speaking</b> = Expression orale</li>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('workExp') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience">{{ __('workExpHowMany') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience" id="work-experience">
                            <option value="">{{ __('select') }}</option>
                            <option value="1">1 {{ __('year') }}</option>
                            <option value="2-3">2 - 3 {{ __('years') }}</option>
                            <option value="4-5">4 - 5 {{ __('years') }}</option>
                            <option value="6">6 {{ __('years') }} {{ __('orMore') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('workExp1') }}</u></b> <br><br>
                            <li><b>{{ __('continuous') }}</b> {{ __('continuousMsg') }}</li>
                            <li><b>{{ __('sameOcc') }}</b> {{ __('sameOccMsg') }}</li>
                            <li>{{ __('workExp2') }}</li></li>
                            <li><b>{{ __('fullTime') }}</b> {{ __('fullTimeMsg') }}</li>
                            <li><b>{{ __('skilledWork') }}</b> {{ __('skilledWorkMsg') }}</li>
                            <li>{{ __('workExp3') }}</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="reserved-job-position-in-canada-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('reservedOcc') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="reserved-job-position-in-canada">
                        {{ __('reservedOccQuestion') }}
                    </label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="reserved-job-position-in-canada" id="reserved-job-position-in-canada">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionReservedJob"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationReservedJob">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('reservedOcc1') }}</u></b>

                            <li>{{ __('reservedOcc2') }}</li>
                            <li>{{ __('reservedOcc3') }}</li>
                            <li>{{ __('reservedOcc4') }}</li>
                            <li>{{ __('reservedOcc5') }}</li>
                            
                            <b><u>{{ __('reservedOcc6') }}</u></b>

                            <li>{{ __('reservedOcc7') }}</li>
                            <li>{{ __('reservedOcc8') }}</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="study-canada-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('studiesCanada') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="study-canada">{{ __('studiesCanadaQuestion') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="study-canada" id="study-canada">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudyCanada"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationStudyCanada">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('studiesCanada1') }}</u></b>

                            <li>{{ __('studiesCanada2') }}</li>
                            <li>{{ __('studiesCanada3') }}</li>
                            <li>{{ __('studiesCanada4') }}</li>
                            <li>{{ __('studiesCanada5') }}</li>
                            <li>{{ __('studiesCanada6') }}</li>
                            <li>{{ __('studiesCanada7') }}</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-canada-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('workExpCanada') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience-canada">{{ __('workExpCanadaQuestion') }}</label><br>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience-canada" id="work-experience-canada">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExpCanada"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExpCanada">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('workExpCanada1') }}</u></b>

                            <li>{{ __('workExpCanada2') }}</li>
                            <li>{{ __('workExpCanada3') }}</li>
                            <li>{{ __('workExpCanada4') }}</li>
                            <li>{{ __('workExpCanada5') }}</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="job-offer-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('arrangedEmployment') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="job-offer">{{ __('arrangedEmploymentQuestion') }}</label><br>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="job-offer" id="job-offer">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionJobOffer"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationJobOffer">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            {{ __('arrangedEmployment1') }}.. <a class="underline text-blue-500" href="http://ircc.canada.ca/english/helpcentre/glossary.asp#arranged_employment" target="_blank" rel="noreferrer">{{ __('arrangedEmployment2') }}</a>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="relatives-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('relatives') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="relatives">{{ __('relativesQuestion1') }} <span id="marriedOrNot"></span> {{ __('relativesQuestion2') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="relatives" id="relatives">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionRelatives"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationRelatives">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('relatives1') }}</u></b>

                            <li>{{ __('relatives2') }}</li>
                            <li>{{ __('relatives3') }}</li>
                            <li>{{ __('relatives4') }}</li>
                            <li>{{ __('relatives5') }}</li>

                            <b><u>{{ __('relatives6') }}</u></b>

                            <li>{{ __('relatives7') }}</li>
                            <li>{{ __('relatives8') }}</li>
                            <li>{{ __('relatives9') }}</li>
                            <li>{{ __('relatives10') }}</li>
                            <li>{{ __('relatives11') }}</li>
                            <li>{{ __('relatives12') }}</li>
                            <li>{{ __('relatives13') }}</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="spouse-language-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseLangSkills') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-language-availability">{{ __('spouseLangSkillsQuestion') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-language-availability" id="spouse-language-availability">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseLangAvailability"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseLangAvailability">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('spouseLangSkills1') }}</u></b>
                            <li><b>Reading</b> = Compréhension de l'écrit</li>
                            <li><b>Writing</b> = Expression écrite</li>
                            <li><b>Listening</b> = Compréhension de l'oral</li>
                            <li><b>Speaking</b> = Expression orale</li>

                            <b><u>Note:</u></b> {{ __('spouseLangSkills2') }}
                        </p>
                    </div>
                </div>

    
                <div style="display: none;" class="spouse-education-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseEdu') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-education">{{ __('spouseEduQuestion') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-education" id="spouse-education">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('spouseEdu1') }}</u></b>

                            <li>{{ __('spouseEdu2') }}</li>
                            <li>{{ __('spouseEdu3') }}</li>
                            

                            <b>{{ __('spouseEdu4') }}</b> {{ __('spouseEdu5') }}
                        </p>
                    </div>
                </div>
    
                <div style="display: none;" class="spouse-work-experience-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseWorkExp') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-work-experience">{{ __('spouseWorkExpQuestion') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-work-experience" id="spouse-work-experience">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('spouseWorkExp1') }}</u></b>

                            <li>{{ __('spouseWorkExp2') }}</li>
                            <li>{{ __('spouseWorkExp3') }}</li>
                            <li>{{ __('spouseWorkExp4') }}</li>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center gap-2 md:gap-4 mx-auto">
                <div class="border-2 border-black bg-red-600 text-white font-bold rounded mt-4 p-2 px-5 noticeEligibility" style="display: none;"></div>
                <div class="flex flex-row justify-center items-center gap-4 md:gap-8 mx-auto">
                    <button class='btn-reset font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg mt-6' disabled>{{ __('reset') }}</button>
                    <button class='btn-calculate font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-6' disabled>{{ __('calculate') }}</button>
                </div>
            </div>
            
        </div>
    </section>
</x-app-layout>