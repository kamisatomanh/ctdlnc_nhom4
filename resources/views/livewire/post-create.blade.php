<div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-lg">
    @if (session()->has('message'))
        <div class="p-3 bg-green-500 text-white rounded-md mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700">Tiêu đề</label>
            <input type="text" wire:model="title" class="w-full border rounded p-2">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Nội dung</label>
            <textarea wire:model="content" class="w-full border rounded p-2"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Hình ảnh</label>
            <input type="file" wire:model="img" class="w-full border rounded p-2">
            @error('img') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Đăng bài</button>
    </form>
</div>
