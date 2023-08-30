<x-guest-layout>
    <section class="flex flex-col justify-center items-center gap-4 rounded border-2 border-black bg-black bg-opacity-60 w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5">
        <form class="flex flex-col items-center justify-center gap-2 md:gap-4 text-white" method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="font-bold text-xl md:text-4xl uppercase">Reset New Password</div>

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mt-2 md:mt-4 w-[100%]">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg md:text-xl"/>
                <div>
                    <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div>
            </div>

            <!-- Password -->
            <div class="mt-2 md:mt-4 w-[100%]">
                <x-input-label for="password" :value="__('Password')" class="text-white text-lg md:text-xl"/>
                <div>
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mt-2 md:mt-4 w-[100%]">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white text-lg md:text-xl"/>
                
                <div>
                    <x-text-input id="password_confirmation"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" 
                                        class="w-[100%] p-1 text-lg md:text-xl text-black"/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800 mt-1">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-guest-layout>
