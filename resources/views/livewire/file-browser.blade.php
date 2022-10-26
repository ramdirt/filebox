<div>
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex-grow order-3 w-full mt-4 mr-0 md:mr-3 md:mt-0 md:w-auto md:order-1">
            <input type="search" name="query" id="query" placeholder="Search files and folders"
                class="w-full h-12 px-3 border-2 border-gray-400 rounded-lg">
        </div>
        <div class="order-2">
            <div>
                <button class="h-12 px-6 mr-2 bg-gray-200 rounded-lg " wire:click="$set('creatingNewFolder', true)">
                    New folder
                </button>

                <button class="h-12 px-6 mr-2 text-white bg-blue-500 rounded-lg">
                    Upload files
                </button>
            </div>
        </div>
    </div>

    <div class="mt-2 border-2 border-gray-200 rounded-lg">

        <div class="px-3 py-2">
            <div class="flex items-center">
                @foreach ($ancestors as $ancestor)
                    <a href="{{ route('files', ['uuid' => $ancestor->uuid]) }}" class="font-bold text-gray-400">
                        {{ $ancestor->objectable->name }}
                    </a>
                    @if (!$loop->last)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="overflow-auto">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2 text-left">
                            Name
                        </th>
                        <th class="w-2/12 px-3 py-2 text-left">
                            Size
                        </th>
                        <th class="w-2/12 px-3 py-2 text-left">
                            Created
                        </th>
                        <th class="w-2/12 p-2">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    // TODO: Сделать вывод переменной createNewFolder
                    @if ($creatingNewFolder)
                        <tr class="border-b-2 border-gray-100 hover:bg-gray-100">
                            <td class="p-3">
                                <form action="" class="flex items-center">
                                    <input type="text" name="" id=""
                                        class="w-full h-10 px-3 mr-2 border-gray-200 rounded-lg border-20"
                                        wire:model='newFolderState.title'>
                                    <button type="submit"
                                        class="h-10 px-6 mr-2 text-white bg-blue-600 rounded-lg">Create</button>
                                    <button wire:click="$set('creatingNewFolder', false)"
                                        class="h-10 px-6 mr-2 text-white bg-gray-600 rounded-lg">Cancel</button>
                                </form>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    @foreach ($object->children as $child)
                        <tr
                            class="border-gray-100 @if (!$loop->last) border-b-2 @endif hover:bg-gray-100">
                            <td class="flex items-center px-3 py-2">
                                @if ($child->objectable_type === 'file')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                @endif
                                @if ($child->objectable_type === 'folder')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                    </svg>
                                @endif

                                @if ($child->objectable_type === 'folder')
                                    <a href="{{ route('files', ['uuid' => $child->uuid]) }}"
                                        class="flex-grow p-2 font-bold text-blue-700">{{ $child->objectable->name }}</a>
                                @endif

                                @if ($child->objectable_type === 'file')
                                    <a href=""
                                        class="flex-grow p-2 font-bold text-blue-700">{{ $child->objectable->name }}</a>
                                @endif

                            </td>
                            <td class="px-3 py-2">
                                @if ($child->objectable_type === 'file')
                                    {{ $child->objectable->size }}
                                @else
                                    &mdash;
                                @endif
                            </td>
                            <td class="px-3 py-2">{{ $child->created_at }}</td>
                            <td class="px-3 py-2">
                                <div class="flex items-center justify-end">

                                    <ul class="flex items-center gap-2">
                                        <li>
                                            <button class="font-bold text-gray-400">Rename</button>
                                        </li>
                                        <li>
                                            <button class="font-bold text-red-400">Delete</button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($object->children->count() === 0)
            <div class="p-3 text-gray-700">
                This folder is empty
            </div>
        @endif
    </div>

</div>
