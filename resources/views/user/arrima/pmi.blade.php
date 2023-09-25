<x-app-layout>
    <section class="text-center md:text-justify text-lg">
        <div class="font-bold mt-5 text-center">
            <h1 class="text-4xl">{{ __('pmi+') }}</h1>
            <h1 class="text-2xl">{{ __('pmi+Title') }}</h1>
        </div>
        <div class="mt-5 md:mt-8">
            <p class="indent-8">{{ __('pmi+Paragraph') }}</p>
        </div>
        <div class="mt-5 md:mt-8">
            <h1 class="text-2xl font-bold">{{ __('whoCanApply') }}</h1>
            <p class="indent-2 md:indent-5">{{ __('whoCanApplyMsg') }}</p>
            <div class="ml-2 md:ml-5 my-4">
                <div>
                    <h1 class="text-2xl font-bold">1- {{ __('whoCanApplyElement1') }}</h1>
                    <p class="indent-2 md:indent-5">{{ __('whoCanApplyElement1Paragraph') }}</p>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-bold">2- {{ __('whoCanApplyElement2') }}</h1>
                    <p class="indent-2 md:indent-5">{{ __('whoCanApplyElement2Paragraph') }}</p>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-bold">3- {{ __('whoCanApplyElement3') }}</h1>
                    <p class="indent-2 md:indent-5">{{ __('whoCanApplyElement3Paragraph') }}</p>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-bold">4- {{ __('whoCanApplyElement4') }}</h1>
                    <p class="indent-2 md:indent-5">{{ __('whoCanApplyElement4Paragraph') }}</p>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-bold">5- {{ __('whoCanApplyElement5') }}</h1>
                    <p class="indent-2 md:indent-5 mt-2 italic">{{ __('whoCanApplyElement5Paragraph') }}</p>
                    <ul class="ml-2 md:ml-5 text-start list-disc pl-8">
                        <li>{{ __('whoCanApplyElement5_1') }}</li>
                        <li>{{ __('whoCanApplyElement5_2') }}</li>
                        <li>{{ __('whoCanApplyElement5_3') }}</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-bold">{{ __('whoCanApplyElement6') }}</h1>
                    <p class="indent-2 md:indent-5">{{ __('whoCanApplyElement6Paragraph') }}</p>
                </div>
            </div>
        </div>

        <div class="mt-5 md:mt-8">
            <h1 class="text-2xl font-bold">{{ __('whoCannotApply') }}</h1>
            <p class="indent-2 md:indent-5 mt-3 italic">{{ __('whoCannotApplyYoure') }} <strong>{{ __('not') }}</strong> {{ __('whoCannotApplyYoure2') }}</p>
            <ul class="ml-2 md:ml-5 text-start list-disc pl-8">
                <li>{{ __('whoCannotApplyElement1') }}</li>
                <li>{{ __('whoCannotApplyElement2') }}</li>
                <li>{{ __('whoCannotApplyElement3') }}</li>
            </ul>
        </div>

        <div class="mt-5 md:mt-8">
            <h1 class="text-2xl font-bold">{{ __('howToApply') }}</h1>
            <p class="mt-3 italic"><span class="font-bold">{{ __('howToApplyParagraph') }}</span> {{ __('howToApplyParagraph2') }}</p>
            <div class="ml-3 md:ml-5">
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep1Title') }} </h1>
                    <p>{{ __('howToApplyStep1Paragraph') }}</p>
                    <ul class="ml-2 md:ml-5 text-start list-disc pl-8">
                        <li>{{ __('howToApplyStep1Element1') }}</li>
                        <li>{{ __('howToApplyStep1Element2') }}</li>
                    </ul>
                </div>
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep2Title') }} </h1>
                    <p>{{ __('howToApplyStep2Paragraph') }}</p>
                    <ul class="ml-2 md:ml-5 text-start list-disc pl-8">
                        <li>{{ __('howToApplyStep2Element1') }}</li>
                        <li>{{ __('howToApplyStep2Element2') }}</li>
                        <li>{{ __('howToApplyStep2Element3') }}</li>
                    </ul>
                </div>
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep3Title') }} </h1>
                    <p class="indent-5 md:indent-8 mt-2">{{ __('howToApplyStep3Paragraph') }}</p>
                </div>
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep4Title') }} </h1>
                    <p class="indent-5 md:indent-8 mt-2">{{ __('howToApplyStep4Paragraph') }}</p>
                </div>
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep5Title') }} </h1>
                    <p class="mt-1">{{ __('howToApplyStep5Paragraph1') }}</p>
                    <ul class="ml-2 md:ml-5 text-start list-disc pl-8">
                        <li><span class="font-bold">{{ __('applicantsOutCanada') }}</span> <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides/guide-5487-applying-work-permit-outside-canada.html" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('clickHere') }}</a></li>
                        <li><span class="font-bold">{{ __('applicantsInCanada') }}</span> <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides/guide-5553-applying-change-conditions-extend-your-stay-canada-worker.html#5553E5" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('clickHere') }}</a></li>
                    </ul>
                    <p class="mt-2">{{ __('howToApplyStep5Paragraph2') }}</p>
                </div>
                <div class="mt-3 md:mt-5">
                    <h1 class="text-xl font-bold">{{ __('howToApplyStep6Title') }} </h1>
                    <p class="indent-5 md:indent-8 mt-2">{{ __('howToApplyStep6Paragraph') }} <a href="https://www.ilovepdf.com/" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('clickHere') }}</a>.</p>
                    <p class="font-bold indent-5 md:indent-8 mt-1">{{ __('howToApplyStep6Paragraph2') }}</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>