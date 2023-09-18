<x-app-layout>
    @if (Auth::user()->diploma_id == 1 || Auth::user()->system_id == 1 || Auth::user()->noc_id == 1)
    you cannot write a post until you complete your profile
    @else
    @include('user.blog.blog-components.writing-post')
    @endif
    
    <select name="category" id="cat" class="dark:text-black">
        <option value="">{{ __('all') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <div id="posts-container">
        @foreach ($posts as $post)
        <a href=" {{ route('post.index', [$post->category->name, $post->id]) }}">
        {{ $post->title }}</a><br>
        @endforeach
    </div>
</x-app-layout>
    <script>
        const categorySelect = document.querySelector('#cat');
categorySelect.addEventListener('change', function () {
    const categoryId = this.value;

    fetch('{{ route("post.filter") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({ category: categoryId }),
    })
    .then(response => response.json())
    .then(data => {
        const postsContainer = document.getElementById('posts-container');
        postsContainer.innerHTML = '';

        data.forEach(post => {
            const postDiv = document.createElement('div');
            const postLink = document.createElement('a');
            postLink.href = `maplemind-blog/${post.category.name}/${post.post_id}`;
            postLink.textContent = post.title;
            postDiv.appendChild(postLink);
            postsContainer.appendChild(postDiv);
        });
    })
    .catch(error => console.error('Error:', error));
});

    </script>