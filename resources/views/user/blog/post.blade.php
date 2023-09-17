<x-app-layout>
    <div>{{ $post->id }}
    {{ $post->title }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p>
    @if ($image != null)
        <img src="{{ asset("$image->path") }}" alt="{{ __('Image for post') }}: {{ $post->title }}">
    @endif
    {{-- like and dislike buttons --}}
    {{-- likes {{ $post->likes->count() }} --}}
    {{-- <button class="like-button {{ auth()->user()->likedPosts->contains($post) ? 'liked' : '' }}" data-post-id="{{ $post->id }}">
        <i class="fas fa-thumbs-up"></i> Like
    </button> --}}
    {{-- <button class="dislike-button" data-post-id="{{ $post->id }}" data-type="dislike">Dislike</button> --}}
</x-app-layout>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const likeButtons = document.querySelectorAll('.like-button');

        likeButtons.forEach(button => {
            button.addEventListener('click', () => toggleLike(button));
        });

        async function toggleLike(button) {
    const postId = button.getAttribute('data-post-id');
    const isLiked = button.classList.contains('liked');
    const type = isLiked ? 'unlike' : 'like';

    const response = await fetch('/toggle-like', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            postId,
            type,
        }),
    });

    if (response.ok) {
        const result = await response.json();
        // Update UI to reflect the change, e.g., increment like/dislike count
        button.classList.toggle('liked');
        const icon = button.querySelector('i');
        icon.classList.toggle('text-blue-500'); // Change the color
    } else {
        console.error('Error:', response.statusText);
    }
}
    });
</script> --}}

