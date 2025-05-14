@extends('layouts.app')
@section('content')
<div class="flex-1 p-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Update Book</h2>
        <a href="dashboard.html" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
            <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
        </a>
</div>

    <!-- Update Book Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="dashboard.html" method="GET">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="book-name" class="block text-sm font-medium text-gray-700 mb-1">Book Name</label>
                    <input type="text" id="book-name" name="book-name" value="To Kill a Mockingbird" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Publisher -->
                <div class="col-span-2 md:col-span-1">
                    <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Publisher</label>
                    <input type="text" id="publisher" name="publisher" value="J.B. Lippincott & Co." required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Description -->
                <div class="col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">A novel about racial injustice and moral growth in the American South.</textarea>
                </div>

                <!-- Year Published -->
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year Published</label>
                    <input type="number" id="year" name="year" min="1000" max="2099" value="1960" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Page Count -->
                <div>
                    <label for="pages" class="block text-sm font-medium text-gray-700 mb-1">Page Count</label>
                    <input type="number" id="pages" name="pages" min="1" value="281" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Author -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                    <input type="text" id="author" name="author" value="Harper Lee" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- ISBN -->
                <div>
                    <label for="isbn" class="block text-sm font-medium text-gray-700 mb-1">ISBN</label>
                    <input type="text" id="isbn" name="isbn" value="978-0-06-112008-4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Categories -->
                <div class="col-span-2">
                    <label for="categories" class="block text-sm font-medium text-gray-700 mb-1">Categories</label>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm flex items-center">
                            Classic
                            <button type="button" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm flex items-center">
                            Fiction
                            <button type="button" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm flex items-center">
                            American Literature
                            <button type="button" class="ml-1 text-indigo-600 hover:text-indigo-800">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </span>
                    </div>
                    <div class="flex">
                        <input type="text" id="category-input" class="w-full px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Add a category">
                        <button type="button" class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <!-- Current Cover Image -->
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Cover Image</label>
                    <div class="flex items-center space-x-4">
                        <img src="https://placehold.co/150x200/indigo/white?text=Book+Cover" alt="Current Book Cover" class="h-40 w-auto rounded-lg shadow">
                        <button type="button" class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700">
                            <i class="fas fa-trash mr-1"></i> Remove
                        </button>
                    </div>
                </div>

                <!-- Upload New Cover Image -->
                <div class="col-span-2">
                    <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">Upload New Cover Image (Optional)</label>
                    <div class="flex items-center">
                        <label class="w-full flex flex-col items-center px-4 py-6 bg-white text-indigo-500 rounded-lg border border-dashed border-indigo-500 cursor-pointer hover:bg-indigo-50">
                            <i class="fas fa-cloud-upload-alt text-3xl"></i>
                            <span class="mt-2 text-sm text-gray-500">Click to upload or drag and drop</span>
                            <input type="file" id="cover" name="cover" accept="image/*" class="hidden">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 flex justify-end">
                <button type="button" class="bg-red-600 text-white px-6 py-2 rounded-lg mr-4 hover:bg-red-700">
                    <i class="fas fa-trash mr-2"></i>Delete Book
                </button>
                <button type="reset" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg mr-4 hover:bg-gray-400">
                    Reset
                </button>
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-save mr-2"></i>Update Book
                </button>
            </div>
        </form>
    </div>
</div>
@endsection