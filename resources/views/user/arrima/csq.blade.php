<x-app-layout>
    <section class="text-center md:text-justify text-lg">
        <h1 class="text-4xl font-bold mt-5 text-center">{{ __('csqTitle') }}</h1>
        <div class="mt-5">
            <p class="indent-8">{{ __('csqParagraph') }}</p>
            <p class="mt-3"><span class="font-bold underline">Note:</span> {{ __('csqParagraph2') }}</p>
        </div>

        <div class="mt-5">
            <h1 class="text-2xl font-bold">{{ __('csqTitle2') }}</h1>
            <p class="mt-3 indent-8 italic">{{ __('csqParagraph3') }}</p>
            <ul class="ml-2 md:ml-5 text-start list-disc pl-8 my-4">
                <li>{{ __('csqElement1') }}</li>
                <li>{{ __('csqElement2') }}</li>
                <li>{{ __('csqElement3') }}</li>
                <li>{{ __('csqElement4') }}</li>
                <li>{{ __('csqElement5') }}</li>
            </ul>
            <p class="mt-3 indent-8">{{ __('csqParagraph4') }}</p>
        </div>

        <div class="mt-5">
            <h1 class="text-2xl font-bold">{{ __('csqTitle3') }}</h1>
            <p class="mt-3 indent-8">{{ __('csqParagraph5') }}</p>
        </div>

        <div class="mt-5">
            <h1 class="text-2xl font-bold">{{ __('csqTitle4') }}</h1>
            <p class="mt-3 indent-8">{{ __('csqParagraph6') }} <a href="{{ route('arrima.pmi') }}" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('clickHere') }}</a>.</p>
        </div>

        <div class="mt-5">
            <h1 class="text-2xl font-bold">{{ __('csqTitle5') }}</h1>
            <p class="mt-3 indent-8">{{ __('csqParagraph7') }} <a href="https://www.quebec.ca/education/etudier-quebec/demande-selection-temporaire" target="_blank" rel="noreferrer" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">{{ __('csqParagraph7_1') }}</a>.</p>
        </div>
    </section>
</x-app-layout>