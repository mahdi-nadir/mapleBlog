<x-guest-layout>
    {{-- <div class="loginDiv"> --}}
        <section class="flex flex-col justify-center items-center gap-4 rounded border-2 border-black bg-black bg-opacity-60 w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5">
            
            <!-- Session Status -->
            <x-auth-session-status :status="session('status')" />

            <form class="flex flex-col items-center justify-center gap-2 md:gap-5 text-white" method="POST" action="{{ route('login') }}"> 
                @csrf
                
                <div class="font-bold text-xl md:text-4xl uppercase">Log in</div>

                <!-- Email Address -->
                <div class="w-[100%] mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-white text-lg md:text-xl"/>
                    <div class="mt-2">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="off" autofocus class="w-[100%] p-2 text-lg md:text-xl text-black"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 bg-red-600 p-1 text-white italic rounded" />
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-2 md:mt-4 w-[100%]">
                        <x-input-label for="password" :value="__('Password')" class="text-white text-lg md:text-xl"/>
                        <div class="mt-2">
                            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" class="w-[100%] p-2 text-lg md:text-xl text-black"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 bg-red-600 p-1 text-white italic rounded" />
                        </div>
                        @if (Route::has('password.request'))
                            <a class="text-sm italic float-right hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                </div>

                <div class="w-full flex justify-center mx-2">
                    <a href="/auth/google/redirect" target="_blank" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                        <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
                        </svg>
                        Sign in with Google
                    </a>

                   {{--  <a href="/auth/facebook/redirect" target="_blank" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                        Sign in with Facebook
                    </a> --}}
                </div>

                <!-- Remember Me -->
                <div class="flex flex-col items-center justify-center gap-2 md:gap-4">
                    <div>
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Remember me!') }}</span>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-4 md:gap-6">
                        <a href="{{ route('register') }}" class="underline">
                            {{ __('Don\'t have an account? Register') }}
                        </a>

                        <x-primary-button class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800">
                            {{ __('Sign in') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </section>
    {{-- </div> --}}
</x-guest-layout>