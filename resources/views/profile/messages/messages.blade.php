<x-app-layout>
    <div class="flex flex-row gap-6 mt-10">
        <div class="w-2/3 pr-5 lg:border-r-4 border-gray-600 dark:border-gray-300 flex flex-col justify-start items-center gap-4">
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
                {{-- {{ $inboxes[0]->inbox_participants }} --}}
                @foreach ($inboxes as $inbox)
                @php
                    $isRead = 0;
                    if ($inbox->last_message_sent_id != Auth::user()->id)
                    {
                        if ($inbox->user1_id == Auth::user()->id && $inbox->read_user1 == 0) {
                            $isRead = 1;
                        } else if ($inbox->user2_id == Auth::user()->id && $inbox->read_user2 == 0) {
                            $isRead = 1;
                        }
                    }
                @endphp
                <tr class="messagesTr border-2 border-black {{ $isRead == 1 ? 'font-bold' : 'font-normal' }}" data-theinbox={{ $inbox }}>
                    <td class="p-2 pl-1 flex flex-row justify-start items-center gap-1">
                        @php
                            $inboxUser = $inbox->user1->id == Auth::user()->id ? $inbox->user2 : $inbox->user1;
                            $profileImage = $inboxUser->profileImage != null ? asset('img/users/' . $inboxUser->profileImage->path) : asset('img/default.jpg');
                            $altText = "Profile Picture of " . $inboxUser->username;
                        @endphp
                        <a href="{{ route('user.showUserProfile', $inboxUser->id) }}" title="{{ __('showUserProfile') . $inboxUser->username }}" class="flex flex-row justify-start items-center gap-1">
                            <img src="{{ $profileImage }}" alt="{{ $altText }}" class="rounded-full w-4 h-4 md:w-7 md:h-7 border-2 border-black dark:border-white">
                            {{$inboxUser->username}}
                        </a>
                    </td>
                    <td class="messageContent text-start p-2">
                        {{$inbox->last_message}}
                    </td>
                    <td class="messageDate text-start p-2">
                        @php
                            $message_time = $inbox->updated_at;
                            $date = new DateTime($message_time);
                            $result = $date->format('d M Y - H:i');
                        @endphp
                        {{$result}}
                    </td>
                    <td class="flex flex-row justify-start items-center gap-2 p-2">
                        <a href="{{route('inbox.show', $inbox->id)}}" title="{{ __('showMessage') }}"><i class="fa-solid fa-eye"></i></a>
                        <button 
                            data-inbox-id="{{ $inbox->id }}" 
                            data-auth={{ auth()->user()->id }} 
                            data-contact-user={{ $inbox->user1->id == Auth::user()->id ? $inbox->user2 : $inbox->user1 }} 
                            data-auth-img={{ auth()->user()->profileImage != null ? asset('img/users/' . auth()->user()->profileImage->path) : asset('img/default.jpg') }} 
                            data-contact-user-img={{ $profileImage }} 
                            data-route="{{ route('inbox.show', $inbox->id) }}"
                            data-route2="{{ route('message.read', $inbox->id) }}"
                            data-date={{ $inbox->updated_at }}
                            class="showBtn font-normal">
                            Show
                        </button>
                    </td>
                </tr>
                @endforeach
        </table>
        <div id="conversationContainer" class="flex flex-col gap-2 text-start w-full bg-green-200 {{-- lg:border-4 border-gray-600 dark:border-gray-300 --}}">
        </div>
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

    const conversationContainer = document.getElementById('conversationContainer');
    let inboxIdBtns = document.querySelectorAll('button[data-inbox-id]');

    inboxIdBtns.forEach(button => {
        button.addEventListener('click', function() {
            const inboxId = button.dataset.inboxId;
            const route = button.dataset.route;
            const currentUserId = button.dataset.auth;
            const contactUserId = button.dataset.contactUser;
            const contactUserImg = button.dataset.contactUserImg;
            const authImg = button.dataset.authImg;
            const date = button.dataset.date;

            fetch(route)
            .then(response => response.json())
            .then(messages => {
                conversationContainer.innerHTML = '';
                // console.log(messages);
                for (let message of messages) {
                    const messageContainer = document.createElement('div');
                    const messageDivImg = document.createElement('div');
                    const messageDiv = document.createElement('div');
                    const messageDate = document.createElement('div');
                    if (message.user1_id == currentUserId) {
                        messageContainer.classList.add('flex', 'justify-start', 'items-end', 'gap-1');
                        messageDiv.classList.add('flex', 'justify-start', 'items-start', 'gap-1', 'w-1/2', 'bg-blue-500');
                        messageDivImg.innerHTML = `
                            <img src="${authImg}" alt="Profile picture of ${currentUserId}" class="rounded-full w-5 h-5 md:w-8 md:h-8 border-2 border-black dark:border-white">`;
                            messageDiv.innerHTML = message.content;
                            messageDate.innerHTML = date;
                            messageContainer.appendChild(messageDivImg);
                            messageContainer.appendChild(messageDiv);
                            messageContainer.appendChild(messageDate);
                            // set date ##################################
                    } else {
                        messageContainer.classList.add('flex', 'justify-end', 'items-end', 'gap-1');
                        messageDiv.classList.add('flex', 'justify-end', 'items-start', 'gap-1', 'w-1/2', 'bg-gray-200');
                        messageDiv.innerHTML = message.content;
                        messageDivImg.innerHTML = `
                            <img src="${contactUserImg}" alt="Profile picture of ${contactUserId}" class="rounded-full w-5 h-5 md:w-8 md:h-8 border-2 border-black dark:border-white">`;
                            messageContainer.appendChild(messageDiv);
                            messageContainer.appendChild(messageDivImg);
                    }
                    conversationContainer.appendChild(messageContainer);
                                }
                            })
                        })
                    })

        const showBtns = document.querySelectorAll('.showBtn');
        
        showBtns.forEach(showBtn => {
            showBtn.addEventListener('click', () => {
                const inboxId = showBtn.dataset.inboxId;
                const route2 = showBtn.dataset.route2;

                fetch(route2, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json, text-plain, */*',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        inboxId: inboxId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    showBtn.closest('tr').classList.remove('font-bold'); 
                })
            })
        })
</script>