<x-app-layout>
    <section id="nclc">
        <div>
            <h1 class="mainTitle">CLB Calculator</h1>
            <p class="paragraphExplanation">The Canadian Language Benchmarks (CLB) describe 12 levels of ability in each of four different language skills - Listening, Speaking, Reading and Writing.</p>
            <p class="paragraphExplanation">Please note that you are eligible only if you get CLB7 or more in all language skills</p>
        </div>

        <div class="languageButtons">
            <button id="triggerTef" class="btnLanguage btnTef">TEF Canada</button>
            <button id="triggerTcf" class="btnLanguage btnTcf">TCF Canada</button>
            <button id="triggerIelts" class="btnLanguage btnIelts">IELTS</button>
            <button id="triggerCelpip" class="btnLanguage btnCelpip">CELPIP</button>
        </div>

        <div>
            
            <div class="tef" style="display: none;">
                <h1 class="title">TEF Canada</h1>
                <div>
                    <label for="tefReading">Compéhension de l'écrit</label>
                    <input type="number" name="tefReading" id="tefReading" min="1" max="300">
                    <span style="display: none;" id="errorTefReading" class="errorTef"></span>
                    <span id="tefReadingScore">0</span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefWriting" class="text-md md:text-xl font-bold">Expression écrite</label>
                    <input type="number" name="tefWriting" id="tefWriting" min="1" max="450">
                    <span style="display: none;" id="errorTefWriting" class="errorTef"></span>
                    <span id="tefWritingScore">0</span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefListening" class="text-md md:text-xl font-bold">Compréhension de l'oral</label>
                    <input type="number" name="tefListening" id="tefListening" min="1" max="360">
                    <span style="display: none;" id="errorTefListening" class="errorTef"></span>
                    <span id="tefListeningScore">0</span>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <label for="tefSpeaking" class="text-md md:text-xl font-bold">Expression orale</label>
                    <input type="number" name="tefSpeaking" id="tefSpeaking" min="1" max="450">
                    <span style="display: none;" id="errorTefSpeaking" class="errorTef"></span>
                    <span id="tefSpeakingScore">0</span>
                </div>
                <div class="result">
                    <div id="finalResultTef" class="resultDiv">0</div>
                    <button id="tefResultBtn">Get your final TEF score</button>
                    <button id="tefResetBtn">Reset TEF entries</button>
                </div>
            </div>
            
            <div class="tcf" style="display: none;">
                <h1 class="title">TCF Canada</h1>
                <div>
                    <label for="tcfReading">Compéhension écrite</label>
                    <input type="number" name="tcfReading" id="tcfReading" min="1" max="699">
                    <span style="display: none;" id="errorTcfReading" class="errorTcf"></span>
                    <span id="tcfReadingScore" >0</span>
                </div>
                <div>
                    <label for="tcfWriting">Expression écrite</label>
                    <input type="number" name="tcfWriting" id="tcfWriting" min="1" max="20">
                    <span style="display: none;" id="errorTcfWriting" class="errorTcf"></span>
                    <span id="tcfWritingScore" >0</span>
                </div>
                <div>
                    <label for="tcfListening">Compréhension orale</label>
                    <input type="number" name="tcfListening" id="tcfListening" min="1" max="699">
                    <span style="display: none;" id="errorTcfListening" class="errorTcf"></span>
                    <span id="tcfListeningScore" >0</span>
                </div>
                <div>
                    <label for="tcfSpeaking">Expression orale</label>
                    <input type="number" name="tcfSpeaking" id="tcfSpeaking" min="1" max="20">
                    <span style="display: none;" id="errorTcfSpeaking" class="errorTcf"></span>
                    <span id="tcfSpeakingScore">0</span>
                </div>
                <div class="result">
                    <div id="finalResultTcf" class="resultDiv">0</div>
                    <button id="tcfResultBtn">Get your final TCF score</button>
                    <button id="tcfResetBtn">Reset TCF entries</button>
                </div>
            </div>

            <div class="ielts" style="display: none;">
                <h1 class="title">IELTS</h1>
                <div>
                    <label for="ieltsReading">Reading</label>
                    <input type="number" step="0.5" name="ieltsReading" id="ieltsReading" min="1" max="9">
                    <span style="display: none;" id="errorIeltsReading" class="errorIelts"></span>
                    <span id="ieltsReadingScore">0</span>
                </div>
                <div>
                    <label for="ieltsWriting">Writing</label>
                    <input type="number" step="0.5" name="ieltsWriting" id="ieltsWriting" min="1" max="9">
                    <span style="display: none;" id="errorIeltsWriting" class="errorIelts"></span>
                    <span id="ieltsWritingScore">0</span>
                </div>
                <div>
                    <label for="ieltsListening">Listening</label>
                    <input type="number" step="0.5" name="ieltsListening" id="ieltsListening" min="1" max="9">
                    <span style="display: none;" id="errorIeltsListening" class="errorIelts"></span>
                    <span id="ieltsListeningScore">0</span>
                </div>
                <div>
                    <label for="ieltsSpeaking">Speaking</label>
                    <input type="number" step="0.5" name="ieltsSpeaking" id="ieltsSpeaking" min="1" max="9">
                    <span style="display: none;" id="errorIeltsSpeaking" class="errorIelts"></span>
                    <span id="ieltsSpeakingScore">0</span>
                </div>
                <div class="result">
                    <div id="finalResultIelts" class="resultDiv">0</div>
                    <button id="ieltsResultBtn">Get your final IELTS score</button>
                    <button id="ieltsResetBtn">Reset IELTS entries</button>
                </div>
            </div>

            <div class="celpip" style="display: none;">
                <h1 class="title">CELPIP</h1>
                <div>
                    <label for="celpipReading">Reading</label>
                    <input type="number" name="celpipReading" id="celpipReading" min="1" max="10">
                    <span id="errorCelpipReading" class="errorCelpip"></span>
                    <span id="celpipReadingScore">0</span>
                </div>
                <div>
                    <label for="celpipWriting">Writing</label>
                    <input type="number" name="celpipWriting" id="celpipWriting" min="1" max="10">
                    <span id="errorCelpipWriting" class="errorCelpip"></span>
                    <span id="celpipWritingScore">0</span>
                </div>
                <div>
                    <label for="celpipListening">Listening</label>
                    <input type="number" name="celpipListening" id="celpipListening" min="1" max="10">
                    <span id="errorCelpipListening" class="errorCelpip"></span>
                    <span id="celpipListeningScore">0</span>
                </div>
                <div>
                    <label for="celpipSpeaking">Speaking</label>
                    <input type="number" name="celpipSpeaking" id="celpipSpeaking" min="1" max="10">
                    <span id="errorCelpipSpeaking" class="errorCelpip"></span>
                    <span id="celpipSpeakingScore">0</span>
                </div>
                <div class="result">
                    <div id="finalResultCelpip" class="resultDiv">0</div>
                    <button id="celpipResultBtn">Get your final CELPIP score</button>
                    <button id="celpipResetBtn">Reset CELPIP entries</button>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/ee/clbClass.js') }}"></script>
    </x-app-layout>