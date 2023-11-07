<x-app-layout>
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
    
    <form action="{{ route("post.filter") }}" method="post">
        @csrf
        @method('POST')
        <select name="category" id="cat" class="dark:text-black">
            <option value="">{{ __('all') }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif>{{ LaravelLocalization::getCurrentLocale() == 'en' ? $category->name_en : $category->name_fr }}</option>
            @endforeach
        </select>
        <input type="submit" value="{{ __('search') }}" class="p-1 w-fit bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300 cursor-pointer italic text-sm">
    </form>

    <form action="{{ route("post.search") }}" method="get">
        @csrf
        <input type="text" name="search" id="search">
        <input type="submit" value="{{ __('search') }}" class="p-1 w-fit bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300 cursor-pointer italic text-sm">
    </form>

    <div id="posts-container">
        @foreach ($posts as $post)
        <div class="w-5/6 md:w-1/3 mx-auto my-8 border-2 border-slate-700 dark:border-slate-600 rounded p-2">
                <div class="flex flex-col justify-between gap-3">
                    <div class="flex flex-row justify-between items-center pr-2 border-b-2 border-slate-700 dark:border-slate-600 pb-2">
                        <div class="px-2 text-black flex flex-row justify-center items-center gap-2">
                            @if ($post->user->profileImage != null)
                                <img src="{{ asset('img/' . $post->user->profileImage->path) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                            @else
                                <img src="{{ asset('img/default.png') }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                            @endif
                            <div class="flex flex-col text-start text-[12px] italic dark:text-white">
                                <span class="font-bold">{{ $post->user->username }}</span>
                                @php
                                    $dateString = $post->created_at;
                                    $date = new DateTime($dateString);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    if (LaravelLocalization::getCurrentLocale() == 'en') {
                                        if ($interval->y > 0) {
                                            echo $interval->y . ' years ago';
                                        } elseif ($interval->m > 0) {
                                            echo $interval->m . ' months ago';
                                        } elseif ($interval->d > 0) {
                                            echo $interval->d . ' days ago';
                                        } elseif ($interval->h > 0) {
                                            echo $interval->h . ' hours ago';
                                        } elseif ($interval->i > 0) {
                                            echo $interval->i . ' minutes ago';
                                        } elseif ($interval->s > 0) {
                                            echo $interval->s . ' seconds ago';
                                        }
                                    } else {
                                        if ($interval->y > 0) {
                                            echo $interval->y . ' ans';
                                        } elseif ($interval->m > 0) {
                                            echo $interval->m . ' mois';
                                        } elseif ($interval->d > 0) {
                                            echo $interval->d . ' jours';
                                        } elseif ($interval->h > 0) {
                                            echo $interval->h . ' heures';
                                        } elseif ($interval->i > 0) {
                                            echo $interval->i . ' minutes';
                                        } elseif ($interval->s > 0) {
                                            echo $interval->s . ' secondes';
                                        }
                                    }
                                @endphp
                            </div>
                        </div>
                        @if ($post->user_id == Auth::user()->id)
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button type="submit" title="{{ __('deletePost') }}"><i class="fa-solid fa-trash-can p-2 bg-red-500 hover:bg-red-700 text-white rounded-full"></i></button>
                            </form>
                        @endif
                    </div>
                    <div class="ml-4 text-start">
                        <div class="w-80 overflow-hidden">
                            <h1 class="font-bold truncate">
                                {{ $post->title }}
                            </h1>
                        </div>
                        <div {{-- class="w-200 overflow-hidden" --}}>
                            <p class="indent-4 {{-- truncate --}}">
                                {{ $post->content }}
                            </p>
                        </div>
                    </div>
                    @if ($post->img_post_id != null)
                        <div class="w-[200px] md:w-[350px] mx-auto border-2 border-slate-700 dark:border-slate-600 rounded">
                        @php
                            $img = $post->imgPost->path;
                        @endphp
                            <img src="{{ asset("$img") }}" alt="{{ $post->id }}" class="cover">
                        </div>
                    @endif
                    <div class="text-end mr-2 mb-1 border-t-2 border-slate-700 dark:border-slate-600 pt-2">
                        <a href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}">
                            <button class="italic text-[12px] p-1 rounded bg-green-800 text-white hover:bg-green-600">
                                {{ __('showPost')}} <i class="fa-solid fa-angles-right animate-pulse"></i>
                            </button>
                        </a>
                    </div>

                    {{-- <div class="text-end mr-2 mb-1">
                        <button class="italic text-[12px] p-1 rounded bg-green-800 text-white hover:bg-green-600">
                            {{ __('comment')}}
                        </button>
                    </div> --}}
                </div>
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
//         const categorySelect = document.querySelector('#cat');
// categorySelect.addEventListener('change', function () {
//     const categoryId = this.value;

//     fetch('{{ route("post.filter") }}', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': '{{ csrf_token() }}',
//         },
//         body: JSON.stringify({ category: categoryId }),
//     })
//     .then(response => response.json())
//     .then(data => {
//         const postsContainer = document.getElementById('posts-container');
//         postsContainer.innerHTML = '';

//         data.forEach(post => {
//             const postDiv = document.createElement('div');
//             const postLink = document.createElement('a');
//             postLink.href = `maplemind-blog/${post.category.name}/${post.post_id}`;
//             postLink.textContent = post.title;
//             postDiv.appendChild(postLink);
//             postsContainer.appendChild(postDiv);
//         });
//     })
//     .catch(error => console.error('Error:', error));
// });

    </script>