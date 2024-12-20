<div class="depan fixed bg-white w-[100%] h-[70px] mt-0 border-b-[.3px] border-[#e7e1ff] flex flex-row justify-evenly items-center px-4">



    {{-- NOTIF --}}
    <div id="notif" class="hidden absolute right-[148px] top-[80px] w-[300px] h-auto h-max-[300px] rounded-[5px] bg-white border-[2px]">
        <i class="absolute -top-6 right-[128px] text-[#dbdde1] text-[30px] fa-solid fa-caret-up"></i>
        {{-- Notif Card --}}
        <div class="w-full border-b-[2px] flex flex-col p-3">
            <div class="w-full flex flex-row items-center">
                <i class="fa-solid fa-clipboard-check text-[13px] me-4 w-[30px] h-[30px] rounded-full bg-green-200 flex justify-center items-center text-[#2cb379]"></i>
                <a href="#" class="w-[150px] font-bold text-[12px] me-6">Lorem ipsum dolor sit</a>
                <p class="w-[50px] text-[10px]">11/20/1034 21.32.42</p>
            </div>
            <div class="w-full h-auto px-[45px]">
                <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, amet!</p>
            </div>
        </div>
    </div>





    {{-- KERANJANG NOTIF --}}
    @if (session('success'))
        <div id="cart" class=" absolute right-[95px] top-[80px] w-[300px] h-auto h-max-[300px] flex flex-row items-center rounded-[5px] bg-white border-[2px] border-b-[5px] p-2">
            <i class="absolute -top-6 right-[128px] text-[#dbdde1] text-[30px] fa-solid fa-caret-up"></i>
            <p class="w-full text-center text-[11px]"><i class="fa-solid fa-cart-plus text-[10px] me-3"></i>{{ session('success') }}</p>
        </div>
    @endif

    <div id="divcart" class="hidden absolute w-full top-[70px] h-[1000px]">
        <div id="block" class="div w-[100%] h-[100%] bg-[#1e1442] opacity-[50%] backdrop-blur-sm absolute top-0 right-0 left-0 bottom-0 "></div>
        <div class="w-[50px] absolute top-0 right-[415px] p-6 flex flex-col">
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#ff7ea9] hover:bg-[#ff4684] items-center fa-solid fa-store text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#ff7ea9] hover:bg-[#ff4684] items-center fa-solid fa-paint-roller text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#ff7ea9] hover:bg-[#ff4684] items-center fa-solid fa-shirt text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#ff7ea9] hover:bg-[#ff4684] items-center fa-solid fa-pen-nib text-[15px] w-auto h-auto"></button>
        </div>
        <div class="div absolute right-0 top-0 w-[400px] h-[1000px] bg-[#e8e8ef]">

        </div>
    </div>
    




    
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
    <div class="w-[30%] ms-10 me-1 flex flex-row justify-end" id="divSearch">
        <form method="POST" action="/home2" class="flex flex-row">
            @csrf
            <input id="inputSearch" class="w-[100%] rounded-full border-1 h-[35px] border-[#ff4684] hidden" type="search" name="search" required autofocus autocomplete="search" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
            <button id="tomser"><i id="search" class="fa-solid fa-magnifying-glass text-[#ecc3d1] ms-[-40px] text-[15px] transition-all duration-300 hover:text-[#ff4684]"></i></button>
        </form>
    </div>
    <button id="bell" class="fa-regular fa-bell text-[20px] me-3 text-[#ff4684]"></button>
    <button id="keranjang" class="fa-solid fa-cart-shopping text-[17px] me-3 text-[#ff4684]"></button>
    <p class="absolute top-[47px] text-[#ff4684] right-[230px] text-[10px]">0</p>
    <p class="absolute top-[47px] text-[#ff4684] right-[283px] text-[10px]">0</p>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Cek apakah #success-message ada di halaman
        if ($('#cart').length) {
            // Tampilkan div selama 5 detik, kemudian sembunyikan
            setTimeout(function() {
                $('#cart').fadeOut('slow');
            }, 5000); // 5000 milidetik = 5 detik
        }
    });


    $(document).ready(function() {
        var $notif = $('#notif');
        var $bell = $('#bell');
        var $keranjang = $('#keranjang');
        var $divcart = $('#divcart');
        $bell.on('click', function() {
            $notif.toggleClass('hidden flex');
        });
        $keranjang.on('click', function() {
            $divcart.toggleClass('hidden flex');
        });
    });
</script>