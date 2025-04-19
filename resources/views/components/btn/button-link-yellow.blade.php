@props([
    'href' => '#',
    'icon' => null,
    'class' => 'bg-yellow-600 hover:bg-yellow-800',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => "flex items-center gap-1 duration-300 px-6 py-2 font-normal shadow-2xl rounded-sm text-white $class"]) }}
>
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-5" />
    @endif

    <span>{{ $slot }}</span>
</a>
