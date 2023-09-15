<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('updatePassword2') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('updatePasswordMessage') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        
        <div class="flex flex-col justify-center items-center">
            <label for="current_password" class="font-bold">{{ __('currentPassword') }}</label>
            <input id="current_password" name="current_password" type="password" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-1/2 mt-1 block dark:border-gray-400 dark:text-black" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="flex flex-col justify-center items-center">
            <label for="password" class="font-bold">{{ __('newPassword') }}</label>
            <input id="password" name="password" type="password" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-1/2 mt-1 block dark:border-gray-400 dark:text-black" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-col justify-center items-center">
            <label for="password_confirmation" class="font-bold">{{ __('confirmPassword') }}</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-1/2 mt-1 block dark:border-gray-400 dark:text-black" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <x-primary-button>{{ __('save') }}</x-primary-button>
        </div>
    </form>
</section>
