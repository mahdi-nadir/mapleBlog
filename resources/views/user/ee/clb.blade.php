<x-app-layout>
<section id="nclc">
    <div class="mb-8">
        <h1 class='text-4xl font-bold mt-10'>{{ __('clb_calculator') }}</h1>
        <p class='text-xl mt-5'>{{ __('clb_calculator_msg1') }}</p>
        <p class='text-xl mt-5'>{{ __('clb_calculator_msg2') }}</p>
    </div>

    <div class="languageButtons flex flex-col md:flex-row justify-center items-center gap-4">
        <button id="triggerTef" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg">TEF <span class="canadaLangSpan">Canada</span></button>
        <button id="triggerTcf" class="font-bold bg-gray-500 text-white px-5 py-2 rounded-lg">TCF <span class="canadaLangSpan">Canada</span></button>
        <button id="triggerIelts" class="font-bold bg-green-500 text-white px-5 py-2 rounded-lg">IELTS</button>
        <button id="triggerCelpip" class="font-bold bg-indigo-500 text-white px-5 py-2 rounded-lg">CELPIP</button>
    </div>

    <div class="flex flex-col md:flex-row flex-wrap justify-center items-center gap-20 mt-20 mx-auto md:w-3/4">
        
        <div class="tef border-blue-500 border-4 rounded p-2 text-center w-[280px] md:w-[400px]" style="display: none;">
            <h1 class="title text-xl md:text-2xl font-bold uppercase underline mb-4">TEF Canada</h1>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tefReading" class="text-md md:text-xl font-bold">Compéhension de l'écrit</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tefReading" id="tefReading" min="1" max="300">
                <span style="display: none;" id="errorTefReading" class="errorTef text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tefReadingScore" class="mb-4 text-blue-500 text-md dark:text-blue-300 md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tefWriting" class="text-md md:text-xl font-bold">Expression écrite</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tefWriting" id="tefWriting" min="1" max="450">
                <span style="display: none;" id="errorTefWriting" class="errorTef text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tefWritingScore" class="mb-4 text-blue-500 text-md dark:text-blue-300 md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tefListening" class="text-md md:text-xl font-bold">Compréhension de l'oral</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tefListening" id="tefListening" min="1" max="360">
                <span style="display: none;" id="errorTefListening" class="errorTef text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tefListeningScore" class="mb-4 text-blue-500 text-md dark:text-blue-300 md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tefSpeaking" class="text-md md:text-xl font-bold">Expression orale</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tefSpeaking" id="tefSpeaking" min="1" max="450">
                <span style="display: none;" id="errorTefSpeaking" class="errorTef text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tefSpeakingScore" class="mb-4 text-blue-500 text-md dark:text-blue-300 md:text-lg font-bold">0</span>
            </div>
            <div class="result flex flex-col gap-4">
                <div id="finalResultTef" class="resultDiv min-w-[200px] border-4 border-green-800 px-10 py-2 rounded mx-auto text-xl md:text-2xl">0</div>
                <button id="tefResultBtn" class="font-bold bg-green-500 text-white px-5 py-2 rounded-lg">{{ __('result') }}</button>
                <button id="tefResetBtn" class="font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg">{{ __('reset') }}</button>
            </div>
        </div>
        
        <div class="tcf border-gray-500 border-4 rounded p-2 text-center w-[280px] md:w-[400px]" style="display: none;">
            <h1 class="title text-xl md:text-2xl font-bold uppercase underline mb-4">TCF Canada</h1>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tcfReading" class="text-md md:text-xl font-bold">Compéhension écrite</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tcfReading" id="tcfReading" min="1" max="699">
                <span style="display: none;" id="errorTcfReading" class="errorTcf text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tcfReadingScore" class="mb-4 text-gray-500 dark:text-gray-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tcfWriting" class="text-md md:text-xl font-bold">Expression écrite</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tcfWriting" id="tcfWriting" min="1" max="20">
                <span style="display: none;" id="errorTcfWriting" class="errorTcf text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tcfWritingScore" class="mb-4 text-gray-500 dark:text-gray-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tcfListening" class="text-md md:text-xl font-bold">Compréhension orale</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tcfListening" id="tcfListening" min="1" max="699">
                <span style="display: none;" id="errorTcfListening" class="errorTcf text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tcfListeningScore" class="mb-4 text-gray-500 dark:text-gray-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="tcfSpeaking" class="text-md md:text-xl font-bold">Expression orale</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="tcfSpeaking" id="tcfSpeaking" min="1" max="20">
                <span style="display: none;" id="errorTcfSpeaking" class="errorTcf text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="tcfSpeakingScore" class="mb-4 text-gray-500 dark:text-gray-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="result flex flex-col gap-4">
                <div id="finalResultTcf" class="resultDiv min-w-[200px] border-4 border-green-800 px-10 py-2 rounded mx-auto text-xl md:text-2xl">0</div>
                <button id="tcfResultBtn" class="font-bold bg-green-500 text-white px-5 py-2 rounded-lg">{{ __('result') }}</button>
                <button id="tcfResetBtn" class="font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg">{{ __('reset') }}</button>
            </div>
        </div>

        <div class="ielts border-green-500 border-4 rounded p-2 text-center w-[280px] md:w-[400px]" style="display: none;">
            <h1 class="title text-xl md:text-2xl font-bold uppercase underline mb-4">IELTS</h1>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="ieltsReading" class="text-lg md:text-xl font-bold">Reading</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" step="0.5" name="ieltsReading" id="ieltsReading" min="1" max="9">
                <span style="display: none;" id="errorIeltsReading" class="errorIelts text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="ieltsReadingScore" class="mb-4 text-green-500 dark:text-green-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="ieltsWriting" class="text-lg md:text-xl font-bold">Writing</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" step="0.5" name="ieltsWriting" id="ieltsWriting" min="1" max="9">
                <span style="display: none;" id="errorIeltsWriting" class="errorIelts text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="ieltsWritingScore" class="mb-4 text-green-500 dark:text-green-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="ieltsListening" class="text-lg md:text-xl font-bold">Listening</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" step="0.5" name="ieltsListening" id="ieltsListening" min="1" max="9">
                <span style="display: none;" id="errorIeltsListening" class="errorIelts text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="ieltsListeningScore" class="mb-4 text-green-500 dark:text-green-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="ieltsSpeaking" class="text-lg md:text-xl font-bold">Speaking</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" step="0.5" name="ieltsSpeaking" id="ieltsSpeaking" min="1" max="9">
                <span style="display: none;" id="errorIeltsSpeaking" class="errorIelts text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="ieltsSpeakingScore" class="mb-4 text-green-500 dark:text-green-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="result flex flex-col gap-4">
                <div id="finalResultIelts" class="resultDiv min-w-[200px] border-4 border-green-800 px-10 py-2 rounded mx-auto text-xl md:text-2xl">0</div>
                <button id="ieltsResultBtn" class="font-bold bg-green-500 text-white px-5 py-2 rounded-lg">{{ __('result') }}</button>
                <button id="ieltsResetBtn" class="font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg">{{ __('reset') }}</button>
            </div>
        </div>

        <div class="celpip border-indigo-500 border-4 rounded p-2 text-center w-[280px] md:w-[400px]" style="display: none;">
            <h1 class="title text-xl md:text-2xl font-bold uppercase underline mb-4">CELPIP</h1>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="celpipReading" class="text-lg md:text-xl font-bold">Reading</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="celpipReading" id="celpipReading" min="1" max="10">
                <span id="errorCelpipReading" class="errorCelpip text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="celpipReadingScore" class="mb-4 text-indigo-500 dark:text-indigo-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="celpipWriting" class="text-lg md:text-xl font-bold">Writing</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="celpipWriting" id="celpipWriting" min="1" max="10">
                <span id="errorCelpipWriting" class="errorCelpip text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="celpipWritingScore" class="mb-4 text-indigo-500 dark:text-indigo-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="celpipListening" class="text-lg md:text-xl font-bold">Listening</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="celpipListening" id="celpipListening" min="1" max="10">
                <span id="errorCelpipListening" class="errorCelpip text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="celpipListeningScore" class="mb-4 text-indigo-500 dark:text-indigo-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <label for="celpipSpeaking" class="text-lg md:text-xl font-bold">Speaking</label>
                <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-1/2 dark:text-black dark:border-gray-400" type="number" name="celpipSpeaking" id="celpipSpeaking" min="1" max="10">
                <span id="errorCelpipSpeaking" class="errorCelpip text-md md:text-lg text-red-600 font-bold italic"></span>
                <span id="celpipSpeakingScore" class="mb-4 text-indigo-500 dark:text-indigo-300 text-md md:text-lg font-bold">0</span>
            </div>
            <div class="result flex flex-col gap-4">
                <div id="finalResultCelpip" class="resultDiv min-w-[200px] border-4 border-green-800 px-10 py-2 rounded mx-auto text-xl md:text-2xl">0</div>
                <button id="celpipResultBtn" class="font-bold bg-green-500 text-white px-5 py-2 rounded-lg">{{ __('result') }}</button>
                <button id="celpipResetBtn" class="font-bold bg-yellow-500 text-white px-5 py-2 rounded-lg">{{ __('reset') }}</button>
            </div>
        </div>
    </div>
</section>
</x-app-layout>