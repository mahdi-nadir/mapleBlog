<template id="currencyTemplate" style="display: none;">
    <h1 class="text-xl md:text-3xl uppercase text-center mb-2 mt-2 font-bold underline">required funds</h1>
    <div class="mt-4 text-center mx-auto text-md md:text-xl">
        <label class="font-bold italic text-slate-600" for="familyMembers">How many family members do you have?</label><br>
        <select name="familyMembers" id="familyMembers" class="rounded bg-slate-100 border-red-800 border-4 mt-4 text-center">
            <option value="">Select..</option>
            <option value="1">1 member</option>
            <option value="2">2 members</option>
            <option value="3">3 members</option>
            <option value="4">4 members</option>
            <option value="5">5 members</option>
            <option value="6">6 members</option>
            <option value="7">7 members</option>
            <option value="8">8 members</option>
            <option value="9">9 members</option>
            <option value="10">10 members</option>
            <option value="11">11 members</option>
            <option value="12">12 members</option>
            <option value="13">13 members</option>
            <option value="14">14 members</option>
            <option value="15">15 members</option>
        </select>
    </div>
    <div class="localCurrencyDiv mt-4 text-center mx-auto text-md md:text-xl" style="display: none;">
        <label class="font-bold italic text-slate-600" for="localCurrency">What is the currency of your country?</label><br>
        <select name="localCurrency" id="localCurrency" class="rounded bg-slate-100 border-red-800 border-4 w-[100px] mt-4 text-center"></select>
    </div>
    <button id="convertBtn" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-4 text-lg md:text-2xl block mx-auto" disabled>Result!</button>
    <h1 id="result" class="text-md md:text-2xl text-center mt-4"></h1> 
</template>