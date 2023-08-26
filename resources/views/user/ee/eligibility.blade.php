<x-app-layout>
    <section id="eligibility_calculator">
        <div>
            <h1 class='eligTitle text-4xl font-bold mt-10'>Eligibility Calculator</h1>
            <p class='text-xl mt-5'>This tool will help you determine your eligibility for Express Entry</p>
            <p class='text-xl mt-5'>Please note that you are only eligible if you get 67 points or more /100</p>
        
            <div class='eligibility-div bg-slate-200 w-[90%] md:w-2/3 mt-10 mx-auto text-center p-6 border-2 border-black rounded'>
                <div class="flex flex-col justify-center items-center gap-4">
                    <h1 class='maritalTitle text-xl md:text-2xl font-bold'>Marital status</h1>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <select class="marital-status rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis" name="marital-status" id="marital-status">
                            <option value="">Select..</option>
                            <option value="single">Single / Annulled Marriage / Widowed / Separated</option>
                            <option value="married">Married / Common-Law</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white questionMaritalStatus"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationMaritalStatus">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600 absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="maritalModalExplanation pt-5">
                                <!-- <li><b>Single</b> means you have never been married and are not in a common-law relationship.</li>
                                <li><b>Annulled Marriage</b> means a marriage that is legally declared invalid.</li>
                                <li><b>Widowed</b> means your spouse has died and that you have not re-married or entered into a common-law relationship.</li>
                                <li><b>Separated</b> means that you are still legally married but no longer living with your spouse.</li>
                                <li><b>Married</b> means that you and your spouse have had a ceremony that legally binds you to each other. Your marriage must be legally recognized in the country where it was performed.</li>
                                <li><b>Common-Law</b> means that you have lived continuously with your partner in a marital-type relationship for a minimum of 1 year.</li> -->
                            </p>
                    </div>
                </div>
        
                <div class="ageDiv flex flex-col justify-center items-center gap-4 mt-10" style="display: none;">
                    <h1 class='text-xl md:text-2xl font-bold'>Age</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="age" id="age">
                            <option value="">Select..</option>
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
                            <b>Your age is based on the day IRCC gets an invitation to apply (ITA). It means that if you are 35 years old now, but you turn 36 before you get an ITA, then you will not get points for being 35.</b>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="educationDiv flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Education</h1>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4 w-1/2" name="education" id="education">
                            <option value="">Select..</option>
                            <option value="secondary">Secondary school (high school) credential or less</option>
                            <option value="one-year">One-year post-secondary program credential</option>
                            <option value="two-year">Two-year post-secondary program credential</option>
                            <option value="bachelors">Bachelor's degree OR a three or more year post-secondary program credential</option>
                            <option value="two-or-more">Two or more post-secondary program credentials (1 should be 3 or more years)</option>
                            <option value="masters">Master's degree</option>
                            <option value="doctoral">Doctoral level university degree (Ph.D.)</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="educationModalExplanation pt-5">
                            <!-- <b><u>Enter the highest level of education for which you:</u></b>

                            <li>earned a Canadian degree, diploma, or certificate, or</li>
                            <li>had an Educational Credential Assessment (ECA) if studied outside Canada (within the last five years).</li>
                            <b><u>Note:</u></b> Canadian degree must be from an accredited institution. If you have a foreign degree, you must have an ECA report from an approved agency. -->
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="first-language-div">
                    <h1 class='firstLangTitle text-xl md:text-2xl font-bold mt-10'>First Official Language</h1>
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
                    </div>
                    
                    <div style="display: none;" class="first-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-8">
                        <label class="font-bold italic text-slate-600">Set your test scores</label>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-reading">Reading</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-reading" id="first-language-reading">
                                <option value="">Select..</option>
                                <option value="first-language-reading-clb6">CLB 6 or less</option>
                                <option value="first-language-reading-clb7">CLB 7</option>
                                <option value="first-language-reading-clb8">CLB 8</option>
                                <option value="first-language-reading-clb9">CLB 9 or more</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-writing">Writing</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-writing" id="first-language-writing">
                                <option value="">Select..</option>
                                <option value="first-language-writing-clb6">CLB 6 or less</option>
                                <option value="first-language-writing-clb7">CLB 7</option>
                                <option value="first-language-writing-clb8">CLB 8</option>
                                <option value="first-language-writing-clb9">CLB 9 or more</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-listening">Listening</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-listening" id="first-language-listening">
                                <option value="">Select..</option>
                                <option value="first-language-listening-clb6">CLB 6 or less</option>
                                <option value="first-language-listening-clb7">CLB 7</option>
                                <option value="first-language-listening-clb8">CLB 8</option>
                                <option value="first-language-listening-clb9">CLB 9 or more</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-2 mt-2">
                            <label class="font-bold" htmlFor="first-language-speaking">Speaking</label>
                            <select class="rounded bg-slate-100 border-red-800 border-4 mb-4" name="first-language-speaking" id="first-language-speaking">
                                <option value="">Select..</option>
                                <option value="first-language-speaking-clb6">CLB 6 or less</option>
                                <option value="first-language-speaking-clb7">CLB 7</option>
                                <option value="first-language-speaking-clb8">CLB 8</option>
                                <option value="first-language-speaking-clb9">CLB 9 or more</option>
                            </select>
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
                    
        
                    <div style="display: none;" class="second-language-scoresDiv flex flex-col justify-center items-center gap-2 mt-10">
                        <label class="font-bold italic text-slate-600">Have you get CLB5 or more in all language skills?</label>
                        <div class="flex flex-row justify-center items-center gap-2 mt-3">
                            <select class="rounded bg-slate-100 border-red-800 border-4" name="second-language-scores" id="second-language-scores">
                                <option value="">Select..</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSecondLangScores"></i>
                        </div>
                        <div style="display: none;" class="explanation explanationSecondLangScores">
                            <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                            <p class="pt-5">
                                <b><u>You can get points for your second official language if you get CLB 5 or more in all language skills.</u></b>
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
                    <h1 class='text-xl md:text-2xl font-bold'>Work Experience</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience">How many years of professional experience do you have?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience" id="work-experience">
                            <option value="">Select..</option>
                            <option value="1">1 year</option>
                            <option value="2-3">2 - 3 years</option>
                            <option value="4-5">4 - 5 years</option>
                            <option value="6">6 or more years</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>You can get points for your work experience if you have at least one year of continuous work experience in the same occupation.</u></b> <br><br>
                            <li><b>Continuous</b> means that you have worked without any long breaks.</li>
                            <li><b>Same occupation</b> means that you have worked in the same NOC code.</li>
                            <li>aquired in the last 10 years</li></li>
                            <li><b>Full-time</b> means that you have worked at least 30 hours per week.</li>
                            <li><b>Skilled work</b> in the NOC is TEER 0, 1, 2 or 3 category jobs</li>
                            <li>You can get points for part time jobs. If you only worked 15 hours per week, you need to gather 2 professional years in order to have 1 eligible year</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="reserved-job-position-in-canada-div flex flex-col justify-center items-center gap-4 mt-10">
                    <h1 class='text-xl md:text-2xl font-bold'>Reserved Job Position in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="reserved-job-position-in-canada">
                        Do you have a valid job offer in Canada?
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
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="study-canada-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Studies in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="study-canada">Did you study in Canada?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="study-canada" id="study-canada">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionStudyCanada"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationStudyCanada">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>You can get points for your studies in Canada if you:</u></b>

                            <li>have a degree, diploma or certificate from a Canadian secondary (high school) or post-secondary school</li>
                            <li>studied in Canada as a full-time student for at least 2 years</li>
                            <li>took a course that lasted at least 2 years</li>
                            <li>were in Canada for at least 16 months of the 24 months of study</li>
                            <li>had the required funds and</li>
                            <li>you stayed in good academic standing (as set out by your school)</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="work-experience-canada-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Work experience in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="work-experience-canada">Do you have work experience in Canada?</label><br>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="work-experience-canada" id="work-experience-canada">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionWorkExpCanada"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationWorkExpCanada">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>You can get points for your work experience in Canada if you:</u></b>

                            <li>have at least 1 year of full-time work experience in Canada</li>
                            <li>have a valid work permit or were authorized to work when you did this work</li>
                            <li>gained your work experience in Canada with the proper authorization</li>
                            <li>worked in a job listed in TEER category 0, 1, 2 or 3 of the NOC</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="job-offer-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Arranged employment in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="job-offer">Do you any job offer in Canada?</label><br>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="job-offer" id="job-offer">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionJobOffer"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationJobOffer">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            You may earn extra points for having <a class="underline text-blue-500" href="http://ircc.canada.ca/english/helpcentre/glossary.asp#arranged_employment" target="_blank" rel="noreferrer">arranged employment.</a>
                        </p>
                    </div>
                </div>

                <div style="display: none;" class="relatives-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Relatives in Canada</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="relatives">Do you <span id="marriedOrNot"></span> have relatives in Canada?</label>
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
                            <b><u>You can get points for having a relative in Canada if he is:</u></b>

                            <li>18 years or older</li>
                            <li>a Canadian citizen or permanent resident</li>
                            <li>currently living in Canada</li>
                            <li>not your spouse or common-law partner</li>

                            <b><u>This relative must be a:</u></b>

                            <li>parent</li>
                            <li>grandparent</li>
                            <li>child</li>
                            <li>grandchild</li>
                            <li>your or your spouse's sibling (child of your or your spouse's parent)</li>
                            <li>your or your spouse's aunt or uncle (by blood or marriage)</li>
                            <li>your or your spouse's niece or nephew (grandchild of your or your spouse's parent)</li>
                        </p>
                    </div>
                </div>
        
                <div style="display: none;" class="spouse-language-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse language skills</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-language-availability">Did your spouse take a language exam and get CLB4 at least?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-language-availability" id="spouse-language-availability">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseLangAvailability"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseLangAvailability">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>Your spouse can get points for his/her language skills if he/she gets CLB 4 or more in all language skills.</u></b>
                            <li><b>Reading</b> = Compréhension de l'écrit</li>
                            <li><b>Writing</b> = Expression écrite</li>
                            <li><b>Listening</b> = Compréhension de l'oral</li>
                            <li><b>Speaking</b> = Expression orale</li>

                            <b><u>Note:</u></b> The language tests are valid for 2 years after the date of the test result. They must be valid on the day you apply for permanent residence.
                        </p>
                    </div>
                </div>

    
                <div style="display: none;" class="spouse-education-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Education</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-education">Did your spouse studied in Canada?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-education" id="spouse-education">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseEducation"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseEducation">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>You can get points for your spouse's studies in Canada if he/she:</u></b>

                            <li>has a degree, diploma or certificate from a Canadian secondary (high school) or post-secondary school</li>
                            <li>studied in Canada as a full-time student for at least 2 years</li>
                            

                            <b>Full-time study</b> means at least 15 hours of classes per week, and your spouse or partner must have stayed in good academic standing (as set out by the school) during that time.
                        </p>
                    </div>
                </div>
    
                <div style="display: none;" class="spouse-work-experience-div flex flex-col justify-center items-center gap-4">
                    <h1 class='text-xl md:text-2xl font-bold mt-10'>Spouse Work Experience</h1>
                    <label class="font-bold italic text-slate-600" htmlFor="spouse-work-experience">Did your spouse have work experience in Canada?</label>
                    <div class="flex flex-row justify-center items-center gap-2 mt-3">
                        <select class="rounded bg-slate-100 border-red-800 border-4" name="spouse-work-experience" id="spouse-work-experience">
                            <option value="">Select..</option>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <i class="fa-solid fa-question rounded p-1 border-red-900 cursor-pointer text-red-800 hover:bg-red-900 hover:text-white text-bold cursor-pointer text-red-800 questionSpouseWorkExp"></i>
                    </div>
                    <div style="display: none;" class="explanation explanationSpouseWorkExp">
                        <button id="cancelBtn" class="cancelButton absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600"><i class="fa-solid fa-xmark"></i></button>
                        <p class="pt-5">
                            <b><u>You can get points for your spouse's work experience in Canada if he/she:</u></b>

                            <li>has at least 1 year of full-time work experience in Canada</li>
                            <li>has a valid work permit or was authorized to work when he/she did this work</li>
                            <li>worked in a job listed in TEER category 0, 1, 2 or 3 of the NOC</li>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center gap-2 md:gap-4 mx-auto">
                <div class="border-2 border-black bg-red-600 text-white font-bold rounded mt-4 p-2 px-5 noticeEligibility" style="display: none;"></div>
                <div class="flex flex-row justify-center items-center gap-4 md:gap-8 mx-auto">
                    <button class='btn-reset font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg mt-6' disabled>Reset</button>
                    <button class='btn-calculate font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-6' disabled>Calculate</button>
                </div>
            </div>
            
        </div>
    </section>
</x-app-layout>