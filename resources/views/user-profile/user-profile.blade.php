<x-app-layout>
    <div class="flex flex-col items-center text-center md:flex-row md:justify-center md:text-left md:space-x-10 w-full md:w-1/2 mx-auto mb-10 mt-5">
        <!-- Profile Image -->
        @if ($visitedUser->profileImage != null)
            <img src="{{ asset('img/users/' . $visitedUser->profileImage->path) }}" alt="Profile Image" class="object-cover w-60 h-60 border-2 border-black dark:border-white rounded-lg mb-4 lg:mb-0">
        @else
            <img src="{{ asset('img/default.jpg') }}" alt="Profile Image" class="object-cover w-60 h-60 border-2 border-black dark:border-white rounded-lg mb-4 lg:mb-0">
        @endif
    
        <!-- User Information -->
        <div class="text-lg lg:text-xl">
            <h3><span class="font-bold">{{ __('username') }}: </span>{{ $visitedUser->username }}</h3>
            <h3 class="mt-1">
                <span class="font-bold">
                    {{ __('email') }}: 
                </span>
                {{ $visitedUser->email }}
            </h3>
            
            <h3 class="mt-1">
                <span class="font-bold">
                    {{ __('immSys') }}: 
                </span>
                @if ($visitedUser->system_id == null)
                <span class='text-red-500'>
                    {{ __('notSpecified') }}
                    @else
                    <span>
                    {{ LaravelLocalization::getCurrentLocale() == 'en' ? auth()->user()->system->name_en : auth()->user()->system->name_fr }}
                    @endif
                </span>
            </h3>
            
            <h3 class="mt-1">
                <span class="font-bold">
                    {{ __('step') }}: 
                </span>
                @if ($visitedUser->step_id == null)
                <span class='text-red-500'>
                    {{ __('notSpecified') }}
                    @else
                    <span>
                        {{ LaravelLocalization::getCurrentLocale() == 'en' ? auth()->user()->step->name_en : auth()->user()->step->name_fr }}
                    @endif
                </span>
            </h3>
            
            <h3 class="mt-1">
                <span class="font-bold">
                    {{ __('degree') }}: 
                </span>
                @if ($visitedUser->diploma_id == null)
                <span class='text-red-500'>
                    {{ __('notSpecified') }}
                    @else
                    <span>
                        {{ LaravelLocalization::getCurrentLocale() == 'en' ? auth()->user()->diploma->level_en : auth()->user()->diploma->level_fr }}
                    @endif
                </span>
            </h3>
            
            <h3 class="mt-1">
                <span class="font-bold">
                    {{ __('noc') }}: 
                </span>
                @if ($visitedUser->noc_id == null)
                <span class='text-red-500'>
                    {{ __('notSpecified') }}
                    @else
                    <span>
                    {{ $visitedUser->noc->code }}
                    @endif
                </span>
            </h3>
            
            @if (auth()->user()->date_of_birth != null)
            <h3 class="mt-1"><span class="font-bold">{{ __('dob') }}: </span>{{ explode('-', $visitedUser->date_of_birth)[2] }}-{{ explode('-', $visitedUser->date_of_birth)[1] }}-{{ explode('-', $visitedUser->date_of_birth)[0] }}</h3>
            @else
            <h3 class="mt-1"><span class="font-bold">{{ __('dob') }}: </span><span class='text-red-500'>{{ __('notSpecified') }}</span></h3>
            @endif
        </div>
    </div>
</x-app-layout>