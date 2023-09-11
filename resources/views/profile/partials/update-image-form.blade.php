<section id="dd" class="flex flex-col md:flex-row justify-evenly items-center gap-4 pb-4 md:pb-10 mt-10">
    {{-- <div class="w-1/2">
        <img src="{{ asset('img/' . $image) }}" alt="Profile Image" id="profilePic" class="object-cover mx-auto w-60 h-60  border-2 border-black dark:border-white rounded-lg">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> --}}
    <form method="post" action="{{ route('profilePicture.update') }}" enctype="multipart/form-data" id="imgForm" {{-- class="hidden" --}}>
        @csrf
        @method('put')
        {{-- <button id="showUploadUserImg" class="my-2 md:my-4 p-1 text-md bg-red-600 text-white uppercase rounded font-bold hover:bg-red-800">New picture</button> --}}
        <div id="uploadingImg" class="flex flex-col justify-center items-center gap-4">
            <div id="uploadImgArea" class="mx-auto w-[250px]">
                <input type="file" name="image" accept="image/*">
            </div>
            {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif --}}
            <div class="flex flex-row justify-center items-center gap-3">
                {{-- <button id="backImgBtn" class="w-20 p-1 text-sm bg-red-600 text-white uppercase rounded hover:bg-red-800 font-bold">{{ __('Back') }}</button> --}}
                {{-- <button id='saveBtn' class="w-20 p-1 text-sm bg-black text-white uppercase rounded hover:bg-green-800 font-bold">{{ __('Save') }}</button> --}}
                <x-primary-button>{{ __('save') }}</x-primary-button>
            </div>
        </div>
    </form>
</section>
<script>
    // const uploadImgArea = document.getElementById('uploadImgArea');
    // const saveBtn = document.getElementById('saveBtn');
    // const backImgBtn = document.getElementById('backImgBtn');
    // const imgForm = document.getElementById('imgForm');
    // const dd = document.getElementById('dd');


    // backImgBtn.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     dd.remove();
    //     uploadImgArea.classList.toggle('hidden');
    //     saveBtn.classList.toggle('hidden');
    //     backImgBtn.classList.toggle('hidden');
    //     imgForm.classList.toggle('hidden');
    // });
</script>