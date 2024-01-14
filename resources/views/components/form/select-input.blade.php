@props(['edit' => false, 'id', 'name', 'options', 'user'])

<select id="{{ $id }}" name="{{ $name }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <option selected>Select Role</option>
    @foreach ($options as $option)
        <option value="{{ $option }}"
            @if ($edit == true) @if ($option == $user->role) selected @endif @endif
            class="capitalize">
            {{ $option }}</option>
    @endforeach
</select>
