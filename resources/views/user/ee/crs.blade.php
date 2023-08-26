<x-app-layout>
    <section id="crs">
        <div>
            <h1 class='text-2xl md:text-4xl font-bold mt-10'>Comprehensive Ranking Score Calculator</h1>
            <p class='text-lg md:text-xl mt-5'>This tool will help you determine your CRS for Express Entry</p><br>
            <p class="font-bold text-lg md:text-xl">To get an invitation to apply, your CRS score must be above the minimum points score of your <a href="https://www.canada.ca/en/immigration-refugees-citizenship/corporate/mandate/policies-operational-instructions-agreements/ministerial-instructions/express-entry-rounds.html" target="_blank" class="text-blue-700 underline">round of invitations</a> (cut-off scores may vary each round).</p>
            <!-- <p class='text-xl mt-5'>Please note that you are only eligible if you get 67 points or more /100</p> -->
        
            <div class='bg-slate-200 w-[90%] md:w-2/3 mt-10 mx-auto text-center p-6 border-2 border-black rounded'>
                <div class="flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>Human Capital Factors</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>Marital Status</h1>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="marital-status rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis" name="marital-status" id="marital-status">
                            <option value="">Select..</option>
                            <option value="single">Single / Widowed / Divorced</option>
                            <option value="married">Married / Common-Law</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white questionMaritalStatus"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationMaritalStatus">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600 absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <li><b>Single</b> means you have never been married and are not in a common-law relationship.</li>
                                <li><b>Annulled Marriage</b> means a marriage that is legally declared invalid.</li>
                                <li><b>Widowed</b> means your spouse has died and that you have not re-married or entered into a common-law relationship.</li>
                                <li><b>Separated</b> means that you are still legally married but no longer living with your spouse.</li>
                                <li><b>Divorced</b> means that you have been legally divorced from your spouse.</li>
                                <li><b>Married</b> means that you and your spouse have had a ceremony that legally binds you to each other. Your marriage must be legally recognized in the country where it was performed.</li>
                                <li><b>Common-Law</b> means that you have lived continuously with your partner in a marital-type relationship for a minimum of 1 year.</li>
                            </p>
                    </div>
                </div>

                <div class="spouseCanadianStatusDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Canadian Status</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="spouseCanadianStatus">Is your spouse or common-law partner a citizen or permanent resident of Canada?</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="spouseCanadianStatus" id="spouseCanadianStatus">
                                <option value="">Select..</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseCanadianStatus"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationSpouseCanadianStatus">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b>
                                    If your spouse or partner is a Canadian citizen or permanent resident, you will earn points as if you don't have a spouse or partner.
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="spouseFollowerDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                        <label class="font-bold italic text-slate-600" htmlFor="spouseFollower">Will your spouse or common-law partner come with you to Canada?</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="spouseFollower" id="spouseFollower">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionspouseFollower"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationspouseFollower">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>
                                If your spouse or partner is not coming with you to Canada, you will earn points as if you don't have a spouse or partner.
                            </b>
                        </p>
                    </div>
                </div>

                <div class="ageDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold'>Age</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="age" id="age">
                            <option value="">Select..</option>
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
                            <b>Your age is based on the day IRCC gets an invitation to apply (ITA). It means that if you are 35 years old now, but you turn 36 before you get an ITA, then you will not get points for being 35.</b>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="educationDiv flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Education</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="education" id="education">
                            <option value="">Select..</option>
                            <option value="notCompleted">Secondary school not completed</option>
                            <option value="secondary">Secondary school credential</option>
                            <option value="one-year">1 year post-secondary program</option>
                            <option value="two-year">2 years post-secondary program</option>
                            <option value="bachelors">Bachelor's degree OR a 3 years post-secondary program credential</option>
                            <option value="two-or-more">2 or more post-secondary program credentials (1 should be 3 or more years)</option>
                            <option value="masters">Master's degree</option>
                            <option value="doctoral">Doctoral level university degree (Ph.D.)</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Enter the highest level of education for which you:</u></b>

                            <li>earned a Canadian degree, diploma, or certificate, or</li>
                            <li>had an Educational Credential Assessment (ECA) if studied outside Canada (within the last five years).</li>
                            <b><u>Note:</u></b> Canadian degree must be from an accredited institution. If you have a foreign degree, you must have an ECA report from an approved agency.
                        </p>
                    </div>
                </div>
        
                <div class="studiesInCanadaDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Studies in Canada</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="studiesInCanada">Have you earned a Canadian degree, diploma or certificate in Canada?</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="studiesInCanada" id="studiesInCanada">
                                <option value="">Select..</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudiesInCanada"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationStudiesInCanada">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b><u>Note:</u> to answer yes:</b>
                                <li>English or French as a Second Language must not have made up more than half your study</li>
                                <li>you must not have studied under an award that required you to return to your home country after graduation to apply your skills and knowledge</li>
                                <li>you must have studied at a school within Canada (foreign campuses don't count)</li>
                                <li>you had to be enrolled full time for at least eight months, unless you completed the study or training program (in whole or in part) between March 2020 and August 2022</li>
                                <li>you had to have been physically present in Canada for at least eight months, unless you completed the study or training program (in whole or in part) between March 2020 and August 2022</li>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="studiesCanadaTypeDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <label class="font-bold italic text-slate-600" htmlFor="studiesCanadaType">Choose the best answer to describe this level of education..</label>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis" name="studiesCanadaType" id="studiesCanadaType">
                            <option value="">Select..</option>
                            <option value="secondary">Secondary (high school or less)</option>
                            <option value="diploma">One or two-years diploma</option>
                            <option value="bachelor">Degree of 3 years or longer</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudiesCanadaType"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationStudiesCanadaType">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <li><b>Secondary</b> means high school or less</li>
                            <li><b>One or two-years diploma</b> means a one or two-year program at a college, trade or technical school, university or CEGEP (in Quebec)</li>
                            <li><b>Degree of 3 years or longer</b> means a degree, diploma or certificate from a college, trade or technical school, university or CEGEP (in Quebec) that takes at least three years to complete. For example, a Bachelor's degree, a two-year college diploma, a Master's degree, a Doctoral degree, or a certificate from a three-year trade or technical school.</li>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="first-language-div">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>First Official Language</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="first-language-availability">Are your test results less than two years old?</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="first-language-availability" id="first-language-availability">
                                <option value="">Select..</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionFirstLangAvailability"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationFirstLangAvailability">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b>Your test results must be less than two years old when you apply for permanent residence. If your test results are older than two years before submitting your application, you will not get points for your first official language. And if you submit your application with an expired test result, IRCC will simply refuse it.</b>
                            </p>
                        </div>
                    </div>
        
                    <div style="display: none;" class="first-language-typeDiv flex justify-center items-center gap-4 mt-8">
                            <label class="font-bold italic text-slate-600" htmlFor="first-language-type">Which language test did you take for your first official language?</label><br>
                            <div class="flex flex-row justify-center items-center gap-2"></div>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="first-language-type" id="first-language-type">
                                <option value="">Select..</option>
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
                                <b><u>You can get points for your first official language if you get CLB 7 or more in all language skills.</u></b>
                                <div class="text-start">
                                    <li><b>Reading</b> = Compréhension de l'écrit</li>
                                    <li><b>Writing</b> = Expression écrite</li>
                                    <li><b>Listening</b> = Compréhension de l'oral</li>
                                    <li><b>Speaking</b> = Expression orale</li>
                                </div>
                            </p>
                        </div>
                    
                    <div style="display: none;" class="first-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">Set your test scores</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-reading">Reading</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-reading" id="first-language-reading">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="first-language-writing">Writing</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-writing" id="first-language-writing">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="first-language-listening">Listening</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-listening" id="first-language-listening">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="first-language-speaking">Speaking</label>
                            <select disabled class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-speaking" id="first-language-speaking">
                                <option value="">Select..</option>
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
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Second Official Language</h1>
                    <div class="flex flex-col justify-center items-center gap-4">
                        <label class="font-bold italic text-slate-600" htmlFor="second-language-availability">Do you have other language results?</label>
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="second-language-availability" id="second-language-availability">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    </div>

                    <div style="display: none;" class="flex flex-col justify-center items-center gap-4 mt-10 second-language-typeDiv">
                        <label class="font-bold italic text-slate-600" htmlFor="second-language-type">Which language test did you take for your second official language?</label><br>
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="second-language-type" id="second-language-type">
                            <option value="">Select..</option>
                            <option value="ielts">IELTS</option>
                            <option value="celpip">CELPIP</option>
                            <option value="tef-canada">TEF Canada</option>
                            <option value="tcf-canada">TCF Canada</option>
                        </select>
                    </div>
                    
                    <div style="display: none;" class="second-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">Set your test scores</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="second-language-reading">Reading</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-reading" id="second-language-reading">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="second-language-writing">Writing</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-writing" id="second-language-writing">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="second-language-listening">Listening</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-listening" id="second-language-listening">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="second-language-speaking">Speaking</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="second-language-speaking" id="second-language-speaking">
                                <option value="">Select..</option>
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
                    <h1 class='text-xl md:text-2xl font-bold'>Work Experience in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience-can"> In the last ten years, how many years of skilled work experience in Canada do you have?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience-can" id="work-experience-can">
                            <option value="">Select..</option>
                            <option value="0">None or less than a year</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 years</option>
                            <option value="4">4 years</option>
                            <option value="5">5 years or more</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExpCan"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExpCan">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>It must have been paid and full-time (or an equal amount in part-time).</b> <br><br>
                            <b><u>Note:</u></b> In Canada, the National Occupational Classification (NOC) is the official list of all the jobs in the Canadian labour market. It describes each job according to the training, education, experience and responsibilities (TEER) needed to work in the job.
                            <b>"Skilled work"</b> in the NOC is TEER 0, 1, 2 or 3 category jobs: <br>
                            If you are not sure of the NOC TEER category for this job, you can <b><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/find-national-occupation-code.html" target="_blank" rel="noreferrer">find your NOC</a></b>.
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Foreign Work Experience (outside Canada)</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience">In the last 10 years (from <span id="monthYearExp"></span>), how many total years of foreign skilled work experience do you have?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience" id="work-experience">
                            <option value="">Select..</option>
                            <option value="0">None or less than a year</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 years or more</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>It must have been paid, full-time (or an equal amount in part-time), and in only one occupation (NOC TEER category 0, 1, 2 or 3).</b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="qualification-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>Skill Transferability Factors</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>Certificate of Qualification</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="qualification">
                        Do you have a certificate of qualification from a Canadian province, territory or federal body?
                    </label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="qualification" id="qualification">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionQualification"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationQualification">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Note:</u></b>

                            Note: A certificate of qualification lets people work in some skilled trades in Canada. Only the provinces, territories and a federal body can issue these certificates. To get one, a person must have them assess their training, trade experience and skills to and then pass a certification exam.

                            People usually have to go to the province or territory to be assessed. They may also need experience and training from an employer in Canada.

                            This is not the same as a nomination from a province or territory.
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="reserved-job-position-in-canada-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>Additional Points</h1>
                    <h1 class='text-xl md:text-2xl font-bold'>Reserved Job Position in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="reserved-job-position-in-canada">
                        Do you have a valid job offer supported by a Labour Market Impact Assessment (<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment/lmia-exempt.html" target="_blank">if needed</a>)?
                    </label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="reserved-job-position-in-canada" id="reserved-job-position-in-canada">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionReservedJob"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationReservedJob">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>A valid job offer must be:</u></b>

                            <li>full-time</li>
                            <li>in a skilled job listed as TEER 0, 1, 2 or 3 in the 2021 National Occupational Classification</li>
                            <li>supported by a Labour Market Impact Assessment (LMIA) or exempt from needing one</li>
                            <li>for one year from the time you become a permanent resident</li>
                            
                            <b><u>A job offer is not valid if your employer is:</u></b>

                            <li>an embassy, high commission or consulate in Canada or</li>
                            <li>on the list of ineligible employers.</li>

                            <i>Whether an offer is valid or not also depends on different factors, depending on your case. See a <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment.html" target="_blank">full list of criteria for valid job offers</a>.</i>
                        </p>
                    </div>
                </div>
        
                <div class="jobOfferTeerDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <label class="font-bold italic text-slate-600" htmlFor="jobOfferTeer">Which NOC TEER is the job offer?</label>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="rounded bg-slate-100 border-red-800 border-4 mt-3" name="jobOfferTeer" id="jobOfferTeer">
                            <option value="">Select..</option>
                            <option value="teer00">NOC TEER 0 (Major group 00)</option>
                            <option value="teer0123">NOC TEER 0, 1, 2, 3</option>
                            <option value="teer45">NOC TEER 4 or 5</option>
                        </select>
                    </div>
                </div>

                <div style="display: none;" class="nomination-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Provincial Nomination</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="nomination">Do you have a nomination certificate from a province or territory?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="nomination" id="nomination">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionNomination"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationNomination">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>
                                <u>Note:</u> A nomination is different from a certificate of qualification. A nomination lets you apply to IRCC for permanent residence. A certificate of qualification lets you work in some skilled trades in Canada. Only the provinces, territories and a federal body can issue these certificates.
                            </b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="relatives-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Relatives in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="relatives">Do you <span id="marriedOrNot"></span> have at least one brother or sister living in Canada who is a citizen or permanent resident?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="relatives" id="relatives">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionRelatives"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationRelatives">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Note:</u> to answer yes, the brother or sister must be:</b>

                            <li>18 years or older</li>
                            <li>related to you or your partner by blood, marriage, common-law partnership or adoption</li>
                            <li>have a parent in common with you or your partner</li>

                            <b><u>A brother or sister is related to you by:</u></b>

                            <li>blood (biological)</li>
                            <li>adoption</li>
                            <li>marriage (step-brother or step-sister)</li>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-education-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl text-red-800 md:text-2xl font-bold mb-5 underline'>Spouse Factors</h1>
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Education</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-education">What is the highest level of education for which your spouse or common-law partner's has:
                        <li>earned a Canadian degree, diploma or certificate; or</li>
                        <li>had an Educational Credential Assessment (ECA)? (ECAs must be from an approved agency, in the last five years)</li></label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="spouse-education" id="spouse-education">
                            <option value="">Select..</option>
                            <option value="none">None or less than secondary</option>
                            <option value="secondary">Secondary school</option>
                            <option value="one-year">1 year post-secondary program</option>
                            <option value="two-year">2 years post-secondary program</option>
                            <option value="bachelors">Bachelor's degree OR a +3 years post-secondary program</option>
                            <option value="two-or-more">2 or more post-secondary program credentials (1 should be 3 or more years)</option>
                            <option value="masters">Master's degree</option>
                            <option value="doctoral">Doctoral level university degree (Ph.D.)</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseSpouseEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Enter the highest level of education for which you:</u></b>

                            <li>earned a Canadian degree, diploma, or certificate, or</li>
                            <li>had an Educational Credential Assessment (ECA) if studied outside Canada (within the last five years).</li>
                            <b><u>Note:</u></b> Canadian degree must be from an accredited institution. If you have a foreign degree, you must have an ECA report from an approved agency.
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-work-experience-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Work Experience</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-work-experience">In the last ten years, how many years of skilled work experience in Canada does your spouse/common-law partner have?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-work-experience" id="spouse-work-experience">
                            <option value="">Select..</option>
                            <option value="0">None or less than a year</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 years</option>
                            <option value="4">4 years</option>
                            <option value="5">5 years or more</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b>It must have been paid, full-time (or an equal amount in part-time), and in one or more NOC TEER category 0, 1, 2, or 3 jobs.</b>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="spouse-language-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Language Skills</h1>
                    <div class="flex flex-col justify-center items-center gap-2">
                        <label class="font-bold italic text-slate-600" htmlFor="spouse-language-type">Did your spouse or common-law partner take a language test? if so, which one <b>"IF"</b> its test results are less than two years old?</label>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-language-type" id="spouse-language-type">
                                <option value="">Select..</option>
                                <option value="none">Not applicable</option>
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
                                <b>The test results must be less than two years old when you apply for permanent residence. If the test results of your spouse are older than two years before submitting your application, you will not get points for it. And if you submit your application with an expired test result, IRCC may refuse it if your CRS is less than the draw score.</b>
                            </p>
                        </div>
                    </div>

                    <div style="display: none;" class="spouse-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">Set your test scores</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="spouse-language-reading">Reading</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-reading" id="spouse-language-reading">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="spouse-language-writing">Writing</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-writing" id="spouse-language-writing">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="spouse-language-listening">Listening</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-listening" id="spouse-language-listening">
                                <option value="">Select..</option>
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
                            <label class="font-bold" htmlFor="spouse-language-speaking">Speaking</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="spouse-language-speaking" id="spouse-language-speaking">
                                <option value="">Select..</option>
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
                    <button class='btn-reset font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg mt-6' disabled>Reset</button>
                    <button class='btn-calculate font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-6' disabled>Calculate</button>
                </div>
            </div>
        </div>
</section>
    </x-app-layout>