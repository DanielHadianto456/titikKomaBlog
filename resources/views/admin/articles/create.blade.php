<x-app-layout>
    <x-slot name="jeader">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="form-container">
                    <form action="{{route('admin.articles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="title" class="text-[#000000] dark:text-[#FFFF]">Title</label>
                            </div>
                           <div>
                             <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter article title" required>
                           </div>
                        </div>
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="date" class="text-[#000000] dark:text-[#FFFF]">Upload Date</label>
                            </div>
                           <div>
                             <input type="date" id="date" name="date" class="w-full p-2 border border-gray-300 rounded-md" required>
                           </div>
                        </div>
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="author" class="text-[#000000] dark:text-[#FFFF]">Author</label>
                            </div>
                           <div>
                             <input type="text" id="author" name="author" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter author" required>
                           </div>
                        </div>
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="image" class="text-[#000000] dark:text-[#FFFF]">Thumbnail</label>
                            </div>
                           <div>
                             <input type="file" id="image" name="image" required>
                           </div>
                        </div>
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="category" class="text-[#000000] dark:text-[#FFFF]">Categories</label>
                            </div>
                           <div>
                                <select name="article_category_id" id="category" class="w-full p-2 border border-gray-300 rounded-md">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                           </div>
                        </div>
                        <div class="mb-4 d-flex flex-col">
                            <div class="mb-2">
                                <label for="content" class="text-[#000000] dark:text-[#FFFF]">Content</label>
                            </div>
                           <div>
                             <textarea name="content" id="content" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                           </div>
                        </div>
                        <button>
                            Submit
                        </button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
</x-app-layout>