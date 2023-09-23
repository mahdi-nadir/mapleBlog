<section id="dd" class="flex flex-col md:flex-row justify-evenly items-center gap-4 pb-4 md:pb-10 mt-10">
    <form method="post" action="{{ route('profilePicture.update') }}" enctype="multipart/form-data" id="imgForm" {{-- class="hidden" --}}>
        @csrf
        @method('put')
        <div id="uploadingImg" class="flex flex-col justify-center items-center gap-4">
            <div id="uploadImgArea" class="mx-auto w-[250px]">
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="flex flex-row justify-center items-center gap-3">
                <x-primary-button>{{ __('save') }}</x-primary-button>
            </div>
        </div>
    </form>
</section>