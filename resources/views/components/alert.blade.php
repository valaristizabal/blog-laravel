@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";

            break;

        case 'danger':
        $class = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400";
            break;

        case 'success':
        $class = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
            break;

        default:
            # code...
            break;
    }
@endphp

<div class="p-4 mb-4 text-sm  rounded-lg  {{$class}}" role="alert">
    <span class="font-medium">{{ $titulo }}</span> {{ $slot }} {{ $opcional ?? 'Texto por defecto' }}
</div>
