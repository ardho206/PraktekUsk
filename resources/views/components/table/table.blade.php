<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <x-table.th title="Username" />
                <x-table.th title="Email" />
                <x-table.th title="Role" />
                <x-table.th title="Action" />
            </tr>
        </thead>
        <tbody>
            @foreach ($userData as $user)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <x-table.tr class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </x-table.tr>
                    <x-table.tr>
                        {{ $user->email }}
                    </x-table.tr>
                    <x-table.tr class="capitalize">
                        {{ $user->role }}
                    </x-table.tr>
                    <td class="flex items-center px-6 py-4">
                        <button data-modal-target="modal-edit-{{ $user->id }}"
                            data-modal-toggle="modal-edit-{{ $user->id }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                        <button data-modal-target="modal-delete-{{ $user->id }}"
                            data-modal-toggle="modal-delete-{{ $user->id }}"
                            class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
