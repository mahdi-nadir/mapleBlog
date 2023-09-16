<x-app-layout>
    <div>{{ $post->id }}
    {{ $post->title }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p>
</x-app-layout>
