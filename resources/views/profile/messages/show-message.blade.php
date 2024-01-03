<x-app-layout>
    {{-- foreach messages --}}
    <div class="flex flex-row gap-6 mt-10">
        <div class="w-2/3 flex flex-col gap-2 text-start pr-5 lg:border-r-4 border-gray-600 dark:border-gray-300">
            @foreach ($messages as $msg)
                @php
                    $isCurrentUser = $msg->user1_id == Auth::user()->id;
                    $profileImage = $msg->user1->profileImage != null ? asset('img/users/' . $msg->user1->profileImage->path) : asset('img/default.jpg');
                    $altText = "Profile Picture of " . $msg->user1->username;
                @endphp
        
                <div class="flex justify-{{ $isCurrentUser ? 'start' : 'end' }} items-end gap-1">
                    @if ($isCurrentUser)
                        <a href="{{ route('profile.edit') }}" title="{{ __('goToProfile') }}" class="flex flex-row justify-start items-center gap-1 hover:scale-105">
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-5 h-5 md:w-9 md:h-9 border-2 border-black dark:border-white">
                        </a>
                    @endif
        
                    <div class="{{ $isCurrentUser ? 'bg-blue-500 text-white rounded-lg rounded-bl-sm' : 'bg-gray-200 text-black rounded-lg rounded-br-sm' }} p-2 w-1/2">
                        {{ $msg->content }}
                    </div>
        
                    @unless ($isCurrentUser)
                        <a href="{{ route('user.showUserProfile', $msg->user1->id) }}" title="{{ __('showUserProfile') . $msg->user1->username }}" class="flex flex-row justify-start items-center gap-1 hover:scale-105">
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-5 h-5 md:w-9 md:h-9 border-2 border-black dark:border-white">
                        </a>
                    @endunless
                </div>
            @endforeach
        </div>
        
        {{-- <form action="{{ route('message.send', $message->receiver_msg_id) }}" method="post">
            @csrf
            @method('post')
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <button type="submit">Send</button>
        </form> --}}
        <div class="w-1/3 bg-green-500 h-screen md:flex md:flex-col md:gap-4">
            @include('layouts.weather-card')
            @include('layouts.hashtag-card')
            @include('layouts.currency-card')
        </div>
    </div>
</x-app-layout>