<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 rounded-md border-[#4681ff] text-black border-2 m-auto']) }}>
    {{ $slot }}
</button>
