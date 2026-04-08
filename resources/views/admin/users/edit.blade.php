@extends('layouts.admin')

@section('content')

<h2 class="text-2xl font-bold text-gold mb-6">Edit User</h2>

<form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2">

    <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2">

    <select name="is_admin" class="w-full border p-2">
        <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>User</option>
        <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
    </select>

    <button class="bg-gold text-white px-6 py-2 rounded">
        Update
    </button>

</form>

@endsection