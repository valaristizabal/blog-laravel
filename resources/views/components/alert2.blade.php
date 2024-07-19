<div class="p-4 mb-4 text-sm  rounded-lg  {{$class}}" role="alert">
    <span class="font-medium">{{ $titulo }}</span> {{ $slot }} {{ $opcional ?? 'Texto por defecto' }}
</div>
