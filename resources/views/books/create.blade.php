@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Add New Book</h2>
        <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
            <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
        </a>
    </div>

    <!-- Add Book Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('store.books') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="book-name" class="block text-sm font-medium text-gray-700 mb-1">Book Name</label>
                    <input type="text" id="book-name" name="book-name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Publisher -->
                <div class="col-span-2 md:col-span-1">
                    <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Publisher</label>
                    <input type="text" id="publisher" name="publisher" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Description -->
                <div class="col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>

                <!-- Year Published -->
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year Published</label>
                    <input type="number" id="year" name="year" min="1000" max="2099" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Page Count -->
                <div>
                    <label for="pages" class="block text-sm font-medium text-gray-700 mb-1">Page Count</label>
                    <input type="number" id="pages" name="pages" min="1" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                {{-- <!-- Cover Image -->
                <div class="col-span-2">
                    <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">Cover Image (Optional)</label>
                    <div class="flex items-center">
                        <label class="w-full flex flex-col items-center px-4 py-6 bg-white text-indigo-500 rounded-lg border border-dashed border-indigo-500 cursor-pointer hover:bg-indigo-50">
                            <i class="fas fa-cloud-upload-alt text-3xl"></i>
                            <span class="mt-2 text-sm text-gray-500">Click to upload or drag and drop</span>
                            <input type="file" id="cover" name="cover" accept="image/*" class="hidden">
                        </label>
                    </div>
                </div> --}}
            </div>

            <!-- Submit Button -->
            <div class="mt-8 flex justify-end">
                <button type="reset" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg mr-4 hover:bg-gray-400">
                    Reset
                </button>
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-save mr-2"></i>Save Book
                </button>
            </div>
        </form>
    </div>

@endsection