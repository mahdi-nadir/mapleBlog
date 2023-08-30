<section>
    <div>
        <img src="{{ asset('img/' . $image) }}" alt="Profile Image" id="profilePic">
        {{-- error --}}
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button id="showUploadUserImg">Upload a new picture</button>
    <form method="post" action="{{ route('profilePicture.update') }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div id="uploadingImg">
            <div id="uploadImgArea" class="hidden">
                <input type="file" name="image" accept="image/*">
            </div>
            <x-primary-button id='saveBtn' class="hidden saveBtn">{{ __('Save picture') }}</x-primary-button>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </form>
</section>
<script>
    const showUploadUserImg = document.getElementById('showUploadUserImg');
    const uploadImgArea = document.getElementById('uploadImgArea');
    const saveBtn = document.getElementById('saveBtn');
    showUploadUserImg.addEventListener('click', () => {
        uploadImgArea.classList.toggle('hidden');
        saveBtn.classList.toggle('hidden');
    });
</script>