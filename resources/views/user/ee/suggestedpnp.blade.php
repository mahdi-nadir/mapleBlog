<x-app-layout>
    <section id="suggestedpnp">
        <div class="flex flex-col justify-center items-center gap-3">
            <h1 class='text-2xl md:text-4xl font-bold mt-10'>{{ __('pnpSuggest') }}</h1>
            <p class='text-lg md:text-xl mt-5'>{{ __('pnpSuggestMsg1') }}</p>
            <p><b>{{ __('pnpSuggestMsg2') }}</b></p>
            <p><b>{{ __('pnpSuggestMsg3') }} <a href="https://www.statcan.gc.ca/en/statistical-programs/document/noc2016v1_3-noc2021v1_0" class="text-blue-600" target="_blank" rel="noreferrer">{{ __('pnpSuggestMsg4') }}</a></b></p>
        </div>

    <div class="flex flex-col justify-center items-center gap-6 w-full md:w-[700px] mx-auto p-6">
        <div class="flex flex-col md:flex-row justify-center items-center gap-6 w-full mx-auto p-6 border-4 rounded border-slate-200">
            <div class="flex justify-center items-center gap-2">
                <div class="h-5 w-5 rounded-full bg-green-200 border-2 border-black"></div>
                <span class="font-bold">{{ __('eligible') }}</span>
            </div>
            <div class="flex justify-center items-center gap-2">
                <div class="h-5 w-5 rounded-full bg-yellow-200 border-2 border-black"></div>
                <span class="font-bold">{{ __('eligibleUnderConditions') }}</span>
            </div>
            <div class="flex justify-center items-center gap-2">
                <div class="h-5 w-5 rounded-full bg-gray-200 border-2 border-black"></div>
                <span class="font-bold">{{ __('notEligible') }}</span>
            </div>
        </div>
        
        <div class="flex flex-col justify-center items-center gap-6 w-full mx-auto p-6">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 w-full">
                <div class="flex flex-col justify-center items-center gap-2 w-1/2 md:w-1/4">
                    <label for="nocCode" class="font-bold text-indigo-600 text-xl md:text-2xl">{{ __('nocCode') }}</label>
                    <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-full" type="number" name="nocCode" id="nocCode" min="1000" max="99999">
                </div>
                <div class="flex flex-col justify-center items-center gap-2 w-1/2 md:w-1/4">
                    <label for="crsScore" class="font-bold text-red-600 text-xl md:text-2xl">{{ __('crsScore') }}</label>
                    <input class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-full" type="number" name="crsScore" id="crsScore" min="1" max="1200">
                </div>
            </div>
            <button id="suggestedPnpBtn" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg">{{ __('result') }}</button>
            <p class="text-center italic text-sm md:text-md text-red-700 font-bold error"></p>
            <div id="resultDiv" class="flex flex-col md:flex-row flex-wrap gap-2 md:gap-6 rounded border-2 border-slate-400 p-3 text-start mx-auto" style="display: none;">
                
            </div>
        </div>
    </div>
    </section>
    </x-app-layout>