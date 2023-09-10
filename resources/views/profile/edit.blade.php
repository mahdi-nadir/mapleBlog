<x-app-layout>
    {{-- <x-slot name="header" class="text-center"> --}}
        <h2 class="font-bold text-xl md:text-4xl uppercase text-center mt-5">
            {{ __('Profile') }}
        </h2>
    {{-- </x-slot> --}}
    <div class="flex flex-col items-center text-center md:flex-row md:justify-center md:text-left md:space-x-10 w-full md:w-1/2 mx-auto mb-10 mt-5">
        <!-- Profile Image -->
        <img src="{{ asset('img/' . $image) }}" alt="Profile Image" class="object-cover w-60 h-60 border-2 border-black dark:border-white rounded-lg mb-4 lg:mb-0">
    
        <!-- User Information -->
        <div class="text-lg lg:text-xl">
            <h3><span class="font-bold">{{ __('Username') }}: </span>{{ $user->username }}</h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('email') }}: </span>{{ $user->email }}</h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('Immigration System') }}: </span><span class={{ $user->system->name == 'Not set' ? 'text-red-500' : '' }}>{{ $user->system->name }}</span></h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('Step') }}: </span><span class={{ $user->step->name == 'Not set' ? 'text-red-500' : '' }}>{{ $user->step->name }}</span></h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('Degree') }}: </span><span class={{ $user->diploma->level == 'Not set' ? 'text-red-500' : '' }}>{{ $user->diploma->level }}</span></h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('NOC') }}: </span><span class={{ $user->noc->code == 'Not set' ? 'text-red-500' : '' }}>{{ $user->noc->code }}</span></h3>
            <h3 class="mt-1"><span class="font-bold">{{ __('Date of birth') }}: </span>{{ explode('-', $user->date_of_birth)[2] }}-{{ explode('-', $user->date_of_birth)[1] }}-{{ explode('-', $user->date_of_birth)[0] }}</h3>
        </div>
    </div>
    
    
    <div class="flex flex-col md:flex-row md:flex-wrap justify-center md:w-1/2 items-center gap-4 md:gap-8 mx-auto">
        <button id="showImgDiv" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-red-800">Set New Profile Picture</button>
        <button id="showUserInfoDiv" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-red-800">User Information</button>
        <button id="showUpdatePasswordDiv" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-red-800">Set New Password</button>
        <button id="showDeleteUserDiv" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-red-800">Delete Account</button>
    </div>

    <section id="sectionEditProfile" class="flex flex-col justify-center items-center gap-4 rounded w-full  text-center p-5 mx-auto">
            {{-- <div class="flex flex-col md:flex-row justify-evenly items-center gap-4 bg-blue-200 w-full"> --}}
            <div id="imgDiv" class="hidden">
                @include('profile.partials.update-image-form')
            </div>
            {{-- </div> --}}

            {{-- <div class="flex flex-row justify-center items-center gap-4"> --}}
                <div id="userInfoDiv" class="hidden">
                    @include('profile.partials.update-profile-information-form')
                </div>
            {{-- </div> --}}

            {{-- <div> --}}
                <div id="updatePasswordDiv" class="hidden">
                    @include('profile.partials.update-password-form')
                </div>
            {{-- </div> --}}

            {{-- <div> --}}
                <div id="deleteAccountDiv" class="hidden">
                    @include('profile.partials.delete-user-form')
                </div>
            {{-- </div> --}}
    </section>
    <script>
        const showImgDiv = document.getElementById('showImgDiv');
        const showUserInfoDiv = document.getElementById('showUserInfoDiv');
        const showUpdatePasswordDiv = document.getElementById('showUpdatePasswordDiv');
        const showDeleteUserDiv = document.getElementById('showDeleteUserDiv');
        const imgDiv = document.getElementById('imgDiv');
        const userInfoDiv = document.getElementById('userInfoDiv');
        const updatePasswordDiv = document.getElementById('updatePasswordDiv');
        const deleteAccountDiv = document.getElementById('deleteAccountDiv');
        const sectionEditProfile = document.getElementById('sectionEditProfile');

        showImgDiv.addEventListener('click', (e) => {
            e.preventDefault();
            imgDiv.classList.toggle('hidden');
            userInfoDiv.classList.add('hidden');
            updatePasswordDiv.classList.add('hidden');
            deleteAccountDiv.classList.add('hidden');
            sectionEditProfile.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        });

        showUserInfoDiv.addEventListener('click', (e) => {
            e.preventDefault();
            imgDiv.classList.add('hidden');
            userInfoDiv.classList.toggle('hidden');
            updatePasswordDiv.classList.add('hidden');
            deleteAccountDiv.classList.add('hidden');
            sectionEditProfile.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        });

        showUpdatePasswordDiv.addEventListener('click', (e) => {
            e.preventDefault();
            imgDiv.classList.add('hidden');
            userInfoDiv.classList.add('hidden');
            updatePasswordDiv.classList.toggle('hidden');
            deleteAccountDiv.classList.add('hidden');
            sectionEditProfile.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        });

        showDeleteUserDiv.addEventListener('click', (e) => {
            e.preventDefault();
            imgDiv.classList.add('hidden');
            userInfoDiv.classList.add('hidden');
            updatePasswordDiv.classList.add('hidden');
            deleteAccountDiv.classList.toggle('hidden');
            sectionEditProfile.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        });

        
        
    </script>
</x-app-layout>
