<x-app-layout>
    {{-- foreach messages --}}
    <div class="flex flex-col gap-2 text-start">
        @foreach ($messages as $message)
            @if ($message->user1_id == Auth::user()->id)
                <div class="flex justify-start">
                    <div class="bg-blue-500 text-white rounded-lg p-2 w-1/2">
                        {{ $message->content }}
                    </div>
                </div>
            @else
                <div class="flex justify-end">
                    <div class="bg-gray-200 text-black rounded-lg p-2 w-1/2">
                        {{ $message->content }}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    {{-- <form action="{{ route('message.send', $message->receiver_msg_id) }}" method="post">
        @csrf
        @method('post')
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form> --}}
</x-app-layout>