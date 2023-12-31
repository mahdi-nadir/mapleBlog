<x-app-layout>
    {{-- foreach messages --}}
    @foreach ($messages as $message)
    <div>
    {{ $message->content }}
</div><br><br><br>
    @endforeach
    {{-- <form action="{{ route('message.send', $message->receiver_msg_id) }}" method="post">
        @csrf
        @method('post')
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form> --}}
</x-app-layout>