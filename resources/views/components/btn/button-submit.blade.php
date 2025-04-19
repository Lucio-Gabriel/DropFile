@props([
    'type' => 'submit',
    'icon' => null,
    'class' => '',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "px-6 py-2 bg-yellow-600 hover:bg-yellow-700 duration-300 text-white font-normal rounded transition-colors flex items-center justify-center gap-2 $class"
    ]) }}
>
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-5 h-5" />
    @endif

    {{ $slot }}
</button>
