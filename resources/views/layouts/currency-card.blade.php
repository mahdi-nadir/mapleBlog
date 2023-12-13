<div id="currencyTemplate" class="bg-blue-50 dark:bg-blue-900 h-fit p-2 border-2 rounded border-black dark:border-white">
    <h1 class="text-lg md:text-lg uppercase text-center font-bold underline">{{ __('requiredFunds') }}</h1>
    <div class="mt-4 mx-auto text-sm md:text-md">
        <label class="font-bold text-slate-600 dark:text-white" for="familyMembers">{{ __('requiredFundsQuestion1') }}</label><br>
        <select name="familyMembers" id="familyMembers" class="text-start rounded bg-slate-100 dark:border-gray-400 border-red-800 border-4 mt-2 w-2/3">
            <option value="">{{ __('select') }}</option>
            <option value="1">1 {{ __('member') }}</option>
            <option value="2">2 {{ __('members') }}</option>
            <option value="3">3 {{ __('members') }}</option>
            <option value="4">4 {{ __('members') }}</option>
            <option value="5">5 {{ __('members') }}</option>
            <option value="6">6 {{ __('members') }}</option>
            <option value="7">7 {{ __('members') }}</option>
            <option value="8">8 {{ __('members') }}</option>
            <option value="9">9 {{ __('members') }}</option>
            <option value="10">10 {{ __('members') }}</option>
            <option value="11">11 {{ __('members') }}</option>
            <option value="12">12 {{ __('members') }}</option>
            <option value="13">13 {{ __('members') }}</option>
            <option value="14">14 {{ __('members') }}</option>
            <option value="15">15 {{ __('members') }}</option>
        </select>
    </div>
    <div class="localCurrencyDiv mt-6 mx-auto text-sm md:text-md" style="display: none;">
        <label class="font-bold text-slate-600 dark:text-white" for="localCurrency">{{ __('requiredFundsQuestion2') }}</label><br>
        <select name="localCurrency" id="localCurrency" class="text-start rounded bg-slate-100 dark:border-gray-400 border-red-800 border-4 mt-2 w-2/3"></select>
    </div>
    <button id="convertBtn" class="font-bold bg-blue-500 text-white px-2 py-1 mt-4 rounded-lg block mx-auto" disabled>{{ __('result') }}</button>
    <h1 id="resultCurrency" class="text-sm md:text-md text-center mt-4"></h1> 
</div>