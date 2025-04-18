@props(['items' => [], 'title' => null])

<div>
    <div class="text-2xl font-semibold">
        {{ $title ?? ($items[array_key_last($items)]['label'] ?? 'Título') }}
    </div>

    <div class="flex items-center gap-1.5 mt-2 text-xs text-gray-600">
        <x-svg.home class="w-4 text-white" />

        @foreach ($items as $item)
            @if (isset($item['route']))
                <a
                    wire:navigate
                    href="{{ $item['route'] }}"
                    class="text-yellow-400 hover:text-yellow-600 duration-300"
                >
                    {{ $item['label'] }}
                </a>
            @else
                <span class="font-semibold text-gray-800">
                    {{ $item['label'] }}
                </span>
            @endif

            @if (!$loop->last)
                <span class="mx-1 text-white">></span>
            @endif
        @endforeach
    </div>
</div>
