@props([
    'warnaborder' => '#4681ff',
])

<label class="block font-medium text-sm text-[{{ $warnaborder }}]">
    {{ $slot }}
</label>
