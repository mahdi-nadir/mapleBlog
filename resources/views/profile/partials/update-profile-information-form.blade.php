<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('userInfo2') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("userInfoMessage") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="flex flex-col justify-center items-center gap-4 mt-6">
        @csrf
        @method('patch')
        
        {{-- <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error  :messages="$errors->get('username')" />
        </div> --}}

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
            {{-- <x-input-label class="label font-bold" for="username" :value="__('Username')" /> --}}
            <label for="username" class="label font-bold">{{ __('username') }}:</label>
                <h3>{{ $user->username }}</h3>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
            {{-- <x-input-label class="label" for="email" :value="__('Email')" /> --}}
            <label for="email" class="label font-bold">{{ __('email') }}:</label>
            <h3>{{ $user->email }}</h3>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('emailUnverifiedMsg') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('sendVerificationEmail') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('verificationEmailSent') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-2">
                {{-- <x-input-label class="label" for="gender" :value="__('Gender')" /> --}}
                <label for="gender" class="label font-bold">{{ __('gender') }}:</label>
                @if ( Auth::user()->gender_id != NULL )
                    <h4>
                        {{-- @if (Auth::user()->gender_id == NULL) --}}
                        {{ LaravelLocalization::getCurrentLocale() == 'en' ? Auth::user()->gender->name_en : Auth::user()->gender->name_fr}} 
                        {{-- @else
                        {{ Auth::user()->gender->name }}
                        @endif --}}
                    </h4>
                @else
                    <div class="mt-2 md:mt-4 w-[100%]">
                        {{-- <h4>current data: {{ Auth::user()->gender->name }}</h4> --}}
                        <select name="gender_id" id="gender" class="w-[100%] p-1 text-lg md:text-xl text-black rounded-md">
                            <option value="" class="text-slate-400" disabled selected>{{ __('XY') }}</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}" {{ Auth::user()->gender_id == $gender->id ? 'selected' : '' }}>{{ LaravelLocalization::getCurrentLocale() == 'en' ? $gender->name_en : $gender->name_fr }}</option>
                            @endforeach
                        </select>
                        <x-input-error  :messages="$errors->get('gender')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                    </div>
                @endif
            </div>
            <x-input-error :messages="$errors->get('gender')" />
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-2">
            <label for="date_of_birth" class="label font-bold">{{ __('dob') }}:</label>
            @if ($user->date_of_birth != null)
            <h3>{{ explode('-',Auth::user()->date_of_birth)[2] }}/{{ explode('-',Auth::user()->date_of_birth)[1] }}/{{ explode('-',Auth::user()->date_of_birth)[0] }}</h3>
            @else
            {{-- <x-input-label for="dob" :value="__('Date of birth')" class="text-white text-lg md:text-xl mt-2 md:mt-4 mb-[-3%]"/> --}}
                <div class="flex flex-row justify-center items-center gap-2 w-[100%]">
                    <div>
                        <select name="dob" id="dob" class="text-black rounded-md p-2">
                            {{-- <option value="{{ explode('-',Auth::user()->date_of_birth)[2] }}">{{ explode('-',Auth::user()->date_of_birth)[2] }}</option> --}}
                            {{-- @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor --}}
                        </select>
                    </div>
                    
                    <div>
                        <select name="mob" id="mob" class="text-black rounded-md p-2">
                            {{-- <option value="{{ explode('-',Auth::user()->date_of_birth)[1] }}">{{ explode('-',Auth::user()->date_of_birth)[1] }}</option> --}}
                            <option value="">{{ __('mm') }}</option>
                            <option value="1">{{ __('January') }}</option>
                            <option value="2">{{ __('February') }}</option>
                            <option value="3">{{ __('March') }}</option>
                            <option value="4">{{ __('April') }}</option>
                            <option value="5">{{ __('May') }}</option>
                            <option value="6">{{ __('June') }}</option>
                            <option value="7">{{ __('July') }}</option>
                            <option value="8">{{ __('August') }}</option>
                            <option value="9">{{ __('September') }}</option>
                            <option value="10">{{ __('October') }}</option>
                            <option value="11">{{ __('November') }}</option>
                            <option value="12">{{ __('December') }}</option>
                        </select>
                    </div>
            
                    <div>
                        <select name="yob" id="yob" class="text-black rounded-md p-2">
                            {{-- <option value="{{ explode('-',Auth::user()->date_of_birth)[0] }}">{{ explode('-',Auth::user()->date_of_birth)[0] }}</option> --}}
                            @for ($i = 1945; $i <= 2005; $i++)
                                @if ($i == 1945)
                                    '<option value="">yyyy</option>
                                @endif
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <x-input-error  :messages="$errors->get('dob')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                    <x-input-error  :messages="$errors->get('mob')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                    <x-input-error  :messages="$errors->get('yob')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div>
            @endif
        </div>

        <div class="flex flex-col justify-center items-center gap-1">
            <label for="system" class="label font-bold">{{ __('immSys') }}:</label>
            <select name="system_id" id="system" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-[200px] dark:border-gray-400 dark:text-black">
                <option value="">{{ __('select_system') }}</option>
                @foreach ($systems as $system)
                {{-- @if {{ LaravelLocalization::getCurrentLocale() == 'en'}} --}}
                    <option value="{{ $system->id }}" {{ Auth::user()->system_id == $system->id ? 'selected' : '' }}>{{ LaravelLocalization::getCurrentLocale() == 'en' ? $system->name_en : $system->name_fr }}</option>
                    {{-- @else
                    <option value="{{ $system->id }}" {{ Auth::user()->system_id == $system->id ? 'selected' : '' }}>{{ $system->name_fr }}</option>
                    @endif --}}
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('system')" />
        </div>

        <div class="flex flex-col justify-center items-center gap-1">
            <label for="diploma" class="label font-bold">{{ __('degree') }}:</label>
            <select name="diploma_id" id="diploma" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-[200px] dark:border-gray-400 dark:text-black">
                <option value="">{{ __('select_degree') }}</option>
                @foreach ($diplomas as $diploma)
                    <option value="{{ $diploma->id }}" {{ Auth::user()->diploma_id == $diploma->id ? 'selected' : '' }}>{{ LaravelLocalization::getCurrentLocale() == 'en' ? $diploma->level_en : $diploma->level_fr }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('diploma')" />
        </div>

        <div class="flex flex-col justify-center items-center gap-1">
            <label for="noc" class="label font-bold">{{ __('noc') }}:</label>
            <select name="noc_id" id="noc" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-[200px] dark:border-gray-400 dark:text-black">
                <option value="">{{ __('select_noc') }}</option>
                @foreach ($nocs as $noc)
                    <option value="{{ $noc->id }}" {{ Auth::user()->noc_id == $noc->id ? 'selected' : '' }}>{{ $noc->code }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('noc')" />
        </div>

        <div class="flex flex-col justify-center items-center gap-1">
            {{-- <x-input-label class="label" for="step" :value="__('step')" /> --}}
            <label for="step" class="label font-bold">{{ __('step') }}:</label>
            <select name="step_id" id="step" class="rounded bg-slate-100 border-red-800 border-4 custom-select w-[200px] dark:border-gray-400 dark:text-black">
                <option value="">{{ __('select_step') }}</option>
                @foreach ($steps as $step)
                    <option value="{{ $step->id }}" {{ Auth::user()->step_id == $step->id ? 'selected' : '' }}>{{ LaravelLocalization::getCurrentLocale() == 'en' ? $step->name_en : $step->name_fr }}</option>
                @endforeach
            </select>
            <x-input-error  :messages="$errors->get('step')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('save') }}</x-primary-button>
        </div>
    </form>
</section>
<script>
    const dobSelect = document.getElementById('dob');
   const mobSelect = document.getElementById('mob');

   if (dobSelect != null || mobSelect != null) {
    dobSelect.addEventListener('change', updateDays);
   }

   function updateDays() {
       const selectedDay = dobSelect.value; // Save the selected day
       
       const selectedMonth = parseInt(mobSelect.value, 10);
       const selectedYear = parseInt(document.getElementById('yob').value, 10); // You need to have an element with ID 'yob' for year selection
       
       dobSelect.innerHTML = '<option value="" selected>dd</option>';

       let daysInMonth = 31;
       if ([4, 6, 9, 11].includes(selectedMonth)) {
           daysInMonth = 30;
       } else if (selectedMonth === 2) {
           daysInMonth = (selectedYear % 4 === 0 && (selectedYear % 100 !== 0 || selectedYear % 400 === 0)) ? 29 : 28;
       }

       for (let i = 1; i <= daysInMonth; i++) {
           dobSelect.innerHTML += `<option value="${i}" ${i === parseInt(selectedDay) ? 'selected' : ''}>${i}</option>`;
       }
   }

   // Initialize day options based on default selected month
   if (dobSelect != null || mobSelect != null) {
   updateDays();
    }
</script>
