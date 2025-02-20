<div>
    @if (session('success'))
        <div class="fixed top-[5rem] right-4 z-[999999] " wire:key="{{ rand() }}" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 7000)">
            <div x-show="show" id="alert-2"
                class="flex items-center p-4 mb-4 text-green-800 border border-green-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ml-2">
                    {{ session('success') }}
                </div>
                <button type="button" @click="show = false"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        {{-- @dd(session()->has('error')) --}}
        <div class="fixed top-[5rem] right-4 z-[999999] " wire:key="{{ rand() }}" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 7000)">
            <div x-show="show" id="alert-2"
                class="flex items-center p-4 mb-4 text-red-800 border border-red-500 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ml-2">
                    @foreach (session('error') as $error)
                        <div class="text-sm font-medium ms-3">
                            - {{ $error }}
                        </div>
                    @endforeach

                    {{ session()->forget('errors') }}



                </div>
                <button type="button" @click="show = false"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div
        class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
        <div class="w-full md:w-1/2">
            <form class="flex items-center gap-4">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search" wire:model.live.debounce.300ms='search'
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search...">
                </div>

            </form>
        </div>
        <div
            class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">

            <x-primary-button href="{{ url('admin/books/create') }}">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add Product
            </x-primary-button>

            {{-- <div class="flex items-center hidden w-full space-x-3 md:w-auto">
                <button id="filterDropdownButton"
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-file-up">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M12 12v6" />
                        <path d="m15 15-3-3-3 3" />
                    </svg>
                    Export
                </button>

            </div> --}}
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">No</th>
                    <th scope="col" class="px-4 py-3">Image</th>
                    <th scope="col" class="px-4 py-3 " wire:click='setSortBy("title")'>
                        <div class="flex items-center cursor-pointer">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevrons-up-down">
                                <path d="m7 15 5 5 5-5" />
                                <path d="m7 9 5-5 5 5" />
                            </svg>
                            Title
                        </div>
                    </th>
                    {{-- <th scope="col" class="px-4 py-3">Price</th>
                    <th scope="col" class="px-4 py-3">Discount</th> --}}
                    <th scope="col" class="px-4 py-3 text-start">Category</th>
                    {{-- <th scope="col" class="px-4 py-3">Brand</th> --}}
                    {{-- <th scope="col" class="px-4 py-3 text-center">Status</th> --}}
                    <th scope="col" class="py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr wire:key='{{ $item->id }}'
                        class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="w-4 px-4 py-3">
                            {{ $loop->iteration }}
                        </td>
                        <th scope="row"
                            class="flex items-center px-4 py-2 font-medium text-gray-900 dark:text-white">
                            <a href="{{ asset('assets/images/isbn/' . $item->image) }}" class="glightbox">
                                <img src="{{ asset('assets/images/isbn/' . $item->image) }}" alt="iMac Front Image"
                                    class="object-contain h-10 mr-3 aspect-[16/9]">
                            </a>
                        </th>
                        <x-table-data value="{{ $item->title }}" />
                        {{-- <x-table-data class="text-red-400 whitespace-nowrap">
                            @if ($item->discount > 0)
                                <span class="text-gray-500 line-through">{{ $item->price }}</span>
                            @endif
                            $
                            {{ $item->price - $item->discount }}
                        </x-table-data>
                        <x-table-data value="$ {{ $item->discount ?? '0' }}" class="text-red-400" /> --}}
                        <x-table-data value="{{ $item->category?->name }}" />
                        {{-- <x-table-data class="text-center" value="{{ $item->brand?->name }}" /> --}}
                       {{--  <td class="text-center">
                            <button data-modal-target="popup-modal-user-{{ $item->id }}"
                                data-modal-toggle="popup-modal-user-{{ $item->id }}">
                                @if ($item->status == 1)
                                    <span class="w-4 px-4 py-3 font-semibold text-green-700">
                                        Public
                                    </span>
                                @else
                                    <span class="w-4 px-4 py-3 font-semibold text-yellow-600 whitespace-nowrap">
                                        Not-Public
                                    </span>
                                @endif
                            </button>

                            <div id="popup-modal-user-{{ $item->id }}" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full p-4">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="popup-modal-user-{{ $item->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                        <div class="p-4 text-center md:p-5">
                                            <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Update Status for : <strong>{{ $item->name }}</strong>
                                            </h3>
                                            <button data-modal-hide="popup-modal-user-{{ $item->id }}"
                                                type="button" wire:click='updateStatus({{ $item->id }}, 0)'
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Not-Public
                                            </button>
                                            <button data-modal-hide="popup-modal-user-{{ $item->id }}"
                                                type="button" wire:click='updateStatus({{ $item->id }}, 1)'
                                                class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Public
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td> --}}
                        {{-- <td class="text-center">
                            @if ($item->status == 1)
                                <span class="w-4 px-4 py-3 font-semibold text-green-700">
                                    Public
                                </span>
                            @elseif($item->status == 0)
                                <span class="w-4 px-4 py-3 font-semibold text-yellow-600">
                                    Private
                                </span>
                            @else
                                <span class="w-4 px-4 py-3 font-semibold text-red-700">
                                    Delete
                                </span>
                            @endif
                        </td> --}}

                        <td class="px-6 py-4">
                            <div class="flex items-start justify-center gap-3">

                                {{-- <div class="pb-1" x-data="{ tooltip: false }">
                                    <!-- Modal toggle -->
                                    <a href="{{ url('admin/book_images/' . $item->id) }}"
                                        @mouseenter="tooltip = true" @mouseleave="tooltip = false" class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-images">
                                            <path d="M18 22H4a2 2 0 0 1-2-2V6" />
                                            <path d="m22 13-1.296-1.296a2.41 2.41 0 0 0-3.408 0L11 18" />
                                            <circle cx="12" cy="8" r="2" />
                                            <rect width="16" height="16" x="6" y="2" rx="2" />
                                        </svg>
                                        <!-- View tooltip -->
                                        <div x-show="tooltip" x-transition:enter="transition ease-out duration-200"
                                            x-transition:enter-start="opacity-0 transform scale-90"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-90"
                                            class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-700 whitespace-nowrap"
                                            style="display: none;">
                                            Add Image
                                        </div>
                                    </a>
                                </div> --}}
                                {{-- <div class="pb-1" x-data="{ tooltip: false }">
                                    <!-- Modal toggle -->
                                    <a href="{{ url('admin/book_videos/' . $item->id) }}"
                                        @mouseenter="tooltip = true" @mouseleave="tooltip = false" class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-list-video">
                                            <path d="M12 12H3" />
                                            <path d="M16 6H3" />
                                            <path d="M12 18H3" />
                                            <path d="m16 12 5 3-5 3v-6Z" />
                                        </svg>
                                        <!-- View tooltip -->
                                        <div x-show="tooltip" x-transition:enter="transition ease-out duration-200"
                                            x-transition:enter-start="opacity-0 transform scale-90"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-90"
                                            class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-700 whitespace-nowrap"
                                            style="display: none;">
                                            Add Video
                                        </div>
                                    </a>
                                </div> --}}

                                {{-- <div class="pb-1" x-data="{ tooltip: false }">
                                    <!-- Modal toggle -->
                                    <a href="{{ url('/admin/books/' . $item->id) }}" @mouseenter="tooltip = true"
                                        @mouseleave="tooltip = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-eye">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    </a>

                                    <!-- View tooltip -->
                                    <div x-show="tooltip" x-transition:enter="transition ease-out duration-200"
                                        class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-700"
                                        style="display: none;">
                                        View
                                    </div>
                                </div> --}}

                                <div class="pb-1" x-data="{ tooltip: false }">
                                    <!-- Modal toggle -->
                                    <a wire:click="delete({{ $item->id }})"
                                        wire:confirm="Are you sure? you want to delete : {{ $item->title }}"
                                        @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                                        class="text-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trash-2">
                                            <path d="M3 6h18" />
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                            <line x1="10" x2="10" y1="11" y2="17" />
                                            <line x1="14" x2="14" y1="11" y2="17" />
                                        </svg>
                                    </a>

                                    <!-- View tooltip -->
                                    <div x-show="tooltip" x-transition:enter="transition ease-out duration-200"
                                        class="absolute z-[9999] inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-700 whitespace-nowrap"
                                        style="display: none;">
                                        Delete
                                    </div>
                                </div>

                                <div class="pb-1" x-data="{ tooltip: false }">
                                    <!-- Modal toggle -->
                                    <a href="{{ url('admin/books/' . $item->id . '/edit') }}"
                                        @mouseenter="tooltip = true" @mouseleave="tooltip = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-pen-line">
                                            <path
                                                d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                            <path
                                                d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            <path d="M8 18h1" />
                                        </svg>
                                    </a>
                                    <!-- View tooltip -->
                                    <div x-show="tooltip" x-transition:enter="transition ease-out duration-200"
                                        class="absolute z-[9999] inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-700 whitespace-nowrap"
                                        style="display: none;">
                                        Edit
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-4">No Data...</td>
                    </tr>
                @endforelse


            </tbody>
        </table>

        <div class="p-4">
            <div class="max-w-[200px] my-2 flex gap-2 items-center">
                <label for="countries"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">Record per
                    page : </label>
                <select id="countries" wire:model.live='perPage'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div>{{ $items->links() }}</div>
        </div>
    </div>
</div>
