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
                @foreach ($messages as $message)
                <tr class="border-2 border-black">
                    <td class="p-2 pl-1 flex flex-row justify-start items-center gap-1">
                        @php
                            $profileImage = $message->fromUser->profileImage != null ? asset('img/users/' . $message->fromUser->profileImage->path) : asset('img/default.jpg');
                            $altText = "Profile Picture of " . $message->fromUser->username;
                        @endphp
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-4 h-4 md:w-7 md:h-7 border-2 border-black dark:border-white">
                        </a>
                        {{$message->fromUser->username}}
                    </td>
                    <td class="messageContent text-start p-2">
                        {{$message->content}}
                    </td>
                    <td class="messageDate text-start p-2">
                        @php
                            $date = new DateTime($message->created_at);
                            $result = $date->format('d M');
                        @endphp
                        {{$result}}
                    </td>
                    <td class="flex flex-row justify-start items-center gap-2 p-2">
                        <form action="{{route('message.hide', $message->id)}}" method="POST">
                            @csrf
                            <button type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        <a href="{{route('message.show', $message->id)}}"><i class="fa-regular fa-comment-dots"></i></i></a>
                        <a href="{{route('message.show', $message->id)}}"><i class="fa-solid fa-eye"></i></a>
                    </td>
                @endforeach
        </table>
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
</script>