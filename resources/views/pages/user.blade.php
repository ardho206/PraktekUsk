@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
    @endif
    <x-title-pages title="User Management" />
    <div class="border shadow-sm rounded-lg">
        <div class="relative w-full overflow-auto">
            <x-table.table :userData="$userData" />
        </div>
    </div>

    <x-modal.modal modalId="modal-add" modalType="add" />
    @foreach ($userData as $user)
        <x-modal.modal :user="$user" modalId="modal-edit-{{ $user->id }}" modalType="edit" />
        <x-modal.modal :user="$user" modalId="modal-delete-{{ $user->id }}" modalType="delete" />
    @endforeach
@endsection
