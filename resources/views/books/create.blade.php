<x-app-layout>
    <x-slot name="title">
        Add Book
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action=" {{route('admin.book.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-6">
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                    Name
                                </label>
                                <input autofocus="true" type="text" id="title" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    placeholder="Enter book name" required="">

                                @error('title')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span> {{ $message }}</p>
                                @enderror
                        </div>
                        <div class="mb-6">
                            <label for="img"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('img') text-red-600 @enderror">
                                Image
                            </label>
                            <input autofocus="true" type="text" id="img" name="img"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                placeholder="Enter book Img url" required="">

                            @error('img')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                    </div>
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('author_id') text-red-600 @enderror">
                                Author
                            </label>

                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="author_id" id="" required>

                            <option value="">Select Author</option>

                            @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                            </select>

                            @error('author_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-6">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 @error('author_id') text-red-600 @enderror">
                            Library
                        </label>

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                        name="library_id[]" id="" multiple required>

                        <option value="">Select Libraries</option>

                        @foreach ($libraries as $library)
                        <option value="{{$library->id}}">{{$library->name}}</option>
                        @endforeach
                        </select>

                        @error('author_id')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Error!</span> {{ $message }}</p>
                        @enderror
                </div>

                    <div class="mb-6">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                            Category
                        </label>

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="category_id" id="" required>

                            <option value="">Select Category</option>

                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>

                        @error('title')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Error!</span> {{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-6">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('docs') text-red-600 @enderror">
                        Description
                    </label>
                    <textarea id="message" name="description" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('docs') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                        placeholder="Description">{{ old('description') }}</textarea>

                    @error('docs')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">Error!</span> {{ $message }}</p>
                    @enderror
                </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                            Add </button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
