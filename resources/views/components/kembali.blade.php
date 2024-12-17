@props([
    'warna' => '#4681ff',
    'letak' => 'left-0 top-0',
    'href' => '#',
    'rorl' => 'left'
])

<div class="kembali absolute {{ $letak }}">
    <a {{ $href }} class="fa-solid fa-arrow-{{ $rorl }} w-10 h-10 {{ $bg ?? 'bg-white' }} rounded-full text-center border-2 border-[{{ $warna }}] text-[20px] text-[{{ $warna }}] hover:bg-[{{ $warna }}] hover:text-white pt-[7px]"></a>
</div>