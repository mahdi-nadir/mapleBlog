<x-app-layout>
    <h1>write a post</h1>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="dark:text-black">
        @csrf
    
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Title"><br>
    
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="1">Express Entry</option>
            <option value="2">Arrima</option>
            <option value="3">Study visa</option>
            <option value="4">Work visa</option>
            <option value="5">Family Sponsorship and Reunification</option>
        </select><br>
    
        <label for="content">Content:</label>
        <textarea name="content" id="content" placeholder="Content"></textarea><br>
    
        <label for="image">Image:</label>
        <input type="file" name="image" id="image"><br>
    
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('save') }}</x-primary-button>
        </div>
    </form>
    
</x-app-layout>