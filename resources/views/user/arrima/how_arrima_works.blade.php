<x-app-layout>
    <section class="text-center md:text-justify text-xl">
        <h1 class="text-4xl font-bold mt-5 text-center">Arrima.. {{ __('howItWorks') }}</h1>
        <div class="mt-5 flex flex-col justify-center items-center gap-4 md:leading-9">
            <p class="indent-8">{{ __('howItWorksParagraph') }}</p>
            <p class="indent-8">{{ __('howItWorksParagraph2') }}</p>
            <div class="mt-5 md:mt-8">
                <h1 class="text-3xl font-bold ">{{ __('howItWorksTitle2') }}</h1>
                <p class="mt-2 indent-8">{{ __('howItWorksParagraph3') }}</p>
                <ul class="indent-8 text-start list-disc pl-8">
                    <li>{{ __('howItWorksElement1') }}</li>
                    <li>{{ __('howItWorksElement2') }}</li>
                    <li>{{ __('howItWorksElement3') }}</li>
                    <li>{{ __('howItWorksElement4') }}</li>
                    <li>{{ __('howItWorksElement5') }}</li>
                    <li>{{ __('howItWorksElement6') }}</li>
                    <li>{{ __('howItWorksElement7') }}</li>
                    <li>{{ __('howItWorksElement8') }}</li>
                </ul>
            </div>

            <div class="mt-5 md:mt-8">
                <p class="indent-8">{{ __('howItWorksParagraph4') }}</p>
                <ol class="indent-8 text-start list-decimal pl-8">
                    <li>{{ __('howItWorksElement9') }}</li>
                    <li>{{ __('howItWorksElement10') }}</li>
                    <li>{{ __('howItWorksElement11') }}</li>
                    <li>{{ __('howItWorksElement12') }}</li>
                    <li>{{ __('howItWorksElement13') }}</li>
                </ol>
            </div>
            
            <div class="mt-5 md:mt-8">
                <p class="indent-8">{{ __('howItWorksParagraph5') }}</p>
                <p>{{ __('howItWorksParagraph6') }}</p>
                <ul class="indent-8 text-start list-disc pl-8">
                    <li>{{ __('howItWorksElement14') }} <a href="{{ route('arrima.self_assessment_tool') }}" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('selfAssessTool') }}</a> {{ __('howItWorksElement15') }}</li>
                    <li>{{ __('howItWorksElement16') }}</li>
                    <li>{{ __('howItWorksElement17') }}</li>
                    <li>{{ __('howItWorksElement18') }}</li>
                    <li>
                        {{ __('howItWorksElement19') }}
                        <ul class="indent-16 text-start list-decimal pl-8">
                            <li>{{ __('howItWorksElement19_1') }}</li>
                            <li>{{ __('howItWorksElement19_2') }}</li>
                            <li>{{ __('howItWorksElement19_3') }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</x-app-layout>