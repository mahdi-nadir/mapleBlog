<x-guest-layout>
        <section class="registerSection">
            <form class="formulaire" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form_title_register">Register</div>

                <!-- Name -->
                <div>
                        <div class="registerField">
                            <x-input-label for="name" :value="__('Name')" />
                            <div>
                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autocomplete="off" autofocus class="register__input"/>
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                    </div>
                </div>

                <!-- Email Address -->
                <div>
                        <div class="registerField">
                            <x-input-label for="email" :value="__('Email')" />
                            <div>
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="off" class="register__input"/>
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="registerField">
                        <x-input-label for="password" :value="__('Password')" />
                        <div>
                            <x-text-input id="password"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" class="register__input"/>
                            <x-input-error :messages="$errors->get('password')" />
                        </div>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <div class="registerField">
                        <x-input-label for="password_confirmation" :value="__('Confirm password')" />
                        <div>
                            <x-text-input id="password_confirmation"
                                            type="password"
                                            name="password_confirmation" required class="register__input"/>
                            <x-input-error :messages="$errors->get('password_confirmation')"/>
                        </div>
                    </div>
                </div>

                <div class="signature confirmPasswordRegister">
                    <a href="{{ route('login') }}">
                        {{ __('Already a member?') }}
                    </a>

                    <x-primary-button class="cta">
                        {{ __('Sign up') }}
                    </x-primary-button>
                </div>
            </form>
        </section>
</x-guest-layout>