@props([
    'icon' => null,
    'type' => 'text',
    'id' => null,
    'placeholder' => '',
    'class' => '',
])

<div class="relative w-full">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        @if($icon)
            <x-dynamic-component :component="$icon" class="w-5 h-5 text-gray-400" />
        @endif
    </div>

    <input
        type="{{ $type }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' =>
            "block w-full p-2 pl-10 text-sm bg-[#1e2021]
            border border-gray-600 rounded-lg text-gray-200
            focus:ring-blue-500 focus:border-blue-500 $class"
        ]) }}
    >
</div>
