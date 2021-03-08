@php
    $colors = [
            'info' => 'bg-blue-100 text-blue-800',
            'success' => 'bg-green-100 text-green-800',
            'warning' => 'bg-yellow-100 text-yellow-800',
            'danger' => 'bg-red-100 text-red-800',
    ];
@endphp

<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colors[$type ?? 'info'] }}">
    {{ $text }}
</span>

