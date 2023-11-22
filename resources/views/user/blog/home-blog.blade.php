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
        <div class="w-5/6 md:w-2/5 md:ml-5 my-6 border-2 border-slate-700 dark:border-slate-600 rounded" >
                <div class="post flex flex-col justify-between gap-3" data-user-id="{{$post->user_id}}" data-post-id="{{$post->id}}" data-cat="{{ $post->category->name_en }}">
                    <div class="flex flex-col justify-center items-start border-b-2 border-slate-700 dark:border-slate-600 bg-red-200 dark:bg-slate-400 pb-2">
                        <div class="w-full px-2 text-black flex flex-row justify-between items-center mt-2 bg-blue-400">
                            <div class="flex flex-row justify-between items-center gap-2">
                                @if ($post->user->profileImage != null)
                                    <img src="{{ asset('img/' . $post->user->profileImage->path) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-8 h-8 md:w-14 md:h-14 border-2 border-black dark:border-white">
                                @else
                                    <img src="{{ asset('img/default.png') }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-8 h-8 md:w-14 md:h-14 border-2 border-black dark:border-white">
                                @endif
                                <div class="flex flex-col text-start justify-center items-start text-[14px] dark:text-white">
                                    <span class="font-bold">{{ $post->user->username }}</span>
                                    <div class="italic font-bold text-blue-500 dark:text-blue-300">
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
                            </div>
                            {{-- <div class="cursor-pointer">
                                <i class="fa-solid fa-ellipsis" data-id={{$post->id}}></i>
                            </div> --}}
                            {{-- delete and show buttons --}}
                            <div class="flex flex-row items-center justify-end gap-3 w-fit text-end pr-2 pt-2">
                                @if ($post->user_id == Auth::user()->id)
                                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit" title="{{ __('deletePost') }}"><i class="fa-solid fa-trash-can p-2 bg-red-500 hover:bg-red-700 text-white rounded-full"></i></button>
                                    </form>
                                @endif
                                <a href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}" title="{{ __('showPost') }}">
                                    <button class="italic">
                                        {{-- {{ __('showPost')}} --}} <i class="fa-solid fa-angles-right animate-pulse text-lg text-white p-2 bg-green-500 hover:bg-green-700 rounded-full"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- post content --}}
                    <div class="text-start w-full">
                        {{-- <div class="overflow-hidden text-center uppercase underline mb-2">
                            <h1 class="font-bold truncate">
                                {{ $post->title }}
                            </h1>
                        </div> --}}
                        <div {{-- class="w-200 overflow-hidden" --}}>
                            <p class="pl-2 text-md md:text-lg{{--indent-4  truncate --}}">
                                {{ $post->content }}
                            </p>
                        </div>
                        @if ($post->img_post_id != null)
                            <div class="w-[150px] md:w-[250px] mx-auto border-2 border-slate-700 dark:border-slate-600 rounded my-4">
                            @php
                                $img = $post->imgPost->path;
                            @endphp
                                <img src="{{ asset("$img") }}" alt="{{ $post->id }}" class="cover">
                            </div>
                        @endif
                    </div>
                    
                    

                    {{-- nb of comments --}}
                    {{-- {{$post->comments->count()}}
                    id: {{$post->user_id}} --}}

                    {{-- <div class="text-end mr-2 mb-1">
                        <button class="italic text-[12px] p-1 rounded bg-green-800 text-white hover:bg-green-600">
                            {{ __('comment')}}
                        </button>
                    </div> --}}
                </div>
        </div>
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






// let dots = document.querySelectorAll('.fa-ellipsis');

// dots.forEach(element => {
//     element.addEventListener('click', () => {
        // show and hide menu from dots

        // let postElement = element.closest('.post');
        // let userId = postElement.dataset.userId;
        // let postId = postElement.dataset.postId;
        // let cat = postElement.dataset.cat;
        // let authUser = "{{ Auth::user()->id }}";
        // console.log(postElement);
        // console.log("clicked post"+postId);
        // console.log("user"+userId);
        // console.log("authuser"+authUser);
        // console.log("cat"+cat);

//         let menu = document.createElement('div');
//         menu.classList.add('absolute', 'top-0', 'right-0', 'bg-white', 'dark:bg-black', 'border-2', 'border-slate-700', 'dark:border-slate-600', 'rounded', 'p-2', 'text-black', 'dark:text-white', 'z-10');
//         menu.innerHTML = `
//                         <a class="w-full" href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}">
//                             <button class="font-bold block p-1 hover:bg-slate-300 dark:hover:bg-slate-100">
//                                 {{ __('showPost')}}
//                             </button>
//                         </a>${postId}-${cat}-{{$post->id}}
//         `;

//         if (userId == authUser) {
//             menu.innerHTML += `
//                         <form action="{{ route('post.destroy', $post->id) }}" method="post">
//                             @csrf
//                             @method('DELETE')
//                             <input type="hidden" name="post_id" value="{{ $post->id }}">
//                             <button type="submit" class="font-bold block p-1 hover:bg-slate-300 dark:hover:bg-slate-100">
//                                 {{ __('deletePost')}}
//                             </button>
//                         </form>
//             `;
//         }

//         element.parentElement.appendChild(menu);
//         document.addEventListener('click', (e) => {
//             if (e.target != element && e.target != menu) {
//                 menu.remove();
//             }
//         });
//     })
// });

    </script>


{{-- <a href="{{ route('post.edit', $post->id) }}" class="block p-1 hover:bg-green-600 dark:hover:bg-green-300">{{ __('editPost') }}</a>
            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <button type="submit" class="block p-1 hover:bg-red-600 dark:hover:bg-red-300">{{ __('deletePost') }}</button>
            </form> --}}