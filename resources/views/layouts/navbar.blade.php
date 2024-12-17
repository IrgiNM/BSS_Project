<div class="depan absolute bg-white w-[100%] h-[70px] mt-0 border-b-[.3px] border-[#e7e1ff] flex flex-row justify-evenly items-center px-4">
    <div class="w-[100px] flex flex-row items-center">
        <img src="{{ asset("images/logo_bummi.png") }}" alt="" href="#" class="w-[35px] h-[35px]">
        <p class="text-[20px] font-bold leading-[5px] text-[#14005e] h-2 ms-2 mt-[-5px] p-0">BSS<b class="text-[#ff4684] p-0 leading-[5px] m-0 text-[35px] font-bold">.</b></p>
    </div>
    <div class="flex flex-row gap-8 ms-6">
        <a href="{{ route('dashboard') }}" class="text-[13px] font-bold text-[#ff4684]">Home</a>
        <a href="#" class="text-[13px] font-bold text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Produk</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Cara pesan</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Tentang kami</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Kontak</a>
    </div>
    <div class="w-[40%] ms-10 me-3 flex flex-row justify-end" id="divSearch">
        <form method="POST" action="/home2" class="flex flex-row">
            @csrf
            <input id="inputSearch" class="w-[100%] rounded-full border-1 h-[35px] border-[#ff4684] hidden" type="search" name="search" required autofocus autocomplete="search" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
            <button id="tomser"><i id="search" class="fa-solid fa-magnifying-glass text-[#ecc3d1] ms-[-40px] text-[15px] transition-all duration-300 hover:text-[#ff4684]"></i></button>
        </form>
    </div>
    @auth
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="px-[15px] py-[5px] rounded-full me-4 border-[2px] text-[13px] border-[#ff4684] text-[#ff4684] hover:bg-gradient-to-b hover:from-[#ff4684] hover:to-[#ff3276] hover:text-white transition-all duration-300">Log out</button>
        </form>
    @endauth
    <img src="" class="w-[35px] h-[35px] hover:border-[3px] hover:border-[#4681ff] hover:w-[38px] hover:h-[38px] bg-[#cec9ca] rounded-full" alt="">
</div>
<script>
    const inser = document.getElementById('inputSearch');
    const divser = document.getElementById('divSearch');
    const aser = document.getElementById('search');
    // JavaScript untuk menangani klik tombol
    aser.addEventListener('click', function() {
        // Membuat elemen baru
        inser.classList.toggle('hidden');
        divser.classList.toggle('flex');
        divser.classList.toggle('flex-row');
        divser.classList.toggle('justify-end');
        aser.classList.toggle('text-[#ff4684]');
    });
</script>
