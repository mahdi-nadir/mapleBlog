<x-guest-layout>
    <section class="formSection">
        

        
        <form class="formulaire"  method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form_title">Reset Password</div>
            <div class="">
                {{ __('Let us know your email address and we will send you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Email Address -->
            <div class="formField">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="off" autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="cta">
                    {{ __('Reset') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-guest-layout>
