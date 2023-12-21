<x-app-layout>
    <div class="flex flex-row gap-6 mt-10">
        <div class="w-2/3 pr-5 lg:border-r-4 border-gray-600 dark:border-gray-300">
            <table class="w-full">
                <tr class="border-2 border-black bg-blue-200">
                    <th class="text-start p-2 pl-1">
                        {{ __('fromUser') }}
                    </th>
                    <th class="text-start p-2">
                        {{ __('content') }}
                    </th>
                    <th class="text-start p-2">
                        {{ __('date') }}
                    </th>
                    <th class="text-start p-2">
                        Actions
                    </th>
                </tr>
                {{-- @foreach ($messages as $message)
                <tr class="messagesTr border-2 border-black">
                    <td class="p-2 pl-1 flex flex-row justify-start items-center gap-1">
                        @php
                            $profileImage = $message->fromUser->profileImage != null ? asset('img/users/' . $message->fromUser->profileImage->path) : asset('img/default.jpg');
                            $altText = "Profile Picture of " . $message->fromUser->username;
                        @endphp
                        <a href="{{ route('user.showUserProfile', $message->fromUser) }}" title="{{ __('showUserProfile') . $message->fromUser->username }}" class="flex flex-row justify-start items-center gap-1">
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-4 h-4 md:w-7 md:h-7 border-2 border-black dark:border-white">
                            {{$message->fromUser->username}}
                        </a>

                    </td>
                    <td class="messageContent text-start p-2">
                        {{$message->content}}
                    </td>
                    <td class="messageDate text-start p-2">
                        @php
                            $date = new DateTime($message->created_at);
                            $result = $date->format('d M Y - H:i');
                        @endphp
                        {{$result}}
                    </td>
                    <td class="flex flex-row justify-start items-center gap-2 p-2">
                        <form action="{{route('message.hide', $message->id)}}" method="POST">
                            @csrf
                            <button type="submit" title="{{ __('deleteMessage') }}"><i class="fa-solid fa-trash"></i></button>
                        </form> --}}
                        {{-- <a href="{{route('message.show', $message->id)}}"><i class="fa-regular fa-comment-dots"></i></i></a> --}}
                        {{-- <a href="{{route('message.show', $message->id)}}" title="{{ __('showMessage') }}"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach --}}
                @foreach ($users as $user)
                <tr class="messagesTr border-2 border-black">
                    <td class="p-2 pl-1 flex flex-row justify-start items-center gap-1">
                        @php
                            $profileImage = $user->profileImage != null ? asset('img/users/' . $user->profileImage->path) : asset('img/default.jpg');
                            $altText = "Profile Picture of " . $user->username;
                        @endphp
                        <a href="{{ route('user.showUserProfile', $user->id) }}" title="{{ __('showUserProfile') . $user->username }}" class="flex flex-row justify-start items-center gap-1">
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-4 h-4 md:w-7 md:h-7 border-2 border-black dark:border-white">
                            {{$user->username}}
                        </a>

                    </td>
                    <td class="messageContent text-start p-2">
                        {{$user->sentMessages == null ? $user->receivedMessages->last()->content : $user->sentMessages->last()}}
                    </td>
                    {{-- <td class="messageDate text-start p-2">
                        @php
                            $message = $user->sentMessages == null ? $user->receivedMessages->last() : $user->sentMessages->last();
                            $date = new DateTime($message->created_at);
                            $result = $date->format('d M Y - H:i');
                        @endphp
                        {{$result}}
                    </td> --}}
                    <td class="flex flex-row justify-start items-center gap-2 p-2">
                        @php
                            $message = $user->sentMessages == null ? $user->receivedMessages->last() : $user->sentMessages->last();
                        @endphp
                        {{-- delete message --}}
                        {{-- <form action="{{route('message.hide', $message->id)}}" method="POST">
                            @csrf
                            <button type="submit" title="{{ __('deleteMessage') }}"><i class="fa-solid fa-trash"></i></button>
                        </form> --}}
                        {{-- <a href="{{route('message.show', $message->id)}}"><i class="fa-regular fa-comment-dots"></i></i></a> --}}
                        {{-- <a href="{{route('message.show', $message->id)}}" title="{{ __('showMessage') }}"><i class="fa-solid fa-eye"></i></a> --}}
                    </td>
                </tr>
                @endforeach
        </table>
        @foreach ($users as $user)
            {{ $user->username }}
        @endforeach
        </div>
        <div class="w-1/3 bg-green-500 h-screen md:flex md:flex-col md:gap-4">
            @include('layouts.weather-card')
            @include('layouts.hashtag-card')
            @include('layouts.currency-card')
        </div>
    </div>
</x-app-layout>
<script>
    const messageContent = document.querySelectorAll('.messageContent');
    messageContent.forEach(element => {
        if (element.innerText.length > 30) {
            if (window.innerWidth < 768) {
                element.innerText = element.innerText.substring(0, 15) + '...';
            } else {
                element.innerText = element.innerText.substring(0, 30) + '...';
            }
        }
    });

    const messagesTr = document.querySelectorAll('.messagesTr');
    messagesTr.forEach((element, index) => {
        if (index % 2 == 1) {
            element.classList.add('bg-red-200');
        }
    });
</script>