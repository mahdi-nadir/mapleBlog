<x-guest-layout>
    {{-- <div class="loginDiv"> --}}
        <section class="loginSection">
            
            <!-- Session Status -->
            <x-auth-session-status :status="session('status')" />

            <form class="formulaire" method="POST" action="{{ route('login') }}"> 
                @csrf
                
                <div class="form_title">Log in</div>

                <!-- Email Address -->
                <div>
                    <div class="formField">
                        <x-input-label for="email" :value="__('Email')" id="emailLabel"/>
                        <div>
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="off" autofocus class="login__input"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="formField">
                        <x-input-label for="password" :value="__('Password')" id="passwordLabel"/>
                        <div id="passwordDiv">
                            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" class="login__input"/>
                            <x-input-error :messages="$errors->get('password')" />
                        </div>
                        @if (Route::has('password.request'))
                            <a class="forgotPassword" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="extraActions">
                    <div>
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Remember me!') }}</span>
                    </div>

                    <div class="signature">
                        <a href="{{ route('register') }}">
                            {{ __('Don\'t have an account? Register') }}
                        </a>

                        <x-primary-button class="cta">
                            {{ __('Sign in') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </section>
    {{-- </div> --}}
</x-guest-layout>