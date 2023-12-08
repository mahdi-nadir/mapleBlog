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

    <div class="w-5/6 md:w-1/2 mx-auto md:ml-6 my-8 border-2 border-slate-700 dark:border-slate-600 rounded p-2">
        <div class="flex flex-col justify-between gap-3">
            <div class="flex flex-row justify-between items-center pr-2 border-b-2 border-slate-700 dark:border-slate-600 pb-2">
                <div class="px-2 text-black flex flex-row justify-center items-center gap-2">
                    @if ($post->user->profileImage != null)
                        <img src="{{ asset('img/users/' . $post->user->profileImage->path) }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                    @else
                        <img src="{{ asset('img/default.jpg') }}" alt="Profile Picture of {{ $post->user->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
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
                {{-- <div class="w-80 overflow-hidden">
                    <h1 class="font-bold truncate text-sm md:text-md lg:text-lg">
                        {{ $post->title }}
                    </h1>
                </div> --}}
                <div {{-- class="w-200 overflow-hidden" --}}>
                    <p class="indent-4 {{-- truncate --}} text-sm md:text-md lg:text-lg">
                        {{ $post->content }}
                    </p>
                </div>
            </div>
            @if ($post->img_post_id != null)
                <div class="w-[200px] md:w-[350px] mx-auto border-2 border-slate-700 dark:border-slate-600 rounded">
                @php
                    $img = $post->imgPost->path;
                @endphp
                    <img src="{{ asset("$img") }}" alt="{{ $post->id }}" class="postPicture cover cursor-zoom-in">
                </div>
            @endif
            <div class="text-end mr-2 mb-1 border-t-2 border-slate-700 dark:border-slate-600 pt-2">
                <button class="italic text-[12px] p-1 rounded bg-black text-white hover:bg-slate-600 font-bold" id="commentBtn">
                    {{ __('comment')}}
                </button>
            </div>
        </div>
        <div>
            <textarea name="commentArea" id="commentArea"  class="rounded text-start bg-slate-100 border-red-800 border-4 text-sm md:text-md lg:text-lg w-full dark:text-black dark:border-gray-400 resize-none md:overflow-y-hidden px-2"></textarea>
        </div>
        <div>
            @foreach ($comments as $comment)
            <div>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->user->username }}</p>
            </div>
            @endforeach
        </div>
    </div>
    
    {{-- <div>{{ $post->id }}
    {{ $post->title }}</div>
    
    <p class="text-red-500">{{ $post->content }}</p>
    @if ($image != null)
        <img src="{{ asset("$image->path") }}" alt="{{ __('Image for post') }}: {{ $post->title }}">
    @endif --}}
    {{-- like and dislike buttons --}}
    {{-- likes {{ $post->likes->count() }} --}}
    {{-- <button class="like-button {{ auth()->user()->likedPosts->contains($post) ? 'liked' : '' }}" data-post-id="{{ $post->id }}">
        <i class="fas fa-thumbs-up"></i> Like
    </button> --}}
    {{-- <button class="dislike-button" data-post-id="{{ $post->id }}" data-type="dislike">Dislike</button> --}}
</x-app-layout>
 <script>

    const commentBtn = document.querySelector('#commentBtn');



    if (window.innerWidth > 768) {
        document.addEventListener('input', function (e) {
            if (e.target.tagName.toLowerCase() === 'textarea') {
                autoExpandTextarea(e.target);
            }
        });

        function autoExpandTextarea(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }
    }
//     document.addEventListener('DOMContentLoaded', function () {
//         const likeButtons = document.querySelectorAll('.like-button');

//         likeButtons.forEach(button => {
//             button.addEventListener('click', () => toggleLike(button));
//         });

//         async function toggleLike(button) {
//     const postId = button.getAttribute('data-post-id');
//     const isLiked = button.classList.contains('liked');
//     const type = isLiked ? 'unlike' : 'like';

//     const response = await fetch('/toggle-like', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': '{{ csrf_token() }}',
//         },
//         body: JSON.stringify({
//             postId,
//             type,
//         }),
//     });

//     if (response.ok) {
//         const result = await response.json();
//         // Update UI to reflect the change, e.g., increment like/dislike count
//         button.classList.toggle('liked');
//         const icon = button.querySelector('i');
//         icon.classList.toggle('text-blue-500'); // Change the color
//     } else {
//         console.error('Error:', response.statusText);
//     }
// }
//     });
let postPictures = document.querySelectorAll('.postPicture');
postPictures.forEach(element => {
    element.addEventListener('click', () => {
        let modalPics = document.querySelector('#modalPics');
        let overlay = document.querySelector('#overlay');
        modalPics.innerHTML = `
        <button id="cancel" class="cancelBtn absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
        <i class="fa-solid fa-xmark"></i>
    </button>                
                <div class="w-5/6 md:w-1/2 mx-auto border-2 border-slate-700 dark:border-slate-600 rounded my-4">
                    <img src="${element.src}" alt="${element.alt}" class="postPicture cover w-[500px]">
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

