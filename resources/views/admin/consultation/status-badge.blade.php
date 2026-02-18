@php
$map = [
    'pending' => 'bg-yellow-100 text-yellow-800',
    'process' => 'bg-blue-100 text-blue-800',
    'done' => 'bg-green-100 text-green-800',
];
@endphp

<span class="px-2 py-1 rounded-full text-xs font-semibold {{ $map[$status] ?? '' }}">
    {{ strtoupper($status) }}
</span>
