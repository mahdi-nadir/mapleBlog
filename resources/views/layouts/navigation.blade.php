<nav x-data="{ open: false }" id="navbar">
    <!-- Primary Navigation Menu -->

                <!-- Logo -->
                <div>
                    <a id="linklogo" href="{{ route('dashboard') }}" title="{{ __('Home page') }}">
                        <div class="logoarea"><x-application-logo /><span id="spanLogo">MapleMind</span></div>
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}

                <div id="navbarOptions">
                    <li id="expressEntry">
                        {{ __('Express Entry') }}
                        <ul>
                            <x-nav-link :href="route('ee.eligibility')" :active="request()->routeIs('ee.eligibility')">
                                {{ __('eligibility calculator') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('ee.crs')" :active="request()->routeIs('ee.crs')">
                                {{ __('crs') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('ee.clb')" :active="request()->routeIs('ee.clb')">
                                {{ __('clb') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('ee.suggestedpnp')" :active="request()->routeIs('ee.suggestedpnp')">
                                {{ __('suggested pnp') }}
                            </x-nav-link>
                            
                            {{-- <x-nav-link :href="route('ebooks')" :active="request()->routeIs('ebooks')">
                                {{ __('ebooks') }}
                            </x-nav-link> --}}
                            
                            <x-nav-link :href="route('ee.extrainfo')" :active="request()->routeIs('ee.extrainfo')">
                                {{ __('extraInfo') }}
                            </x-nav-link>
                        </ul>
                    </li>

                    <li id="arrima">
                        {{ __('Arrima') }}
                        <ul>
                            <x-nav-link :href="route('arrima.expression_of_interest')" :active="request()->routeIs('arrima.expression_of_interest')">
                                {{ __('expression of interest') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('arrima.self_assessment_tool')" :active="request()->routeIs('arrima.self_assessment_tool')">
                                {{ __('self-assessment tool') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('arrima.csq')" :active="request()->routeIs('arrima.csq')">
                                {{ __('csq') }}
                            </x-nav-link>
                            
                            <x-nav-link :href="route('arrima.permanent_residence')" :active="request()->routeIs('arrima.permanent_residence')">
                                {{ __('PR through quebec') }}
                            </x-nav-link>

                            <x-nav-link :href="route('arrima.pmi')" :active="request()->routeIs('arrima.pmi')">
                                {{ __('PMI') }}
                            </x-nav-link>
                        </ul>
                    </li>
                </div>

            <!-- Settings Dropdown -->
           {{-- <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button>
                            <div>{{ Auth::user()->name }}</div>

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot> 
                </x-dropdown>
            </div> 

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open">
                    <svg stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>--}}

    <!-- Responsive Navigation Menu -->
    {{-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden"> --}}
        {{-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> --}}

        <!-- Responsive Settings Options -->
        {{-- <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600"> --}}
            {{-- <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div> --}}

            <div id="userOptions">
                <x-responsive-nav-link :href="route('profile.edit')" class="userLink profile">
                    <i class="fa-solid fa-user"></i>
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="userLink logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </x-responsive-nav-link>
                </form>
            </div>
</nav>
