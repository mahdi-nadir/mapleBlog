@include('layouts.modals')

<div class="flex flex-col justify-end items-end w-full">
    <div class="flex flex-col md:flex-row justify-center items-center gap-2">
        <button class="weatherBtn text-xl md:text-3xl font-bold hover:text-blue-700 flex flex-row justify-end items-end mr-2" title="Check the weather!"><i class="fa-solid fa-cloud-rain animate-pulse"></i></button>
        <button class="currencyBtn text-xl md:text-3xl font-bold hover:text-blue-700 flex flex-row justify-end items-end mr-2" title="Required Funds"><i class="fa-solid fa-magnifying-glass-dollar animate-pulse"></i></button>
        <button class="hashtagBtn text-xl md:text-3xl font-bold hover:text-blue-700 flex flex-row justify-end items-end mr-2" title="Get your hashtag!"><i class="fa-solid fa-hashtag animate-pulse"></i></button>
        <button class="robotBtn text-xl md:text-3xl font-bold hover:text-blue-700 flex flex-row justify-end items-end mr-2" title="Ask questions!"><i class="fa-solid fa-robot mb-2 animate-pulse"></i></button>
    </div>

    @include('layouts.chat')
    @include('layouts.currency')
    @include('layouts.hashtag')
    @include('layouts.weather')

    @include('layouts.footer')
</div>