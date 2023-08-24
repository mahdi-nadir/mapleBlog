<x-app-layout>
    <section id="nclc">
        <div>
            <h1 class="mainTitle">CLB Calculator</h1>
            <p class="paragraphExplanation">The Canadian Language Benchmarks (CLB) describe 12 levels of ability in each of four different language skills - Listening, Speaking, Reading and Writing.</p>
            <p class="paragraphExplanation">Please note that you are eligible only if you get CLB7 or more in all language skills</p>
        </div>

        <div class="languageButtons">
            <button id="triggerTef" class="btnLanguage btnTef">TEF <span class="canadaLangSpan">Canada</span></button>
            <button id="triggerTcf" class="btnLanguage btnTcf">TCF <span class="canadaLangSpan">Canada</span></button>
            <button id="triggerIelts" class="btnLanguage btnIelts">IELTS</button>
            <button id="triggerCelpip" class="btnLanguage btnCelpip">CELPIP</button>
        </div>

        <div>
            
            <div class="tef" style="display: none;">
                <h1 class="title">TEF Canada</h1>
                <div>
                    <label for="tefReading">Compéhension de l'écrit</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tefReading" id="tefReading" min="1" max="300">
                        <span id="tefReadingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTefReading" class="errorTef"></span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefWriting" class="text-md md:text-xl font-bold">Expression écrite</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tefWriting" id="tefWriting" min="1" max="450">
                        <span id="tefWritingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTefWriting" class="errorTef"></span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefListening" class="text-md md:text-xl font-bold">Compréhension de l'oral</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tefListening" id="tefListening" min="1" max="360">
                        <span id="tefListeningScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTefListening" class="errorTef"></span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefSpeaking" class="text-md md:text-xl font-bold">Expression orale</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tefSpeaking" id="tefSpeaking" min="1" max="450">
                        <span id="tefSpeakingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTefSpeaking" class="errorTef"></span>
                </div>
                <div class="result">
                    <div id="finalResultTef" class="resultDiv"></div>
                    <button id="tefResultBtn">Final Result</button>
                    <button id="tefResetBtn">Reset</button>
                </div>
            </div>
            
            <div class="tcf" style="display: none;">
                <h1 class="title">TCF Canada</h1>
                <div>
                    <label for="tcfReading">Compéhension écrite</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tcfReading" id="tcfReading" min="1" max="699">
                        <span id="tcfReadingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTcfReading" class="errorTcf"></span>
                </div>
                <div>
                    <label for="tcfWriting">Expression écrite</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tcfWriting" id="tcfWriting" min="1" max="20">
                        <span id="tcfWritingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTcfWriting" class="errorTcf"></span>
                </div>
                <div>
                    <label for="tcfListening">Compréhension orale</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tcfListening" id="tcfListening" min="1" max="699">
                        <span id="tcfListeningScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTcfListening" class="errorTcf"></span>
                </div>
                <div>
                    <label for="tcfSpeaking">Expression orale</label>
                    <div class="skillScoreArea">
                        <input type="number" name="tcfSpeaking" id="tcfSpeaking" min="1" max="20">
                        <span id="tcfSpeakingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorTcfSpeaking" class="errorTcf"></span>
                </div>
                <div class="result">
                    <div id="finalResultTcf" class="resultDiv"></div>
                    <button id="tcfResultBtn">Final Result</button>
                    <button id="tcfResetBtn">Reset</button>
                </div>
            </div>

            <div class="ielts" style="display: none;">
                <h1 class="title">IELTS</h1>
                <div>
                    <label for="ieltsReading">Reading</label>
                    <div class="skillScoreArea">
                        <input type="number" step="0.5" name="ieltsReading" id="ieltsReading" min="1" max="9">
                        <span id="ieltsReadingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorIeltsReading" class="errorIelts"></span>
                </div>
                <div>
                    <label for="ieltsWriting">Writing</label>
                    <div class="skillScoreArea">
                        <input type="number" step="0.5" name="ieltsWriting" id="ieltsWriting" min="1" max="9">
                        <span id="ieltsWritingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorIeltsWriting" class="errorIelts"></span>
                </div>
                <div>
                    <label for="ieltsListening">Listening</label>
                    <div class="skillScoreArea">
                        <input type="number" step="0.5" name="ieltsListening" id="ieltsListening" min="1" max="9">
                        <span id="ieltsListeningScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorIeltsListening" class="errorIelts"></span>
                </div>
                <div>
                    <label for="ieltsSpeaking">Speaking</label>
                    <div class="skillScoreArea">
                        <input type="number" step="0.5" name="ieltsSpeaking" id="ieltsSpeaking" min="1" max="9">
                        <span id="ieltsSpeakingScore" class="skillScore">0</span>
                    </div>
                    <span style="display: none;" id="errorIeltsSpeaking" class="errorIelts"></span>
                </div>
                <div class="result">
                    <div id="finalResultIelts" class="resultDiv"></div>
                    <button id="ieltsResultBtn">Final Result</button>
                    <button id="ieltsResetBtn">Reset</button>
                </div>
            </div>

            <div class="celpip" style="display: none;">
                <h1 class="title">CELPIP</h1>
                <div>
                    <label for="celpipReading">Reading</label>
                    <div class="skillScoreArea">
                        <input type="number" name="celpipReading" id="celpipReading" min="1" max="10">
                        <span id="celpipReadingScore" class="skillScore">0</span>
                    </div>
                    <span id="errorCelpipReading" class="errorCelpip"></span>
                </div>
                <div>
                    <label for="celpipWriting">Writing</label>
                    <div class="skillScoreArea">
                        <input type="number" name="celpipWriting" id="celpipWriting" min="1" max="10">
                        <span id="celpipWritingScore" class="skillScore">0</span>
                    </div>
                    <span id="errorCelpipWriting" class="errorCelpip"></span>
                </div>
                <div>
                    <label for="celpipListening">Listening</label>
                    <div class="skillScoreArea">
                        <input type="number" name="celpipListening" id="celpipListening" min="1" max="10">
                        <span id="celpipListeningScore" class="skillScore">0</span>
                    </div>
                    <span id="errorCelpipListening" class="errorCelpip"></span>
                </div>
                <div>
                    <label for="celpipSpeaking">Speaking</label>
                    <div class="skillScoreArea">
                        <input type="number" name="celpipSpeaking" id="celpipSpeaking" min="1" max="10">
                        <span id="celpipSpeakingScore" class="skillScore">0</span>
                    </div>
                    <span id="errorCelpipSpeaking" class="errorCelpip"></span>
                </div>
                <div class="result">
                    <div id="finalResultCelpip" class="resultDiv"></div>
                    <button id="celpipResultBtn">Final Result</button>
                    <button id="celpipResetBtn">Reset</button>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/ee/clbClass.js') }}"></script>
    </x-app-layout>