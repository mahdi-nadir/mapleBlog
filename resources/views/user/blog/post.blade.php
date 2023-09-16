<x-app-layout>
    <div>{{ $post->id }}
    {{ $post->title }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p>
    @if ($image != null)
        <img src="{{ asset("$image->path") }}" alt="kkk">
    @endif
</x-app-layout>
