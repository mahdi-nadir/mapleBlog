<x-app-layout>
    @foreach ($posts as $post)
    <div><a href="{{ route('post.index', [$post->category->name, $post->id]) }}">
    {{ $post->category->name }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p></a><br><br>
    @endforeach
    {{ $posts->links() }}
</x-app-layout>