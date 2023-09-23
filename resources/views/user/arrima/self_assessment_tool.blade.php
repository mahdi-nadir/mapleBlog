<x-app-layout>
    <section id="extraInfo">
        <h1 class="text-4xl font-bold mt-5">{{ __('selfAssessTool') }}</h1>
        <p class="text-xl mt-5">
            {{ __('selfAssessMsg') }}
        </p>
        <a href="https://arrima.immigration-quebec.gouv.qc.ca/monespacepublic/calculette/sommaire" target="_blank" rel="noreferrer" id="clickLink" class="text-blue-700 dark:text-blue-300 hover:text-blue-500 hover:dark:text-blue-500 underline">
            {{ __('clickHere') }}
        </a>
        <div style="display: none;" id="arrimaFormDiv" class="p-8 border-2 border-black dark:border-white rounded-lg w-4/6 md:w-1/4 mx-auto mt-10">
            <h3 class="text-xl font-bold mb-3">{{ __('scoreHere') }}</h3>
            <form action="{{ route('update.arrima-score') }}" method="post" class="flex flex-col justify-centeritems-center gap-3">
                @csrf
                @method('PUT')
                <input type="number" name="arrima_score" class="rounded text-center bg-slate-100 border-red-800 border-4 text-lg w-full dark:text-black dark:border-gray-400" maxlength="4" max="1320" min="0">
                <x-input-error :messages="$errors->get('arrima_score')" class="mt-2 bg-red-600 p-1 text-white italic rounded" />
                <button type="submit" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg">{{ __('save') }}</button>
            </form>
        </div>
        @if ($scoreArrima != 0)
            <p>
                {{ __('yourScoreIs') }} <b>{{ $scoreArrima }}</b>
            </p>
        @endif
    </section>
</x-app-layout>
<script>
    const clickLink = document.getElementById('clickLink');
    const arrimaFormDiv = document.getElementById('arrimaFormDiv');

    clickLink.addEventListener('click', () => {
        arrimaFormDiv.style.display = 'block';
    });
</script>