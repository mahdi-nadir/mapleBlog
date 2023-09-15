<template id="hashtagTemplate" style="display: none;">
    <h1 class="text-xl md:text-3xl uppercase text-center mb-2 mt-2 font-bold underline">Get hashtag</h1>
    <div class="mt-4 text-center mx-auto text-md md:text-xl">
        <p class="italic my-2">
            <span class="font-bold text-red-600">Note:</span> Your post will be prioritized to be quickly published if you add a tag to it from the website.
        </p>
        <label class="font-bold italic text-slate-600 inline-block mb-2 mt-4" for="hashtag">Your question is about...</label><br>
        <select name="hashtag" id="hashtag" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-full overflow-hidden whitespace-nowrap overflow-ellipsis">
            <option value="">{{ __('select') }}</option>
            <option value="age">Age</option>
            <option value="adr">Additional Documents Request (ADR)</option>
            <option value="addChild">Adding a child in post-ITA</option>
            <option value="addSpouse">Adding a spouse in post-ITA</option>
            <option value="ainp">Alberta Immigrant Nominee Program</option>
            <option value="rental">Apartment Rental</option>
            <option value="arrima">Arrima</option>
            <option value="bankAcc">Bank account in Canada</option>
            <option value="bankDoc">Bank documents</option>
            <option value="bio">Biometrics</option>
            <option value="caq">Certificat d'Acceptation du Québec</option>
            <option value="caqSP">Demande de sélection temporaire pour étudier au Québec</option>
            <option value="celpip">CELPIP</option>
            <option value="cmc">CMC</option>
            <option value="crs">Comprehensive Ranking Score</option>
            <option value="copr">Confirmation of permanent residence</option>
            <option value="docList">Documents checklist</option>
            <option value="transl">Documents Translation</option>
            <option value="education">Education</option>
            <option value="eca">Educational Credential Assessment (ECA)</option>
            <option value="eligScore">Eligibility Score</option>
            <option value="expShare">Experience Sharing</option>
            <option value="familyCND">Family in Canada</option>
            <option value="feesPayment">Fees payment</option>
            <option value="feesRefund">Fees refund</option>
            <option value="giftDeed">Gift deed</option>
            <option value="irccCall">How to call IRCC?</option>
            <option value="icas">ICAS</option>
            <option value="ielts">IELTS</option>
            <option value="imm5604">IMM5604 - Declaration From Non-Accompanying Parent</option>
            <option value="iqas">IQAS</option>
            <option value="jobOffer">Job offer</option>
            <option value="landing">Landing</option>
            <option value="loe">Letter of Explanation</option>
            <option value="mpnp">Manitoba Provincial Nominee Program</option>
            <option value="meds">Medical Exam</option>
            <option value="newsShare">News Sharing</option>
            <option value="nAcChild">Non accompanying child</option>
            <option value="nAcSpseD">Non accompanying spouse - Divorced</option>
            <option value="nAcSpseM">Non accompanying spouse - Married</option>
            <option value="nbpnp">New Brunswick Provincial Nominee Program</option>
            <option value="oinp">Ontario Immigrant Nominee Program</option>
            <option value="ppDepo">Passport deposit</option>
            <option value="ppRqst">Passport Request (PPR)</option>
            <option value="ppRnew">Passport renewal</option>
            <option value="pebc">PEBC</option>
            <option value="prCard">Permanent residence card</option>
            <option value="persBG">Personal background</option>
            <option value="proBG">Professional background</option>
            <option value="ppc">Police Clearance Certificate</option>
            <option value="appTime">Processing Time</option>
            <option value="pmi">Programme de Mobilité Internationale (PMI)</option>
            <option value="pof">Proof of funds</option>
            <option value="provNom">Provincial Nomination</option>
            <option value="refLett">Reference Letter</option>
            <option value="sinp">Saskatchewan Immigrant Nominee Program</option>
            <option value="SIN">Social Insurance Number (SIN)</option>
            <option value="statShare">Stats Sharing</option>
            <option value="sPermit">Study permit</option>
            <option value="tcf">TCF Canada</option>
            <option value="tef">TEF Canada</option>
            <option value="tripHist">Travel history</option>
            <option value="wes">WES</option>
            <option value="wPermit">Work permit</option>
        </select>
    </div>
    <button id="getHashtagBtn" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-6 text-lg md:text-2xl block mx-auto">Generate</button>
    <h1 id="result" class="text-md md:text-2xl text-center mt-8"></h1> 
</template>