<div>
    @if (Auth::user()->diploma_id == null || Auth::user()->system_id == null || Auth::user()->noc_id == null || Auth::user()->step_id == null || Auth::user()->date_of_birth == null || Auth::user()->gender_id == null)
    <a href="{{ route('profile.edit') }}" title="{{ __('updateInfo') }}"><button class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300">{{ __('updateInfoToWritePost') }}</button></a>
    @else
        <button id="showWritePost" class="p-1 text-md w-60 bg-black text-white uppercase rounded font-bold hover:bg-green-600 dark:bg-white dark:text-black hover:dark:bg-green-300">{{ __('writePost') }}</button>
    @endif

    <div id="modalWritePost" class="py-3 px-6 text-start text-sm md:text-md dark:text-black overflow-auto w-5/6 md:w-1/2 h-fit">
        <button class="cancelWritePost absolute top-2 right-3 px-2 text-white bg-red-500 rounded hover:bg-red-600">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="dark:text-black">
            @csrf
            <h1 class="mx-auto text-center pb-2 border-b-2 border-b-slate-500 w-5/6 text-lg md:text-2xl font-bold uppercase">{{ __('createPost') }}</h1>
        
            <div class="w-full mt-4 flex flex-col justify-center items-center gap-3">
                <div class="px-2 text-black flex flex-row justify-center items-center gap-2">
                    <img src="{{ asset('img/' . $image) }}" alt="Profile Picture of {{ Auth::user()->username }}" class="rounded-full w-10 h-10 border-2 border-black dark:border-white">
                    <div class="flex flex-col text-start">
                        <span class="font-bold">{{ Auth::user()->username }}</span>
                        <span class="italic">{{ __('youve') }} {{ $userPosts->count() }} {{ __('posts') }}</span>
                    </div>
                </div>

                <input type="text" name="title" id="title" maxlength="100" placeholder="{{ __('titlePost') }}" class="rounded text-start bg-slate-100 border-red-800 border-4 text-lg w-5/6 dark:text-black dark:border-gray-400 px-2">

                <select name="category" id="category" class="rounded text-start bg-slate-100 border-red-800 border-4 text-lg w-5/6 dark:text-black dark:border-gray-400 h-9 px-1">
                    <option value="">{{ __('selectCategory') }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ LaravelLocalization::getCurrentLocale() == 'en' ? $category->name_en : $category->name_fr }}</option>
                    @endforeach
                </select>
                    
                <div class="w-5/6 flex flex-col justify-center items-center gap-1">
                    <textarea name="content" id="content" placeholder="{{ __('contentPost') }}" class="rounded text-start bg-slate-100 border-red-800 border-4 text-lg w-full dark:text-black dark:border-gray-400 resize-none md:overflow-y-hidden px-2" rows="5" maxlength="500"></textarea>
                    <div class="flex flex-row justify-between items-center gap-1 w-full">
                        <button id="deleteContent" class="font-bold italic px-1 bg-red-600 hover:bg-red-800 text-white text-sm rounded">{{ __('reset') }}</button>
                        <p class="font-bold italic"><span id="nbChars">0</span>/500</p>
                    </div>
                </div>
            
                
                <label for="image" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                    </svg>
                    <span class="sr-only">Upload image</span>
                </label>
                <input type="file" name="image" id="image" style="display: none;">
                {{-- <img id="imagePreview" src="#" alt="Image Preview" style="display: none"> --}}
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('toPost') }}</x-primary-button>
                </div>
            </div>
        </form>
    </div>
</div>
@include('layouts.modals')


<script>
    let showWritePost = document.querySelector('#showWritePost');
    let modalWritePost = document.querySelector('#modalWritePost');
    let overlay = document.querySelector('#overlay');
    
    if (showWritePost) {
        showWritePost.addEventListener('click', () => {
            let cancelBtn = modalWritePost.querySelector('.cancelWritePost');
            overlay.style.display = 'block';
            overlay.style.opacity = '0.8';
            overlay.style.visibility = 'visible';
            modalWritePost.style.transform = 'translate(-50%, -50%) scale(1)';

            cancelBtn.addEventListener('click', () => {
                overlay.style.display = 'none';
                overlay.style.opacity = '0';
                overlay.style.visibility = 'hidden';
                modalWritePost.style.transform = 'translate(-50%, -50%) scale(0)';
            });
        });
    }

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

    const textarea = document.getElementById('content');
    const nbChars = document.getElementById('nbChars');
    const resetBtn = document.getElementById('deleteContent');

    textarea.addEventListener('input', function () {
        const content = this.value;
        const remainingChars = 0 + content.length;

        nbChars.textContent = remainingChars;

        remainingChars > 450 ? nbChars.style.color = 'red' : nbChars.style.color = 'green';
        if (remainingChars > 500) {
            this.value = content.slice(0, 500);
            nbChars.textContent = 0;
        }
    });

    resetBtn.addEventListener('click', (e) => {
        e.preventDefault();
        textarea.value = '';
        nbChars.textContent = 0;
    });

    
</script>