<x-app-layout>
    <a href="{{ route('posts.category', ['category' => 'Express Entry']) }}">
        ee
    </a><br>
    <a href="{{ route('posts.category', ['category' => 'Arrima']) }}">arrima</a><br>
    <a href="{{ route('posts.category', ['category' => 'Study visa']) }}">study permit</a><br>
    <a href="{{ route('posts.category', ['category' => 'Work visa']) }}">work permit</a><br>
    <a href="{{ route('posts.category', ['category' => 'Family Sponsorship and Reunification']) }}">sponsorship</a><br><br>
@foreach ($posts as $post)
    <a href="{{ route('post.index', [$post->category->name, $post->id]) }}">
    {{ $post->title }}</a><br>
@endforeach
</x-app-layout>
