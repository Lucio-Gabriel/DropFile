@props([
    'type' => 'submit',
    'icon' => null,
    'class' => '',
    'loadingTarget' => null,
])

<button
    type="{{ $type }}"
    wire:loading.attr="disabled"
    {{ $attributes->merge([
        'class' => "px-6 py-2 bg-yellow-600 hover:bg-yellow-700 duration-300 text-white font-normal rounded transition-colors flex items-center justify-center gap-2 $class"
    ]) }}
>

    @if($icon)
        <span
            wire:loading.remove
            @if($loadingTarget) wire:target="{{ $loadingTarget }}" @endif
        >
            <x-dynamic-component :component="$icon" class="w-5 h-5" />
        </span>
    @endif

    @if($loadingTarget)
        <span
            wire:loading
            wire:target="{{ $loadingTarget }}"
        >
            <x-svg.circle/>
        </span>
    @endif

    {{ $slot }}
</button>
