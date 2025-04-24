<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if (session()->has('toastr'))
                toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right'
            };

            toastr["{{ session('toastr.type') }}"]("{{ session('toastr.message') }}");
            @endif
        });
    </script>
</x-layouts.app.sidebar>
