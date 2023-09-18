<x-guest-layout>
        <section class="flex flex-col justify-center items-center gap-4 rounded border-2 border-black bg-black bg-opacity-60 w-5/6 md:w-1/3 text-center absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5">
            <form class="flex flex-col items-center justify-center gap-2 md:gap-4 text-white" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="font-bold text-xl md:text-4xl uppercase">Register</div>

                <!-- Name -->
                <div class="mt-2 md:mt-4 w-[100%]">
                    <x-input-label for="username" :value="__('Username')" class="text-white text-lg md:text-xl"/>
                    <div>
                        <x-text-input id="username" type="text" name="username" :value="old('username')" required autocomplete="off" autofocus class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                        <x-input-error :messages="$errors->get('username')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                    </div>
                </div>

               {{--  <x-input-label for="dob" :value="__('Date of birth')" class="text-white text-lg md:text-xl mt-2 md:mt-4 mb-[-3%]"/>
                <div class="flex flex-row justify-center items-center gap-2 w-[100%]">
                    <div>
                        <select name="dob" id="dob" class="text-black rounded-md p-2">
                            
                        </select>
                    </div>
                    
                    <div>
                        <select name="mob" id="mob" class="text-black rounded-md p-2">
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
                </div> --}}

                {{-- <div class="mt-2 md:mt-4 w-[100%]">
                    <x-input-label for="gender" :value="__('Gender')" class="text-white text-lg md:text-xl"/>
                    <select name="gender_id" id="gender" class="w-[100%] p-1 text-lg md:text-xl text-black rounded-md">
                        <option value="" class="text-slate-400" disabled selected>{{ __('XY') }}</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                    <x-input-error  :messages="$errors->get('gender')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                </div> --}}

                <!-- Email Address -->
                <div class="mt-2 md:mt-4 w-[100%]">
                    <x-input-label for="email" :value="__('Email')" class="text-white text-lg md:text-xl"/>
                    <div>
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="off" class="w-[100%] p-1 text-lg md:text-xl text-black"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 bg-red-600 p-1 text-white italic rounded"/>
                    </div>
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

                <div class="flex flex-col items-center justify-center gap-4 md:gap-6 mt-2">
                    <a href="{{ route('login') }}" class="underline">
                        {{ __('Already a member? Log in') }}
                    </a>

                    <x-primary-button class="p-2 text-md md:text-xl bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800">
                        {{ __('Sign up') }}
                    </x-primary-button>
                </div>
            </form>
        </section>
</x-guest-layout>
{{-- <script>
     const dobSelect = document.getElementById('dob');
    const mobSelect = document.getElementById('mob');

    mobSelect.addEventListener('change', updateDays);

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

    updateDays();
</script> --}}