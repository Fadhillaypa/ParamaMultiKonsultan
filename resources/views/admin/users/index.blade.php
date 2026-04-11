@extends('layouts.admin')

@section('content')

<div class="p-6">
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gold">Data Users</h2>
</div>

<div class="bg-dark2 p-6 rounded-xl shadow hover:shadow-[0_0_25px_rgba(201,166,70,0.25)] 
                border border-gold/40 hover:border-gold/60 hover:bg-dark transition">

    <table id="userTable" class="w-full text-sm">
    <thead>
        <tr class="text-left">
            <th class="py-3">Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>

            <td class="py-3">
                {{ $user->name }}

                @if(auth()->id() === $user->id)
                    <span class="text-xs text-gold ml-2">(You)</span>
                @endif
            </td>
            <td>{{ $user->email }}</td>

            {{-- ROLE BADGE --}}
            <td>
                @if($user->is_admin)
                    <span class="px-3 py-1 text-xs rounded-full bg-green-500/20 text-green-400">
                        Admin
                    </span>
                @else
                    <span class="px-3 py-1 text-xs rounded-full bg-gray-500/20 text-gray-300">
                        User
                    </span>
                @endif
            </td>

            {{-- AKSI --}}
            <td class="flex justify-center gap-2">

                <a href="{{ route('admin.users.edit', $user->id) }}"
                   class="px-3 py-1 bg-blue-500/80 text-white rounded hover:scale-105 transition">
                    Edit
                </a>

                @if(auth()->id() !== $user->id)
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button onclick="return confirm('Hapus user ini?')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:scale-105 transition">
                        Hapus
                    </button>
                </form>
                @endif

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<p class="text-sm text-slate-400 mt-3">
            Total: {{ count($users) }} User
        </p>

<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            pageLength: 5,
            responsive: true,
            language: {
                search: "Cari User:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ user"
            }
        });
    });
</script>

</div>
</div>

@endsection