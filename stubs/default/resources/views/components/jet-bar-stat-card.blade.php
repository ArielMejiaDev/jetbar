@php
    $colors = [
            'info' => 'text-blue-500 bg-blue-100 dark:text-blue-100 dark:bg-blue-500',
            'success' => 'text-green-500 bg-green-100 dark:text-green-100 dark:bg-green-500',
            'warning' => 'text-yellow-500 bg-yellow-100 dark:text-orange-100 dark:bg-orange-500',
            'danger' => 'text-red-500 bg-red-100 dark:text-red-100 dark:bg-red-500',
    ];
@endphp

<div class="flex items-center p-4 bg-white border rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 rounded-full {{ $colors[$type ?? 'info'] }}">
        {{ $slot }}
    </div>
    <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            {{ $title }}
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $number }}
        </p>
    </div>
</div>
