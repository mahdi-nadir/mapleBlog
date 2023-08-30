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