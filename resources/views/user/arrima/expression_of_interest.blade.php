<x-app-layout>
    <section class="text-center md:text-justify text-xl">
        <h1 class="text-4xl font-bold mt-5 text-center">{{ __('expOfInt') }}</h1>
        <div class="mt-5 flex flex-col justify-center items-center gap-4 md:leading-9">
            <p class="indent-8">{{ __('expOfIntParagraph') }}</p>
            <p class="indent-8">{{ __('expOfIntParagraph2') }}</p>
            <p class="indent-8">{{ __('expOfIntParagraph3') }}</p>
            <p class="indent-8">{{ __('expOfIntParagraph4') }}</p>
        </div>

        <h1 class="text-3xl font-bold mt-5">{{ __('expOfIntBigTitle') }}</h1>
        
        <div class="mt-5 text-xlflex flex-col justify-center items-center md:leading-9">
            <div>
                <h1 class="text-2xl font-bold mt-5">Conditions</h1>
                <ol class="indent-8 text-start list-decimal pl-8">
                    <li>{{ __('expOfIntCondition1') }}</li>
                    <li>{{ __('expOfIntCondition2') }}</li>
                </ol>
            </div>

            <div class="mt-8 md:mt-12">
                <h1 class="text-2xl font-bold mt-5">{{ __('validityTitle') }}</h1>
                <div class="flex flex-col justify-center items-center md:items-start gap-2 mt-2">
                    <p>{{ __('validityParagraph') }}</p>
                    <p>{{ __('validityParagraph2') }}</p>
                    <p>{{ __('validityParagraph3') }}</p>
                    <p>{{ __('validityParagraph4') }}</p>
                </div>
            </div>
            
            <div class="mt-8 md:mt-12">
                <h1 class="text-2xl font-bold mt-5">{{ __('infoTitle') }}</h1>
                <p class="italic">{{ __('infoMust') }}</p>
                <ul class="indent-8 text-start list-disc pl-8">
                    <li>{{ __('infoElement1') }}</li>
                    <li>{{ __('infoElement2') }}</li>
                    <li>{{ __('infoElement3') }}</li>
                    <li>{{ __('infoElement4') }}</li>
                    <li>{{ __('infoElement5') }}</li>
                    <li>{{ __('infoElement6') }}</li>
                    <li>{{ __('infoElement7') }}</li>
                    <li>{{ __('infoElement8') }}</li>
                    <li>{{ __('infoElement9') }}</li>
                </ul>
                <p class="mt-5 indent-8">{{ __('infoParagraph') }}</p>
                <p class="italic mt-3 font-bold">{{ __('infoMust2') }}</p>
                <ol class="indent-8 text-start list-decimal pl-8">
                    <li>{{ __('infoElement10') }}</li>
                    <li>{{ __('infoElement11') }}</li>
                    <li>{{ __('infoElement12') }}</li>
                    <li>{{ __('infoElement13') }}</li>
                </ol>
            </div>
            
            <div class="mt-8 md:mt-12">
                <h1 class="text-2xl font-bold mt-5">{{ __('howToApplyTitle') }}</h1>
                <p class="mt-2 indent-8">
                    {{ __('infoParagraph2') }} <a href="https://arrima.immigration-quebec.gouv.qc.ca/aiguillage/?" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('infoLien') }}</a> {{ __('infoParagraph3') }}
                </p>
            </div>
        </div>
    </section>
</x-app-layout>