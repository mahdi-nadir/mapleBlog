<div id="hashtagTemplate" class="bg-blue-50 dark:bg-blue-900 h-fit p-2 border-2 rounded border-black dark:border-white">
    <h1 class="text-lg md:text-lg uppercase text-center font-bold underline">{{ __('getHashtag') }}</h1>
    <div class="mt-4 text-center mx-auto text-sm md:text-md">
        <p class="italic my-2">
            <span class="font-bold text-red-600">Note:</span> {{ __('getHashtagMsg') }}
        </p>
        <label class="font-bold text-slate-600 inline-block mb-2 mt-4" for="hashtag">{{ __('getHashtagMsg2') }}</label>
        <select name="hashtag" id="hashtag" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-2/3 h-7">
                <option value="">{{ __('select') }}</option>
                <option value="age">Age</option>
                <option value="adr">{{ __('adr') }}</option>
                <option value="addChild">{{ __('AddChild') }}</option>
                <option value="addSpouse">{{ __('addSpouse') }}</option>
                <option value="ainp">{{ __('ainp') }}</option>
                <option value="rental">{{ __('rental') }}</option>
                <option value="arrima">Arrima</option>
                <option value="bankAcc">{{ __('bankAcc') }}</option>
                <option value="bankDoc">{{ __('bankDoc') }}</option>
                <option value="bio">{{ __('bio') }}</option>
                <option value="caq">Certificat d'Acceptation du Québec</option>
                <option value="caqSP">Demande de sélection temporaire pour étudier au Québec</option>
                <option value="celpip">CELPIP</option>
                <option value="cmc">CMC</option>
                <option value="crs">{{ __('crsSelect') }}</option>
                <option value="copr">{{ __('copr') }}</option>
                <option value="docList">{{ __('docList') }}</option>
                <option value="docTr">{{ __('transl') }}</option>
                <option value="education">Education</option>
                <option value="eca">{{ __('eca') }}</option>
                <option value="eligScore">{{ __('eligScore') }}</option>
                <option value="expShare">{{ __('expShare') }}</option>
                <option value="familyCND">{{ __('familyCND') }}</option>
                <option value="feesPayment">{{ __('feesPayment') }}</option>
                <option value="feesRefund">{{ __('feesRefund') }}</option>
                <option value="giftDeed">{{ __('giftDeed') }}</option>
                <option value="irccCall">{{ __('irccCall') }}</option>
                <option value="icas">ICAS</option>
                <option value="ielts">IELTS</option>
                <option value="imm5604">{{ __('imm5604') }}</option>
                <option value="iqas">IQAS</option>
                <option value="jobOffer">{{ __('jobOffer') }}</option>
                <option value="landing">{{ __('landing') }}</option>
                <option value="loe">{{ __('loe') }}</option>
                <option value="mpnp">{{ __('mpnp') }}</option>
                <option value="meds">{{ __('meds') }}</option>
                <option value="newsShare">{{ __('newsShare') }}</option>
                <option value="nAcChild">{{ __('nAcChild') }}</option>
                <option value="nAcSpseD">{{ __('nAcSpseD') }}</option>
                <option value="nAcSpseM">{{ __('nAcSpseM') }}</option>
                <option value="nbpnp">{{ __('nbpnp') }}</option>
                <option value="oinp">{{ __('oinp') }}</option>
                <option value="ppDepo">{{ __('ppDepo') }}</option>
                <option value="ppRqst">{{ __('ppRqst') }}</option>
                <option value="ppRnew">{{ __('ppRnew') }}</option>
                <option value="pebc">PEBC</option>
                <option value="prCard">{{ __('prCard') }}</option>
                <option value="persBG">{{ __('persBG') }}</option>
                <option value="proBG">{{ __('proBG') }}</option>
                <option value="ppc">{{ __('ppc') }}</option>
                <option value="appTime">{{ __('appTime') }}</option>
                <option value="pmi">Programme de Mobilité Internationale (PMI)</option>
                <option value="pof">{{ __('pof') }}</option>
                <option value="provNom">{{ __('provNom') }}</option>
                <option value="refLett">{{ __('refLett') }}</option>
                <option value="sinp">{{ __('sinp') }}</option>
                <option value="SIN">{{ __('SIN') }}</option>
                <option value="statShare">{{ __('statShare') }}</option>
                <option value="sPermit">{{ __('sPermit') }}</option>
                <option value="tcf">TCF Canada</option>
                <option value="tef">TEF Canada</option>
                <option value="tripHist">{{ __('tripHist') }}</option>
                <option value="wes">WES</option>
                <option value="wPermit">{{ __('wPermit') }}</option>
            </select>
    </div>
    <button id="getHashtagBtn" class="font-bold bg-blue-500 text-white px-2 py-1 mt-2 rounded-lg block mx-auto">{{ __('generate') }}</button>
    <h1 id="resultHashtag" class="text-sm md:text-lg text-center mt-5"></h1> 
</div>