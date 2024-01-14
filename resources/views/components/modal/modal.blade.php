@props(['modalType' => 'add', 'modalId', 'user'])

<div id="{{ $modalId }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            @if ($modalType == 'add')
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New User
                    </h3>
                    <x-modal.modal-close-btn :modalId="$modalId" />
                </div>
            @elseif ($modalType == 'edit')
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit User
                    </h3>
                    <x-modal.modal-close-btn :modalId="$modalId" />
                </div>
            @else
                <x-modal.modal-close-btn :modalId="$modalId" class="absolute top-3 end-2.5" />
            @endif
            <!-- Modal body -->
            @if ($modalType == 'delete')
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-red-600 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this user?</h3>
                    <button data-modal-hide="{{ $modalId }}" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="{{ $modalId }}" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No,
                        cancel</button>
                </div>
            @elseif ($modalType == 'edit')
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-form.input-label class="text-sm" for="name" :value="__('Name')" />
                            <x-form.text-input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        </div>
                        <div class="col-span-2">
                            <x-form.input-label class="text-sm" for="email" :value="__('Email')" />
                            <x-form.text-input type="email" name="email" id="email" value="{{ $user->email }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        </div>
                        <div class="col-span-2">
                            <x-form.input-label for="role" :value="__('Role')" />
                            <x-form.select-input edit="true" :user="$user" id="role" name="role"
                                :options="['admin', 'bank', 'toko', 'siswa']" />
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Save user data
                    </button>
                </form>
            @else
                <form class="p-4 md:p-5" action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-form.input-label for="name" :value="__('Name')" />
                            <x-form.text-input type="text" name="name" id="name" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        </div>
                        <div class="col-span-2">
                            <x-form.input-label for="email" :value="__('Email')" />
                            <x-form.text-input type="email" name="email" id="email" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        </div>
                        <div class="col-span-2">
                            <x-form.input-label for="password" :value="__('Password')" />
                            <x-form.text-input type="password" name="password" id="password" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                        </div>
                        <div class="col-span-2">
                            <x-form.input-label for="role" :value="__('Role')" />
                            <x-form.select-input id="role" name="role" :options="['admin', 'bank', 'toko', 'siswa']" />
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new user
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
