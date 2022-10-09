<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex-grow mr-0 md:mr-3 mt-4 md:mt-0 w-full md:w-auto order-3 md:order-1">
                            <input type="search" name="query" id="query" placeholder="Search files and folders"
                                class="w-full px-3 h-12 border-2 rounded-lg border-gray-400">
                        </div>
                        <div class="order-2">
                            <div>
                                <button class="bg-gray-200 px-6 h-12 rounded-lg mr-2">
                                    New folder
                                </button>

                                <button class="bg-blue-500 px-6 h-12 rounded-lg mr-2 text-white">
                                    Upload files
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg mt-2">

                        <div class="py-2 px-3">
                            <div class="flex items-center">
                                <a href="#" class="font-bold text-gray-400">Breadcrumb</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>

                            </div>
                        </div>

                        <div class="overflow-auto">
                            <table class="w-full">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-left py-2 px-3">
                                            Name
                                        </th>
                                        <th class="text-left py-2 px-3 w-2/12">
                                            Size
                                        </th>
                                        <th class="text-left py-2 px-3 w-2/12">
                                            Created
                                        </th>
                                        <th class="p-2 w-2/12">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-gray-100 border-b-2 hover:bg-gray-100">
                                        <td class="py-2 px-3 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                            </svg>


                                            <a href="" class="p-2 font-bold text-blue-700 flex-grow">File/folder
                                                name</a>
                                        </td>
                                        <td class="py-2 px-3">&mdash;</td>
                                        <td class="py-2 px-3">Created at</td>
                                        <td class="py-2 px-3">
                                            <div class="flex justify-end items-center">

                                                <ul class="flex items-center gap-2">
                                                    <li>
                                                        <button class="text-gray-400 font-bold">Rename</button>
                                                    </li>
                                                    <li>
                                                        <button class="text-red-400 font-bold">Delete</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="p-3 text-gray-700">
                            Folder
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
