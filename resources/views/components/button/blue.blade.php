@props(['type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'flex items-center justify-center h-11 w-1/2 text-sm
    text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover
    transition ease-in px-6 py-3']) }}
    >
    {{ $slot }}
</button>
