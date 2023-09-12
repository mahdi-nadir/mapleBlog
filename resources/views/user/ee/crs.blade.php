<x-app-layout>
    <section id="crs">
        <div>
            <h1 class='text-2xl md:text-4xl font-bold mt-10'>{{ __('crs_calculator') }}</h1>
            <p class='text-lg md:text-xl mt-5'>{{ __('crs_calculatorMsg1') }}</p><br>
            <p class="font-bold text-lg md:text-xl">{{ __('crs_calculatorMsg2') }} <a href="https://www.canada.ca/en/immigration-refugees-citizenship/corporate/mandate/policies-operational-instructions-agreements/ministerial-instructions/express-entry-rounds.html" target="_blank" class="text-blue-700 underline">{{ __('crs_calculator_link') }}</a> {{ __('crs_calculatorMsg3') }}</p>
            <!-- <p class='text-xl mt-5'>Please note that you are only eligible if you get 67 points or more /100</p> -->
        
            <div class='bg-slate-200 w-[90%] md:w-2/3 mt-10 mx-auto text-center p-6 border-2 border-black rounded'>
                <div class="flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>{{ __('human_capital_factors') }}</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('maritalStatus') }}</h1>
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
                            <p class="pt-5">
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

                <div class="spouseCanadianStatusDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseStatus') }}</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="spouseCanadianStatus">{{ __('spouseStatusQuestion') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="spouseCanadianStatus" id="spouseCanadianStatus">
                                <option value="">{{ __('select') }}</option>
                                <option value="no">{{ __('no') }}</option>
                                <option value="yes">{{ __('yes') }}</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseCanadianStatus"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationSpouseCanadianStatus">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b>
                                    {{ __('spouseStatusExp') }}
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="spouseFollowerDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                        <label class="font-bold italic text-slate-600" htmlFor="spouseFollower">{{ __('spouseStatusQuestion2') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="spouseFollower" id="spouseFollower">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionspouseFollower"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationspouseFollower">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>
                                {{ __('spouseStatusExp2') }}
                            </b>
                        </p>
                    </div>
                </div>

                <div class="ageDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold'>Age</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="age" id="age">
                            <option value="">{{ __('select') }}</option>
                            <option value="17">17 or less</option>
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
                            <option value="45">45 or more</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionAge"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationAge">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>{{ __('ageMsg2') }}</b>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="educationDiv flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Education</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="education" id="education">
                            <option value="">{{ __('select') }}</option>
                            <option value="notCompleted">{{ __('notCompletedDegree') }}</option>
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
                        <p class="pt-5">
                            <b><u>{{ __('eduMsg1') }}</u></b>

                            <li>{{ __('eduMsg2') }}</li>
                            <li>{{ __('eduMsg3') }}</li>
                            <b><u>Note:</u></b> {{ __('eduMsg4') }}
                        </p>
                    </div>
                </div>
        
                <div class="studiesInCanadaDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{  __('studiesCanada') }}</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="studiesInCanada">{{  __('studiesCanadaQuestion2') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="studiesInCanada" id="studiesInCanada">
                                <option value="">{{ __('select') }}</option>
                                <option value="no">{{ __('no') }}</option>
                                <option value="yes">{{ __('yes') }}</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudiesInCanada"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationStudiesInCanada">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b><u>Note:</u> {{ __('studiesCanada2_1') }}</b>
                                <li>{{ __('studiesCanada2_2') }}</li>
                                <li>{{ __('studiesCanada2_3') }}</li>
                                <li>{{ __('studiesCanada2_4') }}</li>
                                <li>{{ __('studiesCanada2_5') }}</li>
                                <li>{{ __('studiesCanada2_6') }}</li>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="studiesCanadaTypeDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <label class="font-bold italic text-slate-600" htmlFor="studiesCanadaType">{{ __('studiesCanada2_question') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis" name="studiesCanadaType" id="studiesCanadaType">
                            <option value="">{{ __('select') }}</option>
                            <option value="secondary">{{ __('studiesCanada2_secondary') }}</option>
                            <option value="diploma">{{ __('studiesCanada2_oneOrTwo') }}</option>
                            <option value="bachelor">{{ __('studiesCanada2_bachelor') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudiesCanadaType"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationStudiesCanadaType">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <li><b>{{ __('secondary') }}</b> {{ __('secondaryMsg') }}</li>
                            <li><b>{{ __('oneOrTwo') }}</b> {{ __('oneOrTwoMsg') }}</li>
                            <li><b>{{ __('bachelor') }}</b> {{ __('bachelorMsg') }}</li>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="first-language-div">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('firstLang') }}</h1>
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
                    
                    <div style="display: none;" class="first-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">{{ __('setUrScores') }}</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-reading">{{ __('reading') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-reading" id="first-language-reading">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-writing">{{ __('writing') }}</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-writing" id="first-language-writing">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-listening">{{ __('listening') }}</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-listening" id="first-language-listening">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-speaking">{{ __('speaking') }}</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-speaking" id="first-language-speaking">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
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
                    
                    <div style="display: none;" class="second-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">{{ __('setUrScores') }}</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="second-language-reading">{{ __('reading') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-reading" id="second-language-reading">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="second-language-writing">{{ __('writing') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-writing" id="second-language-writing">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="second-language-listening">{{ __('listening') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-listening" id="second-language-listening">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="second-language-speaking">{{ __('speaking') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-speaking" id="second-language-speaking">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-can-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('workExpCanada') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience-can">{{ __('workExpCanadaQuestion2') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience-can" id="work-experience-can">
                            <option value="">{{ __('select') }}</option>
                            <option value="0">{{ __('noneOrLess1yr') }}</option>
                            <option value="1">1 {{ __('year') }}</option>
                            <option value="2">2 {{ __('years') }}</option>
                            <option value="3">3 {{ __('years') }}</option>
                            <option value="4">4 {{ __('years') }}</option>
                            <option value="5">5 {{ __('years') }} {{ __('orMore') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExpCan"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExpCan">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>{{ __('workExpCanada2_1') }}</b> <br><br>
                            <b><u>Note:</u></b> {{ __('workExpCanada2_2') }}
                            <b>"{{ __('workExpCanada2_3') }}"</b> {{ __('workExpCanada2_4') }} <br>
                            {{ __('workExpCanada2_5') }} <b><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/find-national-occupation-code.html" target="_blank" rel="noreferrer">{{ __('findNoc') }}</a></b>.
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('foreignWorkExp') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience">{{ __('foreignWorkExpQuestion1') }} ({{ __('from') }} <span id="monthYearExp"></span>), {{ __('foreignWorkExpQuestion2') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience" id="work-experience">
                            <option value="">{{ __('select') }}</option>
                            <option value="0">{{ __('noneOrLess1yr') }}</option>
                            <option value="1">1 {{ __('year') }}</option>
                            <option value="2">2 {{ __('years') }}</option>
                            <option value="3">3 {{ __('years') }} {{ __('orMore') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>{{ __('foreignWorkExpMsg') }}</b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="qualification-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>{{ __('skillTransferabilityFactors') }}</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('certificateQual') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="qualification">
                        {{ __('certificateQualQuestion') }}
                    </label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="qualification" id="qualification">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionQualification"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationQualification">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Note:</u></b>

                            {{ __('certificateQualMsg') }}
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="reserved-job-position-in-canada-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>{{ __('addPoints') }}</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>{{ __('reservedOcc') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="reserved-job-position-in-canada">
                        {{ __('reservedOccQuestion2') }} (<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment/lmia-exempt.html" target="_blank"><span class="underline text-blue-500">{{ __('ifNeeded') }}</span></a>)?
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
                            <b><u>{{ __('reservedOcc2_1') }}</u></b>

                            <li>{{ __('fullTime') }}</li>
                            <li>{{ __('reservedOcc2_2') }}</li>
                            <li>{{ __('reservedOcc2_3') }}</li>
                            <li>{{ __('reservedOcc2_4') }}</li>
                            
                            <b><u>{{ __('reservedOcc2_5') }}</u></b>

                            <li>{{ __('reservedOcc2_6') }}</li>
                            <li>{{ __('reservedOcc2_7') }}</li>

                            <i>{{ __('reservedOcc2_8') }} <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment.html" target="_blank">{{ __('reservedOcc2_9') }}</a>.</i>
                        </p>
                    </div>
                </div>
        
                <div class="jobOfferTeerDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <label class="font-bold italic text-slate-600" htmlFor="jobOfferTeer">{{ __('whichNoc') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="jobOfferTeer" id="jobOfferTeer">
                            <option value="">{{ __('select') }}</option>
                            <option value="teer00">{{ __('noc') }} {{ __('teer') }} 0 ({{ __('majorGroup') }} 00)</option>
                            <option value="teer0123">{{ __('noc') }} {{ __('teer') }} 0, 1, 2, 3</option>
                            <option value="teer45">{{ __('noc') }} {{ __('teer') }} 4 {{ __('or') }} 5</option>
                        </select>
                    </div>
                </div>

                <div style="display: none;" class="nomination-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('nomination') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="nomination">{{ __('nominationQuestion') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="nomination" id="nomination">
                            <option value="">{{ __('select') }}</option>
                            <option value="no">{{ __('no') }}</option>
                            <option value="yes">{{ __('yes') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionNomination"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationNomination">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>
                                <u>Note:</u> {{ __('nominationMsg') }}
                            </b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="relatives-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('relatives') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="relatives">{{ __('relativesQuestion1') }} <span id="marriedOrNot"></span> {{ __('relativesQuestion3') }}</label>
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
                            <b><u>Note:</u> {{ __('relatives2_1') }}</b>

                            <li>{{ __('relatives2_2') }}</li>
                            <li>{{ __('relatives2_3') }}</li>
                            <li>{{ __('relatives2_4') }}</li>

                            <b><u>{{ __('relatives2_5') }}</u></b>

                            <li>{{ __('relatives2_6') }}</li>
                            <li>{{ __('relatives2_7') }}</li>
                            <li>{{ __('relatives2_8') }}</li>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-education-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>{{ __('spouseFactors') }}</h1>
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseEdu') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-education">{{ __('spouseEduQuestion1') }}
                        <li>{{ __('spouseEduQuestion2') }}</li>
                        <li>{{ __('spouseEduQuestion3') }}</li></label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="spouse-education" id="spouse-education">
                            <option value="">{{ __('select') }}</option>
                            <option value="none">{{ __('notCompletedDegree') }}</option>
                            <option value="secondary">{{ __('secondaryEdu') }}</option>
                            <option value="one-year">{{ __('oneYear') }}</option>
                            <option value="two-year">{{ __('twoYear') }}</option>
                            <option value="bachelors">{{ __('bachelors') }}</option>
                            <option value="two-or-more">{{ __('twoOrMore') }}</option>
                            <option value="masters">{{ __('masters') }}</option>
                            <option value="doctoral">{{ __('phd') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseSpouseEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>{{ __('eduMsg1') }}</u></b>

                            <li>{{ __('eduMsg2') }}</li>
                            <li>{{ __('eduMsg3') }}</li>
                            <b><u>Note:</u></b> {{ __('eduMsg4') }}
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-work-experience-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseWorkExp') }}</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-work-experience">{{ __('spouseWorkExpQuestion1') }}</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-work-experience" id="spouse-work-experience">
                            <option value="">{{ __('select') }}</option>
                            <option value="0">{{ __('noneOrLess1yr') }}</option>
                            <option value="1">1 {{ __('year') }}</option>
                            <option value="2">2 {{ __('years') }}</option>
                            <option value="3">3 {{ __('years') }}</option>
                            <option value="4">4 {{ __('years') }}</option>
                            <option value="5">5 {{ __('years') }} {{ __('orMore') }}</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>{{ __('foreignWorkExpMsg') }}</b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-language-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>{{ __('spouseLangSkills') }}</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="spouse-language-type">{{ __('spouseLangSkillsQuestion2') }} <b>"{{ __('if') }}"</b> {{ __('spouseLangSkillsQuestion3') }}</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-language-type" id="spouse-language-type">
                                <option value="">{{ __('select') }}</option>
                                <option value="none">{{ __('notApplicable') }}</option>
                                <option value="ielts">IELTS</option>
                                <option value="celpip">CELPIP</option>
                                <option value="tef-canada">TEF Canada</option>
                                <option value="tcf-canada">TCF Canada</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseLanguageType"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationSpouseLanguageType">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b>{{ __('spouseLangMsg') }}</b>
                            </p>
                        </div>
                    </div>

                    <div style="display: none;" class="spouse-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">{{ __('setUrScores') }}</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="spouse-language-reading">{{ __('reading') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-reading" id="spouse-language-reading">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="spouse-language-writing">{{ __('writing') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-writing" id="spouse-language-writing">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="spouse-language-listening">{{ __('listening') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-listening" id="spouse-language-listening">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="spouse-language-speaking">{{ __('speaking') }}</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-speaking" id="spouse-language-speaking">
                                <option value="">{{ __('select') }}</option>
                                <option value="clb10"></option>
                                <option value="clb9"></option>
                                <option value="clb8"></option>
                                <option value="clb7"></option>
                                <option value="clb6"></option>
                                <option value="clb5"></option>
                                <option value="clb4"></option>
                                <option value="clb3"></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center gap-2 md:gap-4 mx-auto">
                <div class="border-2 border-black bg-red-600 text-white font-bold rounded mt-4 p-2 px-5 noticeCRS w-2/3" style="display: none;"></div>
                <div class="flex flex-row justify-center items-center gap-4 md:gap-8 mx-auto">
                    <button class='btn-reset font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg mt-6' disabled>{{ __('reset') }}</button>
                    <button class='btn-calculate font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-6' disabled>{{ __('calculate') }}</button>
                </div>
            </div>
        </div>
</section>
    </x-app-layout>