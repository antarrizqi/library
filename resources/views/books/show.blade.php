@extends('layouts.app')
@section('content')
<div class="flex-1 p-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Book Details</h2>
        <div class="flex space-x-3">
            <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                <i class="fas fa-edit mr-2"></i>Edit
            </a>
            <a href="dashboard.html" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
        </div>
    </div>

    <!-- Book Details -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="md:flex">
            <!-- Book Cover -->
            <div class="md:w-1/3 p-6 flex justify-center">
                <img src="https://placehold.co/300x400/indigo/white?text=Book+Cover" alt="Book Cover" class="max-w-full h-auto rounded-lg shadow-lg">
            </div>

            <!-- Book Information -->
            <div class="md:w-2/3 p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">To Kill a Mockingbird</h1>
                <p class="text-gray-500 mb-4">By Harper Lee</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Publisher</h3>
                        <p class="text-gray-900">J.B. Lippincott & Co.</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Year Published</h3>
                        <p class="text-gray-900">1960</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">ISBN</h3>
                        <p class="text-gray-900">978-0-06-112008-4</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Page Count</h3>
                        <p class="text-gray-900">281</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Language</h3>
                        <p class="text-gray-900">English</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Genre</h3>
                        <p class="text-gray-900">Southern Gothic, Bildungsroman</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Description</h3>
                    <p class="text-gray-900">
                        To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature. The plot and characters are loosely based on Lee's observations of her family, her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936, when she was 10 years old.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Classic</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Fiction</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">American Literature</span>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="border-t border-gray-200 px-6 py-4">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Borrowing History</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Borrowed Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Return Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">John Doe</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Jan 15, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Feb 15, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Returned</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Mar 10, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Apr 10, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Overdue</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection