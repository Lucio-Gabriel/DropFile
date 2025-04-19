@props([
    'href' => '#',
    'icon' => null,
    'class' => 'bg-gray-200 hover:bg-gray-400',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => "px-6 py-2 bg-gray-200 hover:bg-gray-400 duration-300 text-gray-950 font-normal rounded-sm transition-colors $class"]) }}
>
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-5" />
    @endif

    <span>{{ $slot }}</span>
</a>
