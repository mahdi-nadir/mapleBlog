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


    <div class="flex flex-row gap-6 mt-10">
        {{-- <div class="w-1/4 h-screen py-5 box-content"> --}}
            {{-- @include('layouts.weather-card') --}}
        {{-- </div> --}}
        <div id="posts-container" class="w-2/3 pr-5 lg:border-r-4 border-gray-600 dark:border-gray-300">
            @foreach ($posts as $post)
            <div class="mb-10 border-2 border-slate-700 dark:border-slate-600 rounded shadow-md shadow-slate-500 dark:shadow-slate-400">
                    <div class="post flex flex-col justify-between gap-3" data-user-id="{{$post->user_id}}" data-post-id="{{$post->id}}" data-cat="{{ $post->category->name_en }}">
                        <div class="flex flex-col justify-center items-start border-b-2 border-slate-700 dark:border-slate-600 bg-red-200 dark:bg-slate-400 rounded pb-2">
                            <div class="w-full px-2 text-black flex flex-row justify-between items-center mt-2">
                                <div class="flex flex-row justify-between items-center gap-2">
                                    <a href=" {{ route('user.showUserProfile', $post->user_id) }}" title="{{ __('showUserProfile') }}">
                                        @if ($post->user->profileImage != null)
                                            <img src="{{ asset('img/users/' . $post->user->profileImage->path) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-8 h-8 md:w-14 md:h-14 border-2 border-black dark:border-white">
                                        @else
                                            <img src="{{ asset('img/default.jpg') }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-8 h-8 md:w-14 md:h-14 border-2 border-black dark:border-white">
                                        @endif
                                    </a>
                                    <div class="flex flex-col text-start justify-center items-start text-[14px] dark:text-white">
                                        <a href=" {{ route('user.showUserProfile', $post->user_id) }}" title="{{ __('showUserProfile') }}">
                                            <span class="font-bold">{{ $post->user->username }}</span>
                                        </a>
                                        <div class="italic font-bold text-blue-500 dark:text-blue-300">
                                            <a href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}" title="{{ __('showPost') }}">
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
                                            </a>
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
                            <div class="pl-2 overflow-hidden uppercase mb-2 text-sm font-bold md:text-md">
                                <h1 class="font-bold truncate">
                                    {{ $post->title }}
                                </h1>
                            </div>
                            <div {{-- class="w-200 overflow-hidden" --}}>
                                <p class="pl-2 text-sm md:text-md indent-4 {{-- truncate --}}">
                                    {{ $post->content }}
                                </p>
                            </div>
                            @if ($post->img_post_id != null)
                                <div class="w-3/5 md:w-2/5 h-auto mx-auto border-2 border-slate-700 dark:border-slate-600 rounded my-4">
                                @php
                                    $img = $post->imgPost->path;
                                @endphp
                                    <img src="{{ asset("$img") }}" alt="{{ $post->id }}" class="postPicture cover cursor-zoom-in">
                                </div>
                            @endif
                        </div>
                        
                        

                        {{-- nb of comments --}}
                        <a href=" {{ route('post.index', [$post->category->name_en, $post->id]) }}" title="{{ __('showPost') }}">
                            <p class="font-bold text-end pr-2">{{ __('comments') }}: <span class="font-normal">{{$post->comments->count()}}</span></p>
                        </a>
                        {{--id: {{$post->user_id}} --}}

                        {{-- <div class="text-end mr-2 mb-1">
                            <button class="italic text-[12px] p-1 rounded bg-green-800 text-white hover:bg-green-600">
                                {{ __('comment')}}
                            </button>
                        </div> --}}
                    </div>
            </div>
            @endforeach
        </div>
        <div class="w-1/3 bg-green-500 h-screen md:flex md:flex-col md:gap-4">
            {{-- services and ad part here --}}
            @include('layouts.weather-card')
            @include('layouts.hashtag-card')
            @include('layouts.currency-card')
        </div>
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

let postPictures = document.querySelectorAll('.postPicture');
postPictures.forEach(element => {
    element.addEventListener('click', () => {
        let modalPics = document.querySelector('#modalPics');
        let overlay = document.querySelector('#overlay');
        modalPics.innerHTML = `
        <button id="cancel" class="cancelBtn absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
        <i class="fa-solid fa-xmark"></i>
    </button>                
                <div class="w-4/6 mx-auto border-2 border-slate-700 dark:border-slate-600 rounded my-4">
                    <img src="${element.src}" alt="${element.alt}" class="postPicture cover">
                </div>
        `;

        overlay.style.display = 'block';
        overlay.style.opacity = '0.8';
        overlay.style.visibility = 'visible';
        modalPics.style.transform = 'translate(-50%, -50%) scale(1)';
        
        let cancelBtn = modalPics.querySelectorAll('.cancelBtn');
        cancelBtn.forEach(element => {
            element.addEventListener('click', () => {
                overlay.style.display = 'none';
                overlay.style.opacity = '0';
                overlay.style.visibility = 'hidden';
                modalPics.style.transform = 'translate(-50%, -50%) scale(0)';
            });
        })

        // document.addEventListener('keydown', (e) => {
        //     if (e.key == 'Escape') {
        //         overlay.remove();
        //     }
        // });

        // document.addEventListener('click', (e) => {
        //     if (e.target == overlay) {
        //         overlay.remove();
        //     }
        // });
    });
});

    </script>


{{-- <a href="{{ route('post.edit', $post->id) }}" class="block p-1 hover:bg-green-600 dark:hover:bg-green-300">{{ __('editPost') }}</a>
            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <button type="submit" class="block p-1 hover:bg-red-600 dark:hover:bg-red-300">{{ __('deletePost') }}</button>
            </form> --}}