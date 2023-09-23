<x-guest-layout>
    <section class="flex flex-col justify-center items-center gap-4 rounded border-2 border-black bg-black bg-opacity-60 w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5">
        <form class="flex flex-col items-center justify-center gap-2 md:gap-4 text-white" method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            <div class="font-bold text-xl md:text-4xl uppercase">Update Username and Password</div>
            <div class="italic">
                {{ __('updatePsdMsg') }}
            </div>

            <!-- Name -->
            {{-- <div class="mt-2 md:mt-4 w-[100%]">
                <x-input-label for="username" :value="__('Username')" class="text-white text-lg md:text-xl"/>
                <div>
                    <input id="username" type="text" name="username" required autocomplete="off" autofocus class="w-[100%] p-1 text-lg md:text-xl text-black" value="{{ Auth::user()->username }}">
                    <x-input-error :messages="$errors->get('username')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div>
            </div> --}}

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="flex flex-col justify-center items-center">
            <label for="current_password" class="font-bold">{{ __('currentPassword') }}</label>
            <input id="current_password" name="current_password" type="password" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-1/2 mt-1 block dark:border-gray-400 dark:text-black" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2 md:mt-4 w-[100%]">
            <x-input-label for="password" :value="__('Password')" class="text-white text-lg md:text-xl"/>
            <div>
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-2 md:mt-4 w-[100%]">
            <x-input-label for="password_confirmation" :value="__('Confirm password')" class="text-white text-lg md:text-xl"/>
            <div>
                <x-text-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
            </div>
        </div>

            <div class="mt-4">
                <x-primary-button class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800">
                    {{ __('save') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-guest-layout>