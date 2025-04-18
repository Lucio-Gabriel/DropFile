@props([
    'id' => null,
    'name' => null,
    'rows' => 4,
    'placeholder' => '',
    'value' => '',
    'class' => '',
])

<textarea
    id="{{ $id }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => "w-full bg-gray-950 border border-gray-600 rounded px-4 py-2 text-sm text-gray-100 focus:outline-none focus:ring-2 focus:ring-yellow-500 $class"
    ]) }}
>{{ old($name, $value) }}</textarea>
