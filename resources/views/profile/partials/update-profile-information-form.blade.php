<section>
    <header>
        {{-- <h2>
            {{ __('Profile Information') }}
        </h2> --}}

        {{-- <p>
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        
        {{-- <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error  :messages="$errors->get('username')" />
        </div> --}}

        <div>
            <x-input-label class="label" for="username" :value="__('Username')" />
                <h3>{{ $user->username }}</h3>
        </div>

        <div>
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
            <x-input-label class="label" for="gender" :value="__('gender')" />
            <h4>current data: {{ Auth::user()->gender->name }}</h4>
            <x-input-error  :messages="$errors->get('gender')" />
        </div>

        <x-input-label class="label" for="date_of_birth" :value="__('date_of_birth')" />
        <div class="birthday">
            <div>
                <x-input-label for="dob" :value="__('Day')" />
                <h3 value="{{ explode('-',Auth::user()->date_of_birth)[2] }}">{{ explode('-',Auth::user()->date_of_birth)[2] }}</h3>
                <x-input-error  :messages="$errors->get('dob')" />
            </div>
            
            <div>
                <x-input-label for="mob" :value="__('Month')" />
                <h3 value="{{ explode('-',Auth::user()->date_of_birth)[1] }}">{{ explode('-',Auth::user()->date_of_birth)[1] }}</h3>
                <x-input-error  :messages="$errors->get('mob')" />
            </div>

            <div>
                <x-input-label for="yob" :value="__('Year')" />
                <h3 value="{{ explode('-',Auth::user()->date_of_birth)[0] }}">{{ explode('-',Auth::user()->date_of_birth)[0] }}</h3>
                <x-input-error  :messages="$errors->get('yob')" />
            </div>
        </div>

        <div>
            <x-input-label class="label" for="system" :value="__('system')" />
            <h4>current system: {{ Auth::user()->system_id == NULL ? 'not set' : Auth::user()->system->name }}</h4>
            <select name="system_id" id="system" class="input">
                <option value="1">Arrima</option>
                <option value="2">Express Entry</option>
            </select>
            <x-input-error  :messages="$errors->get('system')" />
        </div>

        <div>
            <x-input-label class="label" for="diploma" :value="__('diploma')" />
            <h4>current data: {{ Auth::user()->diploma->level }}</h4>
            <select name="diploma_id" id="diploma" class="input">
                <option value="1">Baccalauréat</option>
                <option value="2">Master</option>
                <option value="3">Doctorat</option>
            </select>
            <x-input-error  :messages="$errors->get('diploma')" />
        </div>

        <div>
            <x-input-label class="label" for="noc" :value="__('noc')" />
            <h4>current data: {{ Auth::user()->noc->code }}</h4>
            <select name="noc_id" id="noc" class="input">
                <option value="1">11111</option>
                <option value="2">22222</option>
                <option value="3">33333</option>
            </select>
            <x-input-error  :messages="$errors->get('noc')" />
        </div>

        <div>
            <x-input-label class="label" for="step" :value="__('step')" />
            <h4>current data: {{ Auth::user()->step->name }}</h4>
            <select name="step_id" id="step" class="input">
                <option value="1">ita</option>
                <option value="2">post-ita</option>
                <option value="3">post-aor</option>
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
