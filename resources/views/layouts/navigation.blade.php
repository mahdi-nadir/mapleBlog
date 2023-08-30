<nav x-data="{ open: false }" id="navbar" class="bg-black fixed top-0 left-0 w-full px-2 h-[60px] flex flex-row justify-between items-center relative text-white">
    <div class="container m-auto flex flex-row justify-between items-center">
        <h1>
            <a id="linklogo" class="inline-flex p-y text-xl tracking-wider font-bold" href="{{ route('dashboard') }}" title="{{ __('Home page') }}">
                {{-- <div class="w-[80px]"> --}}{{-- <x-application-logo /> --}}logo ici{{-- </div><span class="text-white">MapleMind</span> --}}
            </a>
        </h1>
    {{-- </div> --}}
    
    {{-- <ul id="mobileMenu" style="display: none;" class="flex flex-col items-center justify-center bg-gray-900 text-white w-full h-screen fixed top-0 left-0 z-50"></ul>
    <label for="burger" id="labelburger"><i class="fa-solid fa-bars text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400 fixed right-3 top-2"></i></label>
    <input type="checkbox" name="burger" id="burger" class=""> --}}

    <div id="navbarOptions" class="flex flex-row justify-center items-center gap-4 md:gap-10">
        <ul class="flex flex-row justify-center items-center gap-4 md:gap-10">
            <li class="relative py-[10px] md:py-[16px] list-none text-xl font-bold uppercase px-2 cursor-pointer">
                <h1 id="expressEntry">{{ __('Express Entry') }}</h1>
                <ul class="absolute top-[92%] left-[30%] translate-x-[-30%] md:top-[98%] border border-t-0 border-white bg-black w-[180px] list-none z-20 pt-5">
                    <x-nav-link id="eligibilityCalculatorLink" class="text-white w-full" :href="route('ee.eligibility')" :active="request()->routeIs('ee.eligibility')">
                        {{ __('eligibility') }}
                    </x-nav-link>
                                
                    <x-nav-link id="crsLink" :href="route('ee.crs')" class="text-white w-full" :active="request()->routeIs('ee.crs')">
                        {{ __('crs calculator') }}
                    </x-nav-link>
                    
                    <x-nav-link id="nclcLink" :href="route('ee.clb')" class="text-white w-full" :active="request()->routeIs('ee.clb')">
                        {{ __('clb calculator') }}
                    </x-nav-link>
                    
                    <x-nav-link id="suggestedpnpLink" :href="route('ee.suggestedpnp')" class="text-white w-full" :active="request()->routeIs('ee.suggestedpnp')">
                        {{ __('suggested pnp') }}
                    </x-nav-link>
                    
                    {{-- <x-nav-link id="ebooksLink" :href="route('ebooks')" :active="request()->routeIs('ebooks')">
                        {{ __('ebooks') }}
                    </x-nav-link> --}}
                    
                    <x-nav-link id="extraInfoLink" :href="route('ee.extrainfo')" class="text-white w-full" :active="request()->routeIs('ee.extrainfo')">
                        {{ __('extra Information') }}
                    </x-nav-link>
                </ul>
            </li>

            <li id="arrimaBtn" class="relative py-[10px] md:py-[16px] list-none text-xl font-bold uppercase px-2 cursor-pointer">
                <h1 id="arrima">{{ __('Arrima') }}</h1>
                <ul class="absolute top-[110%] left-[30%] translate-x-[-30%] md:top-[98%] border border-t-0 border-white bg-black w-[180px] list-none z-20 pt-5">
                    <x-nav-link :href="route('arrima.expression_of_interest')" class="text-white w-full" :active="request()->routeIs('arrima.expression_of_interest')">
                        {{ __('expr. of interest') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('arrima.self_assessment_tool')" class="text-white w-full" :active="request()->routeIs('arrima.self_assessment_tool')">
                        {{ __('assessment tool') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('arrima.csq')" class="text-white w-full" :active="request()->routeIs('arrima.csq')">
                        {{ __('csq') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('arrima.permanent_residence')" class="text-white w-full" :active="request()->routeIs('arrima.permanent_residence')">
                        {{ __('arrima PR') }}
                    </x-nav-link>

                    <x-nav-link :href="route('arrima.pmi')" class="text-white w-full" :active="request()->routeIs('arrima.pmi')">
                        {{ __('PMI') }}
                    </x-nav-link>
                </ul>
            </li>
        </ul>

        <div id="userMenu" class="flex flex-row justify-center items-center gap-4 md:gap-8">
            <button id="dark-mode-toggle" class="text-white px-2"><i class="fa-solid fa-moon"></i></button>
            <x-responsive-nav-link :href="route('profile.edit')" class="userLink profile px-2" title="{{ Auth::user()->username }}">
                <i class="fa-solid fa-user"></i>
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="userLink logout px-2">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </x-responsive-nav-link>
            </form>
        </div>
    </div>

    

    {{-- <button class="block md:hidden items-center justify-center h-10 w-10 outline-none focus:outline-none ">
        <i class="fa-solid fa-bars text-white text-2xl md:text-4xl ml-4 my-3 hover:text-lime-400"></i>
    </button> --}}
</div>
</nav>
@if (Auth::user()->img_user_id == NULL)
    <section class="userNotice">
        please update your profile 
    </section>
@endif
<script>
    const toggleDarkMode = () => {
        document.documentElement.classList.toggle('dark');
    };

    const darkModeToggle = document.querySelector('#dark-mode-toggle');
    darkModeToggle.addEventListener('click', toggleDarkMode);
</script>

