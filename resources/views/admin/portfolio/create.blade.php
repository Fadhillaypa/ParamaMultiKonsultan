@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-3xl">

    <h1 class="text-2xl font-bold mb-6">Tambah Portfolio</h1>

    <form action="{{ route('admin.portfolios.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf

        @include('admin.portfolio.form')

        <button class="mt-6 bg-blue-600 text-white px-6 py-2 rounded-lg">
            Simpan
        </button>
    </form>

</div>
@endsection