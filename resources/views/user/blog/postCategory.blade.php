<x-app-layout>
    @foreach ($posts as $post)
    <div>{{ $post->id }}
    {{ $post->category->name }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p>
    @endforeach
</x-app-layout>