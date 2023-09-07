<section>
    {{-- <header> --}}
        {{-- <h2>
            {{ __('Profile Information') }}
        </h2> --}}

        {{-- <p>
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    {{-- </header> --}}

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="flex flex-col justify-center items-center gap-4">
        @csrf
        @method('patch')
        
        {{-- <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error  :messages="$errors->get('username')" />
        </div> --}}

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
            <x-input-label class="label" for="username" :value="__('Username')" />
                <h3>{{ $user->username }}</h3>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
            <x-input-label class="label" for="email" :value="__('Email')" />
            <h3>{{ $user->email }}</h3>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        

        <div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-2">
                <x-input-label class="label" for="gender" :value="__('Gender')" />
                <h4>{{ Auth::user()->gender->name == NULL ? 'not set' : Auth::user()->gender->name }}</h4>
            </div>
            <x-input-error :messages="$errors->get('gender')" />
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
        <x-input-label class="label" for="date_of_birth" :value="__('Date of Birth')" />
        {{-- <div class="birthday"> --}}
            <div>
                {{-- <x-input-label for="dob" :value="__('Day')" /> --}}
                <h3>{{ explode('-',Auth::user()->date_of_birth)[2] }}/{{ explode('-',Auth::user()->date_of_birth)[1] }}/{{ explode('-',Auth::user()->date_of_birth)[0] }}</h3>
                <x-input-error  :messages="$errors->get('dob')" />
            </div>
{{--             
            <div>
                <h3>{{ explode('-',Auth::user()->date_of_birth)[1] }}</h3>
                <x-input-error  :messages="$errors->get('mob')" />
            </div>

            <div>
                <h3>{{ explode('-',Auth::user()->date_of_birth)[0] }}</h3>
                <x-input-error  :messages="$errors->get('yob')" />
            </div> --}}
        </div>

        <div>
            <x-input-label class="label" for="system" :value="__('system')" />
            <select name="system_id" id="system" class="input">
                <option value="">{{ __('Select system') }}</option>
                @foreach ($systems as $system)
                    <option value="{{ $system->id }}" {{ Auth::user()->system_id == $system->id ? 'selected' : '' }}>{{ $system->name }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('system')" />
        </div>

        <div>
            <x-input-label class="label" for="diploma" :value="__('diploma')" />
            <select name="diploma_id" id="diploma" class="input">
                <option value="">{{ __('Select diploma') }}</option>
                @foreach ($diplomas as $diploma)
                    <option value="{{ $diploma->id }}" {{ Auth::user()->diploma_id == $diploma->id ? 'selected' : '' }}>{{ $diploma->level }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('diploma')" />
        </div>

        <div>
            <x-input-label class="label" for="noc" :value="__('noc')" />
            <select name="noc_id" id="noc" class="input">
                <option value="">{{ __('Select NOC') }}</option>
                @foreach ($nocs as $noc)
                    <option value="{{ $noc->id }}" {{ Auth::user()->noc_id == $noc->id ? 'selected' : '' }}>{{ $noc->code }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('noc')" />
        </div>

        <div>
            <x-input-label class="label" for="step" :value="__('step')" />
            <select name="step_id" id="step" class="input">
                <option value="">{{ __('Select step') }}</option>
                @foreach ($steps as $step)
                    <option value="{{ $step->id }}" {{ Auth::user()->step_id == $step->id ? 'selected' : '' }}>{{ $step->name }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('step')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
