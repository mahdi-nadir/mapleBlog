<x-guest-layout>
    <section class="formSection">
        <form class="formulaire" method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="form_title">Reset New Password</div>

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
            <div class="formField">
                <x-input-label for="email" :value="__('Email')" />
                <div>
                <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>
            </div>
            </div>

            <!-- Password -->
            <div>
            <div class="formField">
                <x-input-label for="password" :value="__('Password')" />
                <div>
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" />
            </div>
            </div>
            </div>

            <!-- Confirm Password -->
            <div>
            <div class="formField">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                <div>
                <x-text-input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>
            </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="cta" style="margin-top: 1rem;">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-guest-layout>
