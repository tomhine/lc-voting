@props(['type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'flex items-center justify-center w-1/2 h-11 text-sm
  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition ease-in px-6 py-3']) }}>
  {{ $slot }}
</button>