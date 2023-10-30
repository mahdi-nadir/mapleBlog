<x-app-layout>
    {{-- @if (Auth::user()->diploma_id == 1 || Auth::user()->system_id == 1 || Auth::user()->noc_id == 1)
    you cannot write a post until you complete your profile
    @else
    @include('user.blog.blog-components.writing-post')
    @endif --}}

    @if (Auth::user()->diploma_id == null || Auth::user()->system_id == null || Auth::user()->noc_id == null || Auth::user()->step_id == null || Auth::user()->date_of_birth == null || Auth::user()->gender_id == null)
    <div class="my-2">
        <a href="{{ route('profile.edit') }}" title="{{ __('updateInfo') }}">
            <button class="p-1 text-md w-fit bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300">
                {{ __('updateInfoToWritePost') }}
            </button>
        </a>
    </div>
    @else
        <div class="my-2">
            <button id="showWritePost" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300">{{ __('writePost') }}</button>
        </div>
        @include('user.blog.blog-components.writing-post')
    @endif
    
    <select name="category" id="cat" class="dark:text-black">
        <option value="">{{ __('all') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ LaravelLocalization::getCurrentLocale() == 'en' ? $category->name_en : $category->name_fr }}</option>
        @endforeach
    </select>

    <div id="posts-container">
        @foreach ($posts as $post)
        <div class="w-5/6 md:w-1/3 bg-red-300 mx-auto my-8">
            <a href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}">
                <div class="px-2 text-black flex flex-row justify-center items-center gap-2">
                    @if ($post->user->profileImage != null)
                        <img src="{{ asset('img/' . $post->user->profileImage->path) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                    @else
                        <img src="{{ asset('img/default.png') }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                    @endif
                    {{-- <img src="{{ asset('img/' . $post->user->profileImage ?? ) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white"> --}}
                    <div class="flex flex-col text-start">
                        <span class="font-bold">{{ $post->user->username }}</span>
                    </div>
                </div>
                @if ($post->user_id == Auth::user()->id)
                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit">Delete</button>
                    </form>
                @endif
                
                
                
            </a>
        </div>
        {{-- @if ($post->user_id == Auth::user()->id)
        <form action="{{ route('post.destroy', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <button type="submit">Delete</button>
        </form>
        @endif
        <br> --}}
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