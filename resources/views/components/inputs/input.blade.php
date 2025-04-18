@props([
    'id' => null,
    'name' => null,
    'type' => 'text',
    'placeholder' => '',
    'value' => null,
    'class' => '',
])

<input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => "w-full bg-gray-950 border border-gray-600 rounded px-4 py-2 text-sm text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-600 $class"
    ]) }}
>
