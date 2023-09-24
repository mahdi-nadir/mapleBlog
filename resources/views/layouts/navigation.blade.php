<nav x-data="{ open: false }" id="navbar" class="bg-black fixed bottom-0 left-0 w-full px-2 h-[60px] flex flex-row justify-between items-center relative text-white">
    <div class="container m-auto flex flex-row justify-between items-center">
        <h1>
            <a id="linklogo" class="inline-flex p-y text-xl tracking-wider font-bold" href="{{ route('dashboard') }}" title="{{ __('home page') }}">
                <div class="flex flex-row justify-center items-center gap-2">
                    <div class="w-[55px] hover:scale-110">
                        <x-application-logo />
                    </div>
                    <span class="text-white">MapleMind</span>
                </div>
            </a>
        </h1>
    {{-- </div> --}}
    
    {{-- <ul id="mobileMenu" style="display: none;" class="flex flex-col items-center justify-center bg-gray-900 text-white w-full h-screen fixed top-0 left-0 z-50"></ul>
    <label for="burger" id="labelburger"><i class="fa-solid fa-bars text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400 fixed right-3 top-2"></i></label>
    <input type="checkbox" name="burger" id="burger" class=""> --}}
    <div id="navbarOptions" class="flex flex-row justify-center items-center gap-4 md:gap-10">
        <ul class="flex flex-row justify-center items-center gap-4 md:gap-10">
            <li class="relative py-[10px] md:py-[16px] list-none text-xl font-bold uppercase px-2 cursor-pointer hover:underline">
                <h1 id="expressEntry">{{ __('expressEntry') }}</h1>
                <ul class="absolute top-[115%] left-[30%] translate-x-[-30%] md:top-[99%] border border-t-0 border-white bg-black w-[180px] list-none z-20">
                    <x-nav-link id="eligibilityCalculatorLink" class="text-white w-full" href="{{ LaravelLocalization::localizeUrl('/express-entry/eligibility-calculator') }}" :active="request()->routeIs('ee.eligibility')">
                        {{ __('eligibility') }}
                    </x-nav-link>
                                
                    <x-nav-link id="crsLink" href="{{ LaravelLocalization::localizeUrl('/express-entry/crs-calculator') }}" class="text-white w-full" :active="request()->routeIs('ee.crs')">
                        {{ __('crs') }}
                    </x-nav-link>
                    
                    <x-nav-link id="nclcLink" href="{{ LaravelLocalization::localizeUrl('/express-entry/clb-calculator') }}" class="text-white w-full" :active="request()->routeIs('ee.clb')">
                        {{ __('clbCalc') }}
                    </x-nav-link>
                    
                    <x-nav-link id="suggestedpnpLink" href="{{ LaravelLocalization::localizeUrl('/express-entry/suggested-pnp') }}" class="text-white w-full" :active="request()->routeIs('ee.suggestedpnp')">
                        {{ __('suggestedpnp') }}
                    </x-nav-link>
                    
                    {{-- <x-nav-link id="ebooksLink" :href="route('ebooks')" :active="request()->routeIs('ebooks')">
                        {{ __('ebooks') }}
                    </x-nav-link> --}}
                    
                    <x-nav-link id="extraInfoLink" href="{{ LaravelLocalization::localizeUrl('/express-entry/extra-info') }}" class="text-white w-full" :active="request()->routeIs('ee.extrainfo')">
                        {{ __('extra Information') }}
                    </x-nav-link>
                </ul>
            </li>

            <li id="arrimaBtn" class="relative py-[10px] md:py-[16px] list-none text-xl font-bold uppercase px-2 cursor-pointer hover:underline">
                <h1 id="arrima" class="w-10 h-10 md:w-fit md:h-fit pt-1">{{ __('Arrima') }}</h1>
                <ul class="absolute top-[101%] left-[30%] translate-x-[-30%] md:top-[95%] border border-t-0 border-white bg-black w-[210px] list-none z-20">
                    <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/how-it-works') }}" class="text-white w-full" :active="request()->routeIs('arrima.how_arrima_works')">
                        {{ __('howItWorks') }}
                    </x-nav-link>

                    <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/expression-of-interest') }}" class="text-white w-full" :active="request()->routeIs('arrima.expression_of_interest')">
                        {{ __('exprInterest') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/self-assessment-tool') }}" class="text-white w-full" :active="request()->routeIs('arrima.self_assessment_tool')">
                        {{ __('assessment tool') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/csq') }}" class="text-white w-full" :active="request()->routeIs('arrima.csq')">
                        {{ __('csq') }}
                    </x-nav-link>

                    {{-- <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/permanent-residence') }}" class="text-white w-full" :active="request()->routeIs('arrima.permanent_residence')">
                        {{ __('pr') }}
                    </x-nav-link> --}}

                    <x-nav-link href="{{ LaravelLocalization::localizeUrl('/arrima/pmi') }}" class="text-white w-full" :active="request()->routeIs('arrima.pmi')">
                        {{ __('PMI') }}
                    </x-nav-link>
                </ul>
            </li>

            <li class="relative py-[10px] md:py-[16px] list-none text-xl font-bold uppercase px-2 cursor-pointer hover:underline">
                {{-- <h1 id="expressEntry">{{ __('expressEntry') }}</h1>
                <ul class="absolute top-[115%] left-[30%] translate-x-[-30%] md:top-[99%] border border-t-0 border-white bg-black w-[180px] list-none z-20"> --}}
                    <x-nav-link id="blogLink" class="text-white w-full" href="{{ LaravelLocalization::localizeUrl('/maplemind-blog') }}" :active="request()->routeIs('blog.index')">
                        {{ __('Blog') }}
                    </x-nav-link>
                {{--</ul> --}}
            </li>
        </ul>

        <div id="userMenu" class="flex flex-row justify-center items-center gap-4 md:gap-8">
            
            <button id="language" class="text-white">{{ LaravelLocalization::getCurrentLocale() == 'fr' ? strtoupper('en') : strtoupper('fr') }}</button>
            
            <button id="dark-mode-toggle" class="text-white"></button>
            <x-responsive-nav-link :href="route('profile.edit')" class="px-2" title="{{ Auth::user()->username }}">
                <i class="fa-solid fa-user text-xl md:text-2xl hover:text-green-400"></i>
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="px-2">
                    <i class="fa-solid fa-right-from-bracket text-xl md:text-2xl hover:text-red-400"></i>
                </x-responsive-nav-link>
            </form>
        </div>
    </div>

    

    {{-- <button class="block md:hidden items-center justify-center h-10 w-10 outline-none focus:outline-none ">
        <i class="fa-solid fa-bars text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400"></i>
    </button> --}}
</div>
</nav>
@if (Auth::user()->diploma_id == null || Auth::user()->system_id == null || Auth::user()->noc_id == null || Auth::user()->step_id == null || Auth::user()->date_of_birth == null || Auth::user()->gender_id == null)
    <x-responsive-nav-link :href="route('profile.edit')" title="{{ __('updateInfo') }}">
        <section class="mt-1 bg-red-500 p-4 font-bold text-white w-full rounded-lg border-black dark:border-white border-2 uppercase hover:bg-red-600">
            @if (Auth::user()->password_confirmed == 0)
                {{ __('updateInfoAndPass') }} 
            @else
                {{ __('updateInfo') }}
            @endif
                <i class="fa-solid fa-angles-right animate-pulse"></i>
        </section>
    </x-responsive-nav-link>
@else
@if (Auth::user()->password_confirmed == 0)
    <x-responsive-nav-link :href="route('profile.edit')" title="{{ __('updatePass') }}">
        <section class="mt-1 bg-red-500 p-4 font-bold text-white w-full rounded-lg border-black dark:border-white border-2 uppercase hover:bg-red-600">
                {{ __('updatePass') }} <i class="fa-solid fa-angles-right animate-pulse"></i>
        </section>
    </x-responsive-nav-link>
@endif
@endif
<script>
    const toggleDarkMode = () => {
        const isDarkMode = document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', isDarkMode);
        updateDarkModeIcon(isDarkMode);
    };

    const updateDarkModeIcon = (isDarkMode) => {
        const darkModeToggle = document.querySelector('#dark-mode-toggle');
        darkModeToggle.innerHTML = isDarkMode
            ? '<i class="fa-solid fa-sun text-xl md:text-2xl hover:text-yellow-300"></i>'
            : '<i class="fa-solid fa-moon text-xl md:text-2xl px-1 hover:text-blue-200"></i>';
    };

    const darkModeToggle = document.querySelector('#dark-mode-toggle');
    darkModeToggle.addEventListener('click', toggleDarkMode);

    const storedDarkMode = localStorage.getItem('darkMode');
    if (storedDarkMode === 'true') {
        toggleDarkMode();
    } else {
        updateDarkModeIcon(false);
    }

    
    // switch language
    const languageToggle = document.querySelector('#language');languageToggle.addEventListener('click', () => {
    if (languageToggle.innerHTML == 'EN') {
        window.location.href = window.location.href.replace('/fr', '/en');
    } else {
        window.location.href = window.location.href.replace('/en', '/fr');
    }
});

// const storedFrench = localStorage.getItem('french');
// if (storedFrench === 'true') {
//     toggleLanguage();
// } else {
//     // Update the language button text based on the current URL
//     languageToggle.innerHTML = window.location.href.includes('/fr') ? 'EN' : 'FR';
// }
</script>

