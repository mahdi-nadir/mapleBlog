<x-guest-layout>
    <section class="flex flex-col justify-center items-center gap-4 rounded border-2 border-black bg-black bg-opacity-60 w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5">
        

        
        <form class="flex flex-col items-center justify-center gap-2 md:gap-4 text-white" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="font-bold text-xl md:text-4xl uppercase">Reset Password</div>
            <div class="italic">
                {{ __('Let us know your email address and we will send you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Email Address -->
            <div class="mt-2 md:mt-4 w-[100%]">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg md:text-xl"/>
                <x-text-input id="email" class="w-[100%] p-1 text-lg md:text-xl text-black" type="email" name="email" :value="old('email')" required autocomplete="off" autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 bg-red-600 p-1 text-white italic rounded" />
            </div>
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="mt-4">
                <x-primary-button class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800">
                    {{ __('Reset') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-guest-layout>
