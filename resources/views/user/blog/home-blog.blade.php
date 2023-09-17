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
        {{ $post->category_id }}</a><br>
        @endforeach
    </div>
    {{-- <div id="allPosts">
    @foreach ($posts as $post)
    <div><a href="{{ route('post.index', [$post->category->name, $post->id]) }}">
        {{ $post->title }}</a></div>
        {{ $post->category->name }}<br><br>
    </div>
    @endforeach
    </div> --}}
</x-app-layout>
    <script>
        // Add an event listener to the category dropdown
        document.querySelector('#cat').addEventListener('change', function () {
            // if (document.querySelector('#cat').value == '') {
            //     document.querySelector('#allPosts').style.display = 'block';
            //     console.log('block');
            // } else {
            //     document.querySelector('#allPosts').style.display = 'none';
            //     console.log('none');
            // }
            // Get the selected category value
            const categoryId = this.value;
    
            // Send an AJAX request to fetch filtered posts
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
                // Handle the response data and update the posts section
                const postsContainer = document.getElementById('posts-container');
                postsContainer.innerHTML = '';
    
                data.forEach(post => {
                    const postDiv = document.createElement('div');
                    const postLink = document.createElement('a');
                    const postCategory = document.createElement('span');
                    postLink.href = `{{ route("post.index", [$post->category->name, $post->id]) }}`;
                    // postLink.textContent = post.title;
                    postLink.textContent = post.category_id;
                    postDiv.appendChild(postLink);
                    // postDiv.appendChild(postCategory);
                    postsContainer.appendChild(postDiv);
                });
            })
            .catch(error => console.error('Error:', error));
        });
    </script>